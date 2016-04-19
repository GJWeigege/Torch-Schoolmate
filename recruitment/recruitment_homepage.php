<?php
include_once('../dbconnect.php');
header("Content-Type:text/html;   charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>招聘信息列表</title>
    <script src="jss/jquery-2.1.4.min.js"></script>
    <link href="css/homepage.css" rel="stylesheet">
</head>
<body>
    <div id="contain">
        <div id="divFirst">
            <a href="myrelease.php"><img src="images/me.png"/></a>
<!--            <img src="--><?//= $userinfo['headimgurl'] ?><!--">-->
            <select id="selArea" onchange="loadMessage(selArea)">
                <option name="area">地区筛选</option>
                <?php
                for ($i=0; $i < ; $i++) { 
                    echo "<option name='area'>".."</option>";
                }
                ?>
                <!-- <option name="area">大连</option>
                <option name="area">北京</option>
                <option name="area">上海</option>
                <option name="area">深圳</option>
                <option name="area">广州</option> -->
            </select>
            <select id="selProfession" onchange="loadMessage(selProfession)">
                <option name="profession" value="all">行业筛选</option>
                <option name="profession" value="internet">IT|通信|电子|互联网</option>
                <option name="profession" value="financial">金融业</option>
                <option name="profession" value="estate">房地产|建筑业</option>
                <option name="profession" value="buss_services">商业服务</option>
                <option name="profession" value="trade">贸易|批发|零售|租赁业</option>
                <option name="profession" value="education">文体教育|工艺美术</option>
                <option name="profession" value="production">生产|加工|制造</option>
                <option name="profession" value="traffic">交通|运输|物流|仓储</option>
                <option name="profession" value="services">服务业</option>
                <option name="profession" value="culture">文化|传媒|娱乐|体育</option>
                <option name="profession" value="energy">能源|矿产|环保</option>
                <option name="profession" value="government">政府|非盈利机构</option>
                <option name="profession" value="others">其他</option>
            </select>
            <a id="release" href="release.php">+发布</a>
        </div>
        <div id="divSecond">
            <div class="practice"></div>
            <div class="fullTime"></div>
        </div>
    </div>
    <script type="text/javascript">
    function loadMessage(swh)
    {
        var xmlhttp;
        if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else{// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function(){
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
            }
          }
        xmlhttp.open("GET","",true);
        xmlhttp.send();
    }
    </script>
</body>
</html>