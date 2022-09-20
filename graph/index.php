hello-world

<?php
require_once('../includes/all_php.php');
require_once('../includes/db.php');
require_once('../classes/graph.class.php');


$graph = new Graph;
$graph->graph = "家";
$components = $graph->getComponents();
var_dump($components);

