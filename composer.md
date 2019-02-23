# Managing Dependencies with Composer

    composer require 'package'      add a package to this project
    composer install                install listed packages for this project
    composer update                 update all packages in this project
    composer show                   list all installed packages

Packages are stored project localy in the `vendor` folder.
the `vendor` folder can be added to `.gitignore`.


## Semantic Versioning

    7.0.11
    Major.Minor.Patch

Minor and Patch Updates should be backwards compatible. (non-breaking)

`composer.json` file stores package and version information for this project.

    ~           specifies a minimum version but the last digit may go up
    ^           specifies a minimum version but allow all non breaking updates

`composer.lock` file locks packages to a known state.


## Installing the Slim Microframework In The Current Directory/Project

    composer require slim/slim
