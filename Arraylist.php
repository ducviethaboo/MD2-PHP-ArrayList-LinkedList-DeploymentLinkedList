<?php


class Arraylist
{
    public $arraylist;

    public function __construct($arr = '')
    {
        if (is_array($arr) == true) {
            $this->arraylist = $arr;
        } else {
            $this->arraylist = [];
        }
    }

    public function showArraylist()
    {
        return $this->arraylist;
    }
    public function add($data)
    {
        array_push($this->arraylist, $data);
    }

    public function get($index)
    {
        if (is_int($index)) {
            $position = $this->arraylist[$index];
        }
        return $position;
    }

    public function remove($index)
    {
        if (is_int($index)) {
            array_splice($this->arraylist, $index, 1);
        }
        return $this->arraylist;
    }

}