<?php
    include_once('dbconnect.php');          //引入数据连接的php
    if(isset($_POST['submit'])){            //如果点击了提交按钮
        if($_POST['frm']=="frm_material"){          //判断提交的是哪个页面
            //这是证明材料的提交表单
            $openid = $_GET['open_id'];
            $name = $_POST['name'];
            $tel = $_GET['tel'];
            $teacher_name = $_POST['teacher_name'];
            $sch_mate1 = $_POST['sch_mate_name1'];
            $sch_mate2 = $_POST['sch_mate_name2'];
            $material = $_POST['material'];
            //插入数据的SQL语句
            $result =mysql_query("insert into tb_sch_server VALUE ('$openid','$name',$tel,'$teacher_name','$sch_mate1','$sch_mate2','$material')")or die(mysql_error()."gg");
            if($result){
                //插入成功跳转到成功提交界面
                echo "<script>window.location.href='sub_success.php';</script>";
            }
            else{
                //插入失败跳转回原页面
                echo "<script>history.go(-1);</script>";
            }

        }
        if($_POST['frm']=="frm_part_time_job"){
            //这是兼职发布提交的表单
            $openid = $_POST['openid'];
            $requirements = $_POST['requirements'];
            //插入数据的SQL语句
            $result =mysql_query("insert into tb_part_time_job VALUE ('$openid','$requirements')")or die(mysql_error()."gg");
            if($result){
                //插入成功跳转到成功提交界面
                echo "<script>window.location.href='sub_success.php';</script>";
            }
            else{
                //插入失败跳转回原页面
                echo "<script>history.go(-1);</script>";
            }
        }
        if($_POST['frm']=="frm_bussiness_need"){
            //这是创业帮扶提交的表单
            $openid = $_POST['openid'];
            $bsn_requirements = $_POST['bsn_requirements'];
            //插入数据的SQL语句
            $result =mysql_query("insert into tb_bussiness_need VALUE ('$openid','$bsn_requirements')")or die(mysql_error()."gg");
            if($result){
                //插入成功跳转到成功提交界面
                echo "<script>window.location.href='sub_success.php';</script>";
            }
            else{
                //插入失败跳转回原页面
                echo "<script>history.go(-1);</script>";
            }
        }
    }
?>