<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
	*{
		margin:0px;
		padding:0px;
	}
	a{
		font-family:"Microsoft YaHei UI";
	}

    nav {
        height: 35px;
        width: 100%;
        background-color: #ccccff;
        padding: 0 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    nav > ul li {
        display: inline-block;
        width: 90px;
        line-height: 35px;
        text-align: center;
        float: left;
        margin-left: -1px;
        color: #2e6699;
        font-weight: bolder;
        cursor: pointer;
    }

    nav > ul li:hover {
        background-color: #dcdcdc;
    }
	.menu{
		font-size:16px;
		font-weight:bold;
		float:left;
		padding-left:10px;
		padding-right:10px;
		color:#06C
	}
	.border{
		border-left:1px solid #06c;
		width:1px;
		height:23px;
		float:left
	}
	.nav{
		height:35px;
		width:70px;
		left:20px;
		top:8px;
		float:left;
		position:relative;
		background-color:#D0CEFF;
		border:1px solid #ccc
	}
	.nav_font{
		position:relative;
		width:70px;
		font-size:15px;
		color:#06f;
		font-weight:bold;
		top:9px;
		left:18px
	}
	.blo{
        position: relative;
		float:left;
		width:30%;
		height:210px;
		margin-left:20px;
        padding-top: 30px;
		border:1px solid #ddd
	}
    .img-con{
        width: 40%;
        text-align: center;
        float: left;
    }
	.image {
        width: 90%;
    }
	.txtcon{
		float:left;
		width:60%;
		height:120px;
	}
	.txtline{
		width:160px;
		height:20px;
		margin-bottom:7px;
	}
	.con2{
		position:absolute;
		background-color:#eee;
		width: 100%;
		height:50px;
		bottom:0px;
		text-align:center;
	}
	.con2txt{
		position:relative;
		top:15px;
		font-size:18px;
		color:#909;
		font-weight:bold;
		width:150px;
        text-decoration: none;
	}
	.con1txt{
		font-size:14px;
		color:#666
	}
    nav > ul li.active {
        background-color: #dcdcdc;
    }

    header {
        width: 100%;
        height: 87px;
        background: url('{{asset("/img/nav.png")}}');
        background-size: cover;
        padding-top: 10px;
        z-index: 2;
    }

    header .logo{
        width: 80px;
        height: 68px;
        margin-left: 3%;
    }

    header .title{
        font-size: 26px;
        line-height: 60px;
        vertical-align: text-bottom;
        font-weight: bolder;
        color: #fff;
    }

    header .logout-con {
        float: right;
        margin-top: 20px;
        margin-right: 5%;
        font-size: 14px;
        color: #FFFFFF;
    }

    header .logout-btn {
        color: #FFFFFF;
    }

    header .logout-con .user {
        line-height: 24px;
        height: 25px;
    }

    header .logout-con .user::before{
        content: ' ';
        width: 24px;
        height: 24px;
        display: inline-block;
        float: left;
        background: url("{{asset("/img/admin.png")}}") center no-repeat;
        background-size: contain;
        margin-right: 5px;
    }

    header .logout-con .logout-btn {
        line-height: 21px;
        cursor: pointer;
        margin-top: 5px;
        text-decoration: underline;
    }

    header .logout-con .logout-btn::before {
        content: '';
        width: 22px;
        height:22px;
        display: inline-block;
        float: left;
        background: url("{{asset("/img/move.png")}}") center no-repeat;
        background-size: contain;
        margin-right: 5px;
    }
</style>
</head>

<body>
	<div style="width:100%; margin-left:auto; margin-right:auto">
        <header>
            <img class="logo" src="{{asset("/img/logo.png")}}">
            <span class="title">广州血液中心无偿献血综合服务平台</span>
            <div class="logout-con">
                <div class="user">你好！</div>
                <a href="/BloodDistribution/public/logout1"><div class="logout-btn">安全退出</div></a>
            </div>
        </header>
        <nav>
            <ul>
                <a href="{{url("/text")}}"><li class="active">我的工作台</li></a>
                <a href="{{url("/manager")}}"><li>宣传管理</li></a>
                <a href="{{url("/check")}}"><li>宣传查询</li></a>
                <a href="{{url("/apply")}}"><li>宣传申请</li></a>
            </ul>
        </nav>
        <div style="height:500px;">
            <div style="width:100%; margin-left:auto; margin-right:auto; height:400px">
            	<div style="height:60px">
                    <img style="width:35px; height:35px; float:left; position:relative; top:17px; left:20px" src="{{asset("/img/u21.png")}}" />
                    <div style="border-bottom:1px solid #333; float:left; position:relative; height:40px; width:90%; top:10px; left:35px">
                    	<a style="font-size:25px; font-family:'Microsoft YaHei UI'; position:relative; top:7px">宣传事物管理</a>
                    </div>
                </div>
                <div style="width:100%; height:300px; margin-left:auto; margin-right:auto">
                	<div class="blo">
                        <div class="img-con">
                    	   <img class="image" src="{{asset("/img/u16.png")}}" />
                        </div>
                        <div class="txtcon">
                        	<div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt" href="{{url("/apply")}}">宣传信息发布申请</a>
                            </div>
                            <div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt" href="{{url("/check")}}">宣传信息发布查询</a>
                            </div>
                            <div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt" href="{{url("/manager")}}">宣传信息类别管理</a>
                            </div>
                            <div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt">宣传信息发布统计</a>
                            </div>
                        </div>
                        <div class="con2">
                        	<a href="#" class="con2txt">宣传信息发布</a>
                        </div>
                    </div>
                    <div class="blo">
                        <div class="img-con">
                        	<img class="image" src="{{asset("/img/u54.png")}}" />
                        </div>
                        <div class="txtcon">
                        	<div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt">宣传品(资料)制作申请</a>
                            </div>
                            <div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt">宣传品(资料)制作查询</a>
                            </div>
                            <div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt">宣传品(资料)制作统计</a>
                            </div>
                        </div>
                        <div class="con2">
                        	<a href="#" class="con2txt">宣传品(资料)制作</a>
                        </div>
                    </div>
                    <div class="blo">
                        <div class="img-con">
                        	<img class="image" src="{{asset("/img/u68.png")}}" />
                        </div>
                        <div class="txtcon">
                        	<div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt">宣传物资领用申请</a>
                            </div>
                            <div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt">宣传物资领用查询</a>
                            </div>
                            <div class="txtline">
                            	<img style="position:relative; top:3px" src="{{asset("/img/u18.gif")}}" />
                                <a class="con1txt">宣传物资领用统计</a>
                            </div>
                        </div>
                        <div class="con2">
                        	<a href="#" class="con2txt">宣传物资领用</a>
                        </div>
                    </div>
                </div>
          </div>
        </div>
        <div style="position: absolute; bottom: 0;">
        	<img style="height:60px; width:100%" src="{{asset("/img/nav.png")}}" />
        </div>
	</div>
</body>
</html>
