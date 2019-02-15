# Formtest

## HTML form Tags
### action attribute
path to resource that processes the form
### method attribute
HTTP method

## `$_POST` & `$_GET`
```
  $_POST              form data sent in request body
  $_GET               form data sent in url as query string
  $_COOKIE            holds cookie data
  $_REQUEST           holds all request data of all methods including cookies
```
global variables;
associative arrays that hold the values passed on by a previous resource.


## Process form in the same resource  
Set the `action` attribute to:

  `$_SEVER["PHP_SELF"]`         holds the name of the current file/script

### Prevent the form from showing when data was already submitted
```
    <?php
      if (!(isset($_GET["first_name"]) && isset($_GET["last_name"]))) {
    ?>
```

### Show the submitted data in the form fields
Use the $data variable to prepopulate the form fields with values.
```php
    if (isset($_GET["item"])) {
      $data = htmlspecialchars($_GET["item"]);
    } else {
      $data = "";
    }
```

## Security
### Preventing Cross-Site-Scripting
use the `htmlspecialchars()` when retrieving form data to prevent users from
creating html elements and scripts as input.
