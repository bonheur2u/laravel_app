<?php
namespace App\MyClasses;


class MyService
{
    private $id = -1;
    private $msg = 'no id...';
    private $data = ['Hello', 'Welcome', 'Bye'];


    public function __construct(int $id = -1)
    {
        if ($id >= 0)
        {
            $this->id = $id;
            $this->msg = 'select: ' . $this->data[$id];
        }
    }


    public function say()
    {
        return $this->msg;
    }


    public function data(int $id)
    {
        return $this->data[$id];
    }


    public function alldata()
    {
        return $this->data;
    }
}