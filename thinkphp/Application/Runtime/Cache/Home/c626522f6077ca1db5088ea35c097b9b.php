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
            <form method="post" action="<?php echo U('index/selectstudent?id=2');?>">
            输入查询条件：<input type="text" name="value" /><br /><br />
            按学号<input type='radio' name='choice' value='sno' checked='checked'/>
            按性别<input type='radio' name='choice' value='sex' />
            按姓名<input type='radio' name='choice' value='name' />
            按宿舍号<input type='radio' name='choice' value='uno' />
            按电话<input type='radio' name='choice' value='tel' />
            按年级<input type='radio' name='choice' value='grade' /><br /><br />
            <input  type="submit" value="提交"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value='重置' />
            </form>
        </div>
	</div >
</body>
</html>