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
            <a href="myrelease.php">
                <img src="images/me.png"/>                  <!-- 读取用户头像然后显示 -->
<!--            <img src="--><?//= $userinfo['headimgurl'] ?><!--">-->
            </a>
            <select id="selArea" name="area">
                <option value="all">地区筛选</option>
                <?php
                // 获取数据库中存在的地区，并且输出到下拉框中
                // for ($i=0; $i < ; $i++) { 
                //     echo "<option name='area'>".."</option>";
                // }
                ?>
            </select>
            <select id="selProfession" name="profession">
                <option value="all">行业筛选</option>
                <option value="IT|通信|电子|互联网">IT|通信|电子|互联网</option>
                <option value="金融业">金融业</option>
                <option value="房地产|建筑业">房地产|建筑业</option>
                <option value="商业服务">商业服务</option>
                <option value="贸易|批发|零售|租赁业">贸易|批发|零售|租赁业</option>
                <option value="文体教育|工艺美术">文体教育|工艺美术</option>
                <option value="生产|加工|制造">生产|加工|制造</option>
                <option value="交通|运输|物流|仓储">交通|运输|物流|仓储</option>
                <option value="服务业">服务业</option>
                <option value="文化|传媒|娱乐|体育">文化|传媒|娱乐|体育</option>
                <option value="能源|矿产|环保">能源|矿产|环保</option>
                <option value="政府|非盈利机构">政府|非盈利机构</option>
                <option value="其他">其他</option>
            </select>
            <a id="release" href="release.php">+发布</a>
        </div>
        <div id="divSecond">
            <!-- <a class="practice" href="detail.php?id=">
                <div class="practice_bg">实</div>
                <h3>[<?php echo $_POST['job_type'];?>]<?php echo $_POST['job_name'];?></h3>
                <span class="company"><?php echo $_POST['company'];?></span><br>
                <span><span class="salary"><?php echo $_POST['salary'];?></span>|<?php echo $_POST['job_city'];?>|<?php echo $_POST['sel_education'];?><p><?php echo $_POST['end_date']."截止";?></p></span>
            </a>
            <a class="fullTime" href="detail.php?id=">
                <div class="fullTime_bg">全</div>
                <h3>[<?php echo $_POST['job_type'];?>]<?php echo $_POST['job_name'];?></h3>
                <span class="company"><?php echo $_POST['company'];?></span><br>
                <span><span class="salary"><?php echo $_POST['salary'];?></span>|<?php echo $_POST['job_city'];?>|<?php echo $_POST['sel_education'];?><p><?php echo $_POST['end_date']."截止";?></p></span>
            </a> -->
        </div>
    </div>
    <script type="text/javascript">
    // function loadMessage(swh,id)
    // {
    //     var xmlhttp;
    //     var select = document.getElementById(id);
    //     var value = select.value;
    //     var url="checkAjax.php";              //ajax操作的php文件，获取数据库内容，并且按一定格式输出
    //     url = url+"?name="+swh+"&value="+value;
    //     if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
    //         xmlhttp=new XMLHttpRequest();
    //     }
    //     else{// code for IE6, IE5
    //       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    //     }
    //     xmlhttp.onreadystatechange=function(){
    //       if (xmlhttp.readyState==4 && xmlhttp.status==200)
    //         {
    //         document.getElementById("divSecond").innerHTML=xmlhttp.responseText;
    //         }
    //       }
    //     xmlhttp.open("GET",url,true);
    //     xmlhttp.send();
    // }
    $(document).ready(function(){
        var url="checkAjax.php?";
        areaValue = $("#selArea").val();
        professionValue = $("#selProfession").val();
        $("select").bind("change",function(){
            var selectId = $(this).attr("id");
            // console.log($(this).attr("id"));
            if(selectId == "selArea")
            {
                areaValue = $(this).val();
            }
            else{
                professionValue = $(this).val();
            }
            url = url+"area="+areaValue+"&profession="+professionValue;
            $("#divSecond").load(url);
        });
        url = url+"area="+areaValue+"&profession="+professionValue;
        $("#divSecond").load(url);
    });
    </script>
</body>
</html>