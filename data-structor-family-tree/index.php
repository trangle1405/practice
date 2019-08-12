<?php

class Node
{
    public $data;
    public $firstChild;
    public $subling;

    public function __construct($data)
    {
        $this->data = $data;
        $this->firstChild = null;
        $this->subling = null;
    }

    public function getData()
    {
        return $this->data;
    }

    public function addChild($child)
    {
        if ($this->firstChild === null) {
            $this->firstChild = $child;
        } else {
            $current = $this->firstChild;
            while ($current->subling !== null) {
                $current = $current->subling;
            }
            $current->subling = $child;
        }
    }
}

class Tree
{
    public $root;

    public function __construct($nodeRoot)
    {
        $this->root = $nodeRoot;
    }

    public function addNode($parentNode, $childNode)
    {
        $result = $this->searchInTree($this->root, $parentNode->data);
        if ($result != null) {
            $parentNode->addChild($childNode);
        }
        else echo "khong tim thay $parentNode->data";
    }

    public function readTree($node, $listData = array())
    {
        if ($node != null) {
            array_push($listData, $node);
        }
        if ($node->firstChild != null) {
            $this->readTree($node->firstChild, $listData);
        }
        if ($node->subling != null) {
            $this->readTree($node->subling, $listData);
        }
        return $listData;
    }

    public function searchInTree($node, $dataMustFind)
    {
        if ($node == null) {
            return $node;
        }
        if ($node->data === $dataMustFind) {
            return $node;
        }
        $result = null;
        if ($node->subling != null) {
            $result = $this->searchInTree($node->subling, $dataMustFind);
        }
        if ($result == null) {
            $result = $this->searchInTree($node->firstChild, $dataMustFind);
        }
        return $result;

    }

}

$A = new Node("A");
$B = new Node("B");
$C = new Node("C");
$D = new Node("D");
$E = new Node("E");
$F = new Node("F");
$G = new Node("G");
$H = new Node("H");
$I = new Node("I");

$treeA = new Tree($A);
$treeA->addNode($A, $B);
$treeA->addNode($A, $C);
$treeA->addNode($A, $D);
$treeA->addNode($B, $E);
$treeA->addNode($B, $F);
$treeA->addNode($D, $G);
$treeA->addNode($D, $H);
$treeA->addNode($D, $I);

$dataMustFind = "E";

echo "<pre>";
print_r($treeA->readTree($treeA->root));
print_r($treeA->searchInTree($treeA->root, $dataMustFind));
echo "</pre>";