<?php 
class Graph {
	// field in graphs table
	public string $graph;

	public function getComponents(){
		$components = array();
		global $db;
      	$qry = 'SELECT component FROM graph_components WHERE graph=:graph;';
      	$stmt = $db->prepare($qry);
      	$stmt->bindValue(':graph', $this->graph);
      	$stmt->execute();
      	$components = $stmt->fetchAll(PDO::FETCH_CLASS);
      	return $components;
	}
}
