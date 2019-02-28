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

Popular PHP package: *PHP dotenv*
