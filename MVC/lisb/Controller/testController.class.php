<?php

class testController
{
    function shou()
    {//控制器的作用是调用模型，并调用视图，将模型产生的数据传递给视图，并让相关视图去显示
        $testModel = new testModel();
        $data = $testModel->get();
        $testView=new testView($data);

    }
}
