<?php

class ArrayList
{
    public $arrayList;

    public function arrayList($arr = '')
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    public function get($index)
    {
        return $this->arrayList[$index];
    }
}
