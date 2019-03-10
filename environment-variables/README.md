# Environments
Ensure that code runs properly on all environments.

## Workflow

              Local Development Environment
    Dev       Development Environment
    Prod      Production Environment
    QA        Testing / Quality Assurance


    Sandbox - testing environment

## Environment Variables
Environment Variables are stored in configuration files on the system not in
the codebase.

Keep environment variables **separate** from the codebase, gitignore.
(system configuration, passwords, api keys, etc.)


## Accessing environment variables in PHP

    getenv('SCRIPT_NAME');
    phpinfo();


## Setting environment variables

1. Set with code (separate file that is not in version control)
2. Set on the server/system

    putenv()

Popular PHP package: *PHP dotenv*

### Storing Arrays in Environment Variables
store arrays as a json string

    putenv('REPOSITORY={"type":"sqlite","source":"inc/quotes.db"}');


Include a sample file in version control containing the required variables.

    env.gmail
    env.yahoo


Throw an error if an environment variable is not found.

    #dotenv->required(['USERNAME', 'PASSWORD']);
