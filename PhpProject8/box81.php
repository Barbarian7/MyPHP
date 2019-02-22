<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>類別規劃語法</title>
    </head>
    <body>
        <?php
        class cbox {
            public $maiaki=1;
            private $kiwi=2;
            private $data = array();
            public function __set($name, $value) {
                echo "這是不存在或者私有成員 '$name' 内容為 '$value'<br>";
                $this->data[$name] = $value;
                echo "呼叫 __set<br>";
            }
            public function __get($name)
            {
                echo "呼叫 __get<br>";
                echo "讀取 '$name' 資料，但是並不存在或者私有<br>";
                if (array_key_exists($name, $this->data)) {
                    echo "已經經過set後可以讀取<br>";
                    return $this->data[$name];
                }
 else {
     echo "資料不可讀取<br>";
     return null;
 }
            }
            public function __isset($name) 
            {
                echo "呼叫  __isset<br>";
                echo " '$name' 是否可以設定？<br>";
                return isset($this->data[$name]);
            }
            public function __unset($name)
            {
                echo "解除 '$name' 設定<br>";
                unset($this->data[$name]);
                echo "呼叫 __unset<br>";
            }
            public function getkiwi()
            {
                return $this->kiwi;
            }
            public function __call($name, $arguments)
            {
                echo "呼叫的方法名稱為 '$name'<br>";
                echo "傳送進來的内容為".implode(', ', $arguments)."<hr>";
            }
        }
         $obj = new cbox;
        echo 'a並不存在，執行$obj->a = 1動作<br>';
        $obj->a = 1;
        echo '<hr>a並不存在，執行echo $obj->a動作<br>';
        echo $obj->a."<hr>";
        echo 'kiwi存在但是是私有，執行$obj->kiwi = 10 動作<br>';
        $obj->kiwi = 10;
        echo '<hr>kiwi存在但是是私有，執行echo $obj->kiwi動作<br>';
        echo $obj->kiwi."<hr>";  
        ?>
    </body>
</html>
