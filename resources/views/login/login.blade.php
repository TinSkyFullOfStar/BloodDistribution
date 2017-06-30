<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>广州血液中心服务平台</title>
    <link rel="stylesheet" href="{{ asset("/css/login.css") }}">
</head>
<body>
    <header>
        <img class="logo" src="{{ asset("/img/logo.png") }}">
        <span class="title">广州血液中心无偿献血综合服务平台</span>
    </header>
    <section class="content">
        <form  method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="login-con">
                <span class="login-title">登陆</span>
                <div class="input-con">
                    <input type="text" id="uName" class="uName" name="email" placeholder="用户名">
                    <input type="password" id="uPwd" class="uPwd" name="password" placeholder="密码">
                    <input type="text" class="check-code" name="checkCode" required>
                    <img src="/BloodDistribution/public/checkCode" style="width: 100px;margin-left:2%;" onclick="getCode()" id="code"/>
                    <div class="err-con">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>用户名或者密码错误</strong>
                            </span>
                        @endif
                    </div>
                    <button class="submit">登陆</button>
                </div>
            </div>
        </form>
    </section>
    <footer>
        广州血液中心无偿献血综合服务平台 报障热线：83622354
    </footer>
</body>
</html>