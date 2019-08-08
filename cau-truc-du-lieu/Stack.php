<?php

class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10, $initial = array())
    {
        $this->stack = $initial;
        $this->limit = $limit;
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
             return array_unshift($this->stack, $item);
        } else
            echo "Stack is full";
    }

    public function pop(){
        if (!$this->isEmpty()){
            return array_shift($this->stack);
        } else
            echo "stack is empty";
    }

    public function top(){
        return current($this->stack);
    }

    public function getStack(){
        return $this->stack;
    }
}

$number = [2, 3, 4, 5];
$stack_example = new Stack(5, $number);
$stack_example->push(1);
print_r($stack_example->getStack());

$stack_example->pop();
print_r($stack_example->getStack());

echo $stack_example->top();
