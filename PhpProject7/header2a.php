<?php ob_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>網頁每隔20秒向server讀取資料</title>
    </head>
    <body>
        <div id="showtime"></div>
        <div id="time1"></div>
        <script>
            var timelimit=20;
            timecount();
            var ti2;
            function timecount()
            {
                if (timelimit != 0)
                {
                    timelimit -= 1;
                    nowtime = new Date();
                    ti2=nowtime.getHours()+":"+nowtime.getMinutes()+":"+nowtime.getSeconds();
                    document.getElementById("showtime").innerHTML = "剩下" + timelimit + "秒";
                    document.getElementById("time1").innerHTML = "script顯示時間為" + ti2;
                }
                setTimeout("timecount()",1000);
            }
            </script>
        <?php
        header("refresh:20");
        $dateTime = new DateTime("now", new DateTimeZone('Asia/Taipei'));
        echo "現在時間：".$dateTime->format("h:i:s");
        ?>
    </body>
</html>
