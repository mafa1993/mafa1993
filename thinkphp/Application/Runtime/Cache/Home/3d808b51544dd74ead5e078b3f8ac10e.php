<?php if (!defined('THINK_PATH')) exit();?><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/init.css" />	
    <script type="text/javascript">
    function tishi1(){
        var obj=doocument.getElementById('d1');
        var obj2=document.getElementById('d2');
        if(obj.value != obj2.vaule){
            obj.value == '两次密码输入不同';
            d1.style.color="gray";
        }
    }
    function tishi2(){
        var obj=doocument.getElementById('d1');
        if(obj.value == '两次密码输入不同'){
            obj.value == '';
            d1.style.color="black";
        }
    }
    </script>
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
            <form method="post" action="<?php echo U('index/updatepass?id=2');?>">
                用户名：<input type='text' name="user" /><br /> <br />
                密码：<input type='text' name="password" id='d2'/><br /> <br />
                密码确认：<input type="text" name="checkpass" id='d1' onblur="tishi1()" onfocus="tishi2()" /> <br /><br />           
            <input  type="submit" value="提交"/>
            </form>
        </div>
	</div >
</body>
</html>