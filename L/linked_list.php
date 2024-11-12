<?php

class ListNode
{
    public $value;
    public $next;

    public function __construct($value = null)
    {
        $this->value = $value;
        $this->next = null;
    }
}

class LinkedList
{
    private ?ListNode $head;
    private ?ListNode $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function append($value)
    {
        $newNode = new ListNode($value);
        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }
    }
    public function display()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->value . " -> ";
            $current = $current->next;
        }
        echo "Null\n";
    }
    public function insert($value)
    {
        $newNode = new ListNode($value);
        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }
    public function reverse()
    {
        $current = $this->head;
        $prev = null;
        $tempNext = null;
        while ($current !== null) {
            $tempNext = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $tempNext;
        }
        $this->head = $prev;
    }
    public function search($value)
    {
        $index = 0;

        $current = $this->head;
        while ($current !== null) {
            if ($current->value === $value) {
                print_r($current->value . " Found at index " . $index);
                return $current->value;
            }
            $current = $current->next;
            $index += 1;
        }
        return -1;
    }
}

$myList = new LinkedList();
$myList->append(2);
$myList->append(3);
$myList->append(4);
$myList->append(5);
$myList->append(6);
$myList->append(7);
$myList->insert(1);
$myList->display();
$myList->search(5);
