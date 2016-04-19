<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>发布招聘信息</title>
    <script src="jss/jquery-2.1.4.min.js"></script>
    <link href="css/release.css" rel="stylesheet">
</head>
<body>
    <form action="preview.php" method="post">
    <!--  表单 -->
        <span>职位名称</span><input type="text" name="job_name" ><br>
        <span>所属行业</span><select name="sel_profession" id="sel_profession">
            <option value="">请选择</option>
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
        <br>
        <span>学历</span><select name="sel_education" id="sel_education">
            <option value="">请选择</option>
            <option value="不限">不限</option>
            <option value="本科生">本科生</option>
            <option value="研究生">研究生</option>
            <option value="博士生">博士生</option>
        </select><span>薪资</span><select name="salary" id="sel_salary">
            <option value="">请选择</option>
            <option value="面议">面议</option>
            <option value="1k以下">1k以下</option>
            <option value="1k-2k">1k-2k</option>
            <option value="2k-3k">2k-3k</option>
            <option value="3k-4k">3k-4k</option>
            <option value="4k-5k">4k-5k</option>
            <option value="5k-6k">5k-6k</option>
            <option value="6k-8k">6k-8k</option>
            <option value="8k-12k">8k-12k</option>
            <option value="12k-15k">12k-15k</option>
            <option value="15k以上">15k以上</option>
        </select>
        <br>
        <span>招聘人数</span><input type="text" name="num_person" id="text_person">
        <span>截止日期</span>
        <input type="date" name="end_date" id="date">
        <br>
        <span>工作类型</span>
        <input type="radio" name="job_type" value="全职" checked>全职
        <input type="radio" name="job_type" value="实习">实习
        <br>
        <span>公司名称</span><input type="text" name="company"><br>
        <div id="address"><span>所在地区</span><select id="provinces" name="job_city">
            <option value="">省份</option>
            <option>北京</option>
            <option>天津</option>
            <option>重庆</option>
            <option>上海</option>
            <option>河北</option>
            <option>山西</option>
            <option>辽宁</option>
            <option>吉林</option>
            <option>黑龙江</option>
            <option>江苏</option>
            <option>浙江</option>
            <option>安徽</option>
            <option>福建</option>
            <option>江西</option>
            <option>山东</option>
            <option>河南</option>
            <option>湖北</option>
            <option>湖南</option>
            <option>广东</option>
            <option>海南</option>
            <option>四川</option>
            <option>贵州</option>
            <option>云南</option>
            <option>陕西</option>
            <option>甘肃</option>
            <option>青海</option>
            <option>台湾</option>
            <option>内蒙古</option>
            <option>广西</option>
            <option>新疆</option>
            <option>西藏</option>
            <option>宁夏</option>
            <option>香港</option>
            <option>澳门</option>
        </select></div>
        <span>具体地址</span><input type="text" name="job_address"><br>
        <span>职位描述</span><br>
        <textarea rows="8" placeholder="可详细描述职位要求及工作详情" name="job_require"></textarea><br>
        <span>投递邮箱</span><input type="text" name="mail_address" id="mail_address"><br>
        <div id="sub_mit"><button type="submit" value="submit" id="my_submit">我写完了，预览</button></div>
    </form>
</body>
    <script src="jss/release.js"></script>
</html>
