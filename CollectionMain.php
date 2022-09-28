<?php
include('classe1.php');

  $car = new Carro();
  $car->setColor("black");
  $car->setAno("1998");
  $car->setName("celta");
  echo  "$car->getColor . PHP_EOL . $car->getAno() . PHP_EOL . $car->getName() . PHP_EOL";


class AlphabeticalOrderIterator implements \Iterator 
{
    private $collection;
    public $position = 0;
    private $reverse = false;

    public function __construct($collection, $reverse = false) 
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }
    public function rewind() : void
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }
    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }
    public function key()
    {
        return $this->position;
    }
    public function next() : void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }
    public function valid() : bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}

class TestandoIter implements \IteratorAggregate {
    private $items = [];
    public function getItems() 
    {
        return $this->items; 
    }
    public function addItems($item) 
    {
        $this->items[] = $item;
    }
    public function getIterator(): Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    
}

$collection = new TestandoIter();
$collection->addItems("First");
$collection->addItems("Second");
$collection->addItems("Third");

foreach($collection->getIterator() as $item) {
  echo $item . PHP_EOL;
}

foreach($collection->getItems() as $item) {
  echo $item . PHP_EOL;
}