@shout

Feature:
  Scenario: Shout quotes
    Given I send a "GET" request to "/shout/steve-jobs"
    Then the response status code should be 200
    And The response body should be
    """
      ["YOUR TIME IS LIMITED, SO DON'T WASTE IT LIVING SOMEONE ELSE'S LIFE!","THE ONLY WAY TO DO GREAT WORK IS TO LOVE WHAT YOU DO!"]
    """