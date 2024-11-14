<?php

class Graph
{
    private $adjacencyList = [];

    public function addEdge($node, $neighbor)
    {
        $this->adjacencyList[$node][] = $neighbor;
        $this->adjacencyList[$neighbor][] = $node; // For undirected graph
    }

    public function dfs($start)
    {
        $visited = [];
        $this->dfsHelper($start, $visited);
    }

    private function dfsHelper($node, &$visited)
    {
        if (isset($visited[$node])) {
            return;
        }

        // Mark the node as visited
        $visited[$node] = true;
        echo $node . " ";

        // Visit all neighbors
        if (isset($this->adjacencyList[$node])) {
            foreach ($this->adjacencyList[$node] as $neighbor) {
                $this->dfsHelper($neighbor, $visited);
            }
        }
    }
}

// Example usage:
$graph = new Graph();
$graph->addEdge(1, 2);
$graph->addEdge(1, 3);
$graph->addEdge(2, 4);
$graph->addEdge(3, 5);
$graph->addEdge(4, 6);

echo "DFS starting from node 1: ";
$graph->dfs(1);
