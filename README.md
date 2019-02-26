# PHP data

## Pre-PHP 7 Tags
    <script language="php"> </script>
    <% %>
    <? ?>

## Current Tags

    <?php ?>          recommended
    <?=$value; ?>      include variable in html


## Constants
    const MAX = 10;
    define("MAX", 10);

## DataTypes

    string
    int
    float
    bool
    null

### Strings
    .   .=      concatenation
    {}          interpolation inside string literals

## Functions

    include()       include "header.php"
    require()       return fatal error if file can not be loaded
    phpinfo()
    echo()
    print()
    var_dump()
    rand(min, max)
    boolval()       convert value to boolean

    count()         return array length

    isset()         check if variable exists
    empty()         isset() + variable not empty string
    unset()         unset or delete a variable

    nl2br()             convert newline characters to <br> elements
    htmlspecialchars()
    stripslashes()

    setcookie()
    session_start()

## Escape Sequences

    \\
    \n
    \t
    \$
    \"
    \'
    \r
    \v
    \f
    \100            oct char
    \x40            hex char


## Operators
    ==  !=            same value
    === !==           same value and same type
    **                exponentiation
    ? :               ternary operator
    ??                null coalescing operator

### Spaceship Operator
    <=>               spaceship operator (returns -1, 0, 1)

    $compare = 2 <=> 1;
    # 2 < 1 ?   return -1
    # 2 = 1 ?   return 0
    # 2 > 1 ?   return 1

### Null Coalesce Operator
    ??          if-set-or
                return left operand if it is not null else return right operand

    $name = $firstName ?? "Guest";

    Return the value of $firstName if it is not null, else return "Guest".
