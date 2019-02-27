<?php
/* conventions
- one class per file
- filename same as classname
- all classes are stored in a folder named 'classes'
*/

class Recipe {
  // properties
  public $title;
  public $ingredients = array();
  public $instructions = array();
  public $yield;
  public $tag = array();
  public $source = "Spinach Steve";
}

// instanciating instances/objects of a class
$recipe1 = new Recipe();
$recipe2 = new Recipe();
var_dump($recipe1);

// accessing properties of an object
echo $recipe1->source;

// setting properties of an object
$recipe1->source = "Grandpa Steve";
$recipe2->source = 'Carry Carrot';
