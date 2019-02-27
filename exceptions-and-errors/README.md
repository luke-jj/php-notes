# Errors and Exceptions in PHP
**Errors** are the procedural approach to handle system malfunctions, while
**Exceptions** are the object-oriented approach to handle malfunctions.

## Errors in PHP: Error Types
### System/Internal Errors
Logic errors in code.

### External Errors
Errors related to interactions with the world outside the program.


## Handling Errors
1. Log or Report the error (logfile for review)
2. Display the error (shown to the user/developer during runtime)
3. Act on the error (trigger tasks, alert, email)
4. Ignore the error (!avoid this!)


## Error Levels
### Notice
does not stop program execution

### Warning
does not stop program execution

### Fatal Error
stops execution of the program


## Displaying Errors On Screen
Never display errors to users on a production server! security risk!
Display errors only in development environments.

### php.ini
find php.ini file with `phpinfo()` or `phpinfo.php`

    /Applications/MAMP/bin/php/php7/conf/php.ini

    error_reporting = E_ALL                - error reporting all

    display_errors = On                    - error display
    display_startup_errors = On
    html_errors = Off                      - toggle format errors with html

    log_errors = On
    error_log = "/Applications/MAMP/logs/php_error.log" - the logfile


### .htaccess
.htaccess is a configuration file for the webserver
should not be commited to .git files

[.htaccess](.htaccess) - Settings in this file cause the server to display all
errors

### in php code
    error_reporting(E_ALL);             report simple errors

    ini_set('display_errors', 1);       turn on display errors
    ini_set('html_errors', 1);          enable html formatting for error display

    ini_set('log_errors', 1);           toggle logging
    ini_set('error_log', 'log.txt');    logfile location

    @ - symbol - suppress warnings from this statement
    @include 'non-existent-file';  # no warning from this statement


## Error Handling
    use the `die($msg)` function
    fopen($site, 'r') or die('unable to open file.');

    use the `trigger_error($msg)` function
    trigger_error("Value must be greather than or equal 1");

    use a custom function to handle errors
    function customError($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr<br>";
        echo "Ending Script";
        die();
    }
    set_errorhandler("customError");
    }


## Exceptions in PHP
An exception is an object.
An exception is *thrown* in the event that something goes wrong.

When an exception is thrown it halts the processing of the program,
until the exception is either *caught* or *left unhandled*.

Unhandled Exceptions behave like a fatal error and stop the application.
Caught Exceptions redirect the control flow. The programmer can determine
programmatically what happens when an Exception occurs.

Exceptions are meant to be *handled*, either resolved, or re-thrown.
Exceptions should not be silenced or ignored.

### try - catch - finally

### Display all errors as exceptions [errors as exceptions](exceptions.php)
    ini_set('display_errors', 'Off');

    function exception_error_handler($severity, $message, $file, $line) {
      throw new ErrorException($message, 0, $severity, $file, $line);
    }

    set_error_handler("exception_error_handler");

### Default Exception Handler
    function exception_handler($e) {
      echo "Uncaught exception: " . $e->getMessage();
    }

    set_exception_handler("exception_handler");

