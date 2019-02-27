# Slim Framework
(Slim Tutorial)[https://www.slimframework.com/docs/v3/tutorial/first-app.html]

## Create a basic mvc skeleton

    composer create-project slim/slim-skeleton mvc-framework

    set the /public/ folder as the www root for your server

## Framework Folder Structure

    logs/               log files

    public/             publically accessible files

    src/                controllers

    templates/          views

    tests/              unit tests

    vendor/             dependencies


## Dependency Management
Composer

tightly coupled vs loosely coupled (dependency injection)
requiring the actual dependency vs requiring a dependency container


## Routes

    $app->get(resource-url, function(request, response, array))
    $app->post(resource-url, function(request, response, array))
    $app->map(['GET', 'POST'], resource-url, function(request, response, array))

use `[{optional}]` to add optional paths to the resource uri

append `->setName(string)` to a route to to name it.

use `$request->getParsedBody()` to access values from a POST request


## Middleware
authentication, security, error handling, sessions, debugging, url modification
Requests and Responses pass through active middleware.

Middleware is a layer between the server and client that can manipulate the
request and response objects.

Installation Process:
https://github.com/slimphp/Slim-Csrf

1. add a container in `dependencies.php`
2. register middleware for all routes
