<?php

namespace App;

class MyRootClass {

    protected $data = [];

    public function addData($data)
    {
        $this->data[] = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}