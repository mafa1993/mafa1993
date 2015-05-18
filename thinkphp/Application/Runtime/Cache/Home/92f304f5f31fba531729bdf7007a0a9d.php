<?php if (!defined('THINK_PATH')) exit();?><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/init.css" />	
	<style type="text/css">
		#back{
			width: 1000px;
			height: 400px;
			margin: 3px auto;
            background: url("/thinkphp/Public/images/index_main02.png");
		}

        div div{
            height: 400px;
            width: 900px;
            margin: 9px auto;
            background-color: #ffffff;
            border: 1px solid black;
            opacity:0.6;
            font-size: 20px;
            padding: 20px 20px;
            font-weight: bold;
        }
	</style>
	<title>潍坊学院公寓管理系统</title>
</head>
<body>
	<div id='back'>
		<!--img src="/thinkphp/Public/images/index_main02.png" /-->
        <div>
            <a href="<?php echo U('index/addstudent?id=1');?>" target="main">增加学生信息</a><br /><br />
            <a href="<?php echo U('index/deletestudent?id=1');?>" target="main">删除学生信息</a><br /><br />
            <a href="<?php echo U('index/savestudent?id=1');?>" target="main">修改学生信息</a><br /><br />
            <a href="<?php echo U('index/selectstudent?id=1');?>" target="main">查找学生信息</a>
        </div>
	</div >
</body>
</html>