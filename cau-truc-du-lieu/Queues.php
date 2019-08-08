<?php
class Queue
{
    protected $queue;
    protected $limit;

    public function __construct($limit = 10, $initial =[])
    {
        $this->queue = $initial;
        $this->limit = $limit;
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function enqueue($item)
    {
        if (count($this->queue) < $this->limit) {
            return array_unshift($this->queue, $item);
        } else
            echo "Queue is full";
    }

    public function dequeue(){
        if (!$this->isEmpty()){
            return array_pop($this->queue);
        } else
            echo "Queue is empty";
    }

    public function top(){
        return current($this->queue);
    }

    public function getQueue(){
        return $this->queue;
}
}

$number = [2, 3, 4, 5];
$queue_example = new Queue(5, $number);
$queue_example->enqueue(1);
print_r($queue_example->getQueue());

$queue_example->dequeue();
print_r($queue_example->getQueue());


