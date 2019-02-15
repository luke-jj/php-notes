<?php
# basic array
$learn = array('Conditionals', 'Arrays', 'Loops');

var_dump($learn);
echo $learn[1] . "\n";
echo implode("\n", $learn);


# Inserting Elements
$learn[] = 'Build something awesome';                   # append
array_push($learn, 'Functions', 'Forms', 'Objects');    # append
array_unshift($learn, 'HTML', 'CSS');                   # add to head

# Deleting Elements
array_shift($learn);                # remove and return the first element
array_pop($learn);                  # remove and return the last element
unset($learn[1]);                   # delete specific element



?>
