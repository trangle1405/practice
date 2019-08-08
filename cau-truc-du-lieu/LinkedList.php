<?php

class ListNode
{
    /* Data to hold */
    public $data;

    /* Link to next node */
    public $next;


    /* Node constructor */
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}


class LinkList
{
    /* Link to the first node in the list */
    private $firstNode;

    /* Link to the last node in the list */
    private $lastNode;

    /* Total nodes in the list */
    private $count;


    /* List constructor */
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function isEmpty()
    {
        return ($this->firstNode == NULL);
    }

    public function insertFirst($data)
    {
        $link = new ListNode($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        /* If this is the first node inserted in the list
           then set the lastNode pointer to it.
        */
        if ($this->lastNode == NULL)
            $this->lastNode = $link;

        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new ListNode($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }


    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        foreach($listData as $value){
            echo $value." ";
        }
    }




}