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
        table{
            border: 1px;
        }
        tr td{
            font-size: 30px;
        }
        td{
            font-weight:bold;
        }
	</style>
	<title>潍坊学院公寓管理系统</title>
</head>
<body>
	<div id='back'>
		<!--img src="/thinkphp/Public/images/index_main02.png" /-->
        <div>
            <table>
            <tr><td>id&nbsp;&nbsp;</td><td>sno&nbsp;&nbsp;</td><td>sex&nbsp;&nbsp;</td><td>name&nbsp;&nbsp;</td><td>uno&nbsp;&nbsp;</td><td>tel&nbsp;&nbsp;</td><td>grade&nbsp;&nbsp;</td><td>sex&nbsp;&nbsp;</td></tr>
            <?php if(is_array($list)): foreach($list as $key=>$obj): ?><tr><td><?php echo ($obj["id"]); ?></td><td><?php echo ($obj["sno"]); ?></td><td><?php echo ($obj["sex"]); ?></td><td><?php echo ($obj["name"]); ?></td><td><?php echo ($obj["uno"]); ?></td><td><?php echo ($obj["tel"]); ?></td><td><?php echo ($obj["grade"]); ?></td></tr><?php endforeach; endif; ?>
            </ table>
            <?php echo ($page); ?>
        </div>
	</div >
</body>
</html>