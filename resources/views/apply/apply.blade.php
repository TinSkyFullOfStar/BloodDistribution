
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>广州血液中心服务平台</title>
    <link rel="stylesheet" href="{{asset("/css/apply.css")}}">
</head>
<body>
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
            <a href="{{url("/text")}}"><li>我的工作台</li></a>
            <a href="{{url("/manager")}}"><li>宣传管理</li></a>
            <a href="{{url("/check")}}"><li>宣传查询</li></a>
            <a href="{{url("/apply")}}"><li class="active">宣传申请</li></a>
        </ul>
    </nav>
    <section>
        <div class="text-center form-title">宣传信息发布申请</div>
        <span class="status">状态：待审批</span>
            <table border="0" cellspacing="0" cellpadding="0" class="text-center">
                <tr>
                    <td width="10%">申请部门</td>
                    <td width="30%">血管科</td>
                    <td width="30%">申请时间</td>
                    <td width="30%">2017-03-09</td>
                </tr>
                <tr>
                    <td>申请人</td>
                    <td>李健明</td>
                    <td>联系电话</td>
                    <td>8888888888</td>
                </tr>
                <form action="/BloodDistribution/public/publish" method="post">
                <tr>
                    <td>标题</td>
                    <td colspan="3">
                        <input type="text" name="title" id="title">
                    </td>
                </tr>
                <tr>
                    <td>类别</td>
                    <td colspan="3" class="radioGroup">
                        <input id="cate1" type="radio" name="type_id" value="1">
                        <label for="cate1">电视媒体类</label>
                        <input id="cate2" type="radio" name="type_id" value="2">
                        <label for="cate2">网络媒体类</label>
                        <input id="cate3" type="radio" name="type_id" value="3">
                        <label for="cate3">电梯海报类</label>
                        <input id="cate4" type="radio" name="type_id" value="4">
                        <label for="cate4">新闻稿件类</label>
                    </td>
                </tr>
                <tr>
                    <td>内容</td>
                    <td colspan="3">
                        <textarea id="content" cols="10" rows="10" name="content"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>备注</td>
                    <td colspan="3">
                        <textarea id="remark" cols="10" rows="10" name="remarks"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <button class="btn submit">提交</button>
                    {{ csrf_field() }}
                     </form>
                    {{--<form action="/BloodDistribution/public/apply" method="get">--}}
                            <button class="btn reset" id="reset">重置</button>
                    {{--</form>--}}
                            {{--<a href="/BloodDistribution/public/apply" style="w">重置</a>--}}
                    </td>
                </tr>
            </table>

        @if ($error != null)
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </section>
    <footer>
        广州血液中心无偿献血综合服务平台 报障热线：83622354
    </footer>
</body>
<script>
    var resetBtn = document.getElementById('reset')
    resetBtn.addEventListener('click', function (e) {
        window.location.reload()
    })
</script>
{{--<script type="text/javascript" src="/dist/apply.js"></script>--}}
</html>