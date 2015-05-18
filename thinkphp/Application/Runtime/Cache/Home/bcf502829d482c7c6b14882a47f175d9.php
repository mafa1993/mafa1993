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
            <form method="post" action="<?php echo U('index/addstudent?id=3');?>">
            <?php $__FOR_START_21045__=0;$__FOR_END_21045__=$num;for($i=$__FOR_START_21045__;$i < $__FOR_END_21045__;$i+=1){ ?>学号：<input type='text' name="sno<?php echo ($i); ?>"/>
                姓名：<input type='text' name="name<?php echo ($i); ?>" size="6"/>
                性别：<select name="sex<?php echo ($i); ?>"> <option value ="0">男</option> <option value="1">女</option> </select>  
                宿舍号：<input type="text" name="uno<?php echo ($i); ?>" size="4" />
                电话：<input type="text" name="tel<?php echo ($i); ?>" />
                年级：<input type="text" name="grade<?php echo ($i); ?>" size="4" /><br /><br /><?php } ?>
            <input  type="submit" value="提交"/>
            </form>
        </div>
	</div >
</body>
</html>