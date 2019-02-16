<?php
# basic function definition
function hello() {
    echo "Hello, World!\n";
}

hello();


# function accesses outside variables with `global`
$currentUser = 'Mike';
function is_mike() {
    global $currentUser;
    if ($currentUser == 'Mike') {
        echo 'It is Mike!' . "\n";
    } else {
        echo 'Nope, it is not Mike.';
    }
}

is_mike();


# functions with parameters
function hi($name) {
    echo "Hello, $name!\n";
}
hi('Charlie');

function hello_there($array) {
    if (is_array($array)) {
        foreach($array as $name) {
            echo "Why helllo theaa, $name!\n";
        }
    } else {
        echo "Hello, friends!\n";
    }
}
hello_there(['Peter', 'Charles', 'Derek']);
hello_there('sdffsdfsdf');


# functions with default arguments,
# `Null` has to be used to make arguments completely optional
function greet($name = 'friend', $time_of_day = Null) {
    echo "Hello $name!\n";
}

function get_info($name, $title = Null) {
    if ($title) {
        echo "$name has arrived, they are with us as a $title\n";
    } else {
        echo "$name has arrived, welcome!\n";
    }
}
get_info('Mike', 'frog');


# functions with return values
function bienvenue() {
    return "Hello, World!!!!!\n";
}
echo bienvenue();

# mulitple values can only be returned with an array
function add($a, $b) {
    return $arr = array(
        $a,
        $b,
        $a + $b
    );
}
print_r(add(4, 10));


# first class citizen functions / variable functions
$func = 'bienvenue';
$func2 = 'hello';

echo $func(); # tries to call a function with the name 'bienvenue'
$func2();

$func3 = function() {
    echo "I am a first class citizen!\n";
};
$func3();


# closures
# functions with no name, that are capable of accessing state/variables
# outside of the function scope.
$name = 'friend';

$greet = function() use ($name) {       # the `use` keyword is needed
    echo "Hello there, $name.\n";       # to access outside state
};
$greet();

?>

