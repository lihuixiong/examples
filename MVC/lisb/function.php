<?php

function C($name, $method)
{
    require_once('./lisb/Controller/' . $name . 'Controller.class.php');
    // $testController=new testController();
    // $testController->shou();
    eval(' $obj=new ' . $name . 'Controller(); $obj->' . $method . '();');
}
C('test', 'show');

function M($name)
{
    ruquire_once('./lisb/Model/' . $name . 'Model.class.php');
    //$testModel = new testModel();
    eval('$obj=new '.$name.'Model();');
    return $obj;
}

function V($name)
{
    require_once('./lisb/View/'.$name.'View.class.php');
   // $View=new testView();
   eval('$obj=new '.$name.'View()');
}
