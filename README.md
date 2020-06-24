# theysaidsov2

#### About
This project is a mini REST API with a single endpoint developed with Symfony v4.4. It was done according the requirements specified by this technical challenge : https://github.com/iPresence/backend_test

Access to the API : https://radiant-springs-24734.herokuapp.com/

Of course there is still a lot of room for improvement here, such as :
- Set up a live documentation/client test page (with Swagger ?)
- Make a seeder script to populate a db table with quote references and manipulate it as an entity/model
- Add more precise test cases

Feedbacks are more than welcomed as I'm not entirely familiar with the Symfony ecosystem and I easily can imagine better practices could be done compared to my implementation.

##### Why v2 by the way ?
This is a v2 version because the v1 was done with Symfony v5.1 which had incompatibility issues in the related dependancies when deploying with Heroku. Because of that, I simply started over on this v2 repository with Symfony v4.4. Feel free to check the v1 commit history to see how the API was initially implemented (I might delete it at some point though).
