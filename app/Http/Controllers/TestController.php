<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function md5test()
    {
        echo "接收端";
        echo '</br>';
        echo '<pre>';
        print_r($_GET);
        echo '</pre>';

        // 计算签名的key 和发送端保持一致
        $key = "1905";

        //验签
        $data = $_GET['data'];  //接收到的数据

        $signature = $_GET['signature'];    //发送端的签名

        // 计算签名
        echo "接收到的签名：" . $signature;
        echo '</br>';
        $s = md5($data . $key);
        echo '接收端计算的签名：' . $s;
        echo '</br>';

        //与接收到的签名 做比对进行判断
        if ($s == $signature) {
            echo "验签通过";
        } else {
            echo "验签失败";
        }

        echo '11111111111';
    }
}