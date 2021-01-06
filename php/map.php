<?php 

$people = [ 0 => ['Tim', 'Tony', 'Turanga'],
            1 => ['chicken', 'beef', 'slurm']
]; 
$foods = ['chicken', 'beef', 'slurm'];


var_dump(array_map(function($person) { return "$person[0] likes $person[1]\n";
}, $people));

?>