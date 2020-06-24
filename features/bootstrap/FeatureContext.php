<?php

use Behat\Behat\Context\Context;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * This context class contains the definitions of the steps used by the demo
 * feature file. Learn how to get started with Behat and BDD on Behat's website.
 *
 * @see http://behat.org/en/latest/quick_start.html
 */
class FeatureContext implements Context
{
    /**
     * @var KernelInterface
     */
    private $kernel;

    /**
     * @var Response|null
     */
    private $response;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * @When I send a "([^"]*)" request to "([^"]*)"
     * @param $method
     * @param $uri
     * @throws Exception
     */
    public function iSendARequestTo($method, $uri)
    {
        $this->response = $this->kernel->handle(Request::create($uri, $method));
    }

    /**
     * @Then The response status code should be
     */
    public function theResponseStatusCodeShouldBe($expected_status_code)
    {
        $response_status_code = $this->response->getStatusCode();

        if ($response_status_code != $expected_status_code) {
            throw new Exception(sprintf(
                'Expected response status code was "%s" but got "%s".',
                $expected_status_code,
                $response_status_code
            ));
        }
    }

    /**
     * @Then The response body should be
     *
     * @param $expected_response_body
     * @throws \Exception
     */
    public function theResponseBodyShouldBe($expected_response_body)
    {
        $response_body = trim($this->response->getContent());

        if ($response_body !== $expected_response_body) {
            throw new Exception(sprintf(
                'Expected response body was "%s" but got "%s".',
                $expected_response_body,
                $response_body
            ));
        }
    }
}
