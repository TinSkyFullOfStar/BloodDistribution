
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>广州血液中心服务平台</title>
    <link rel="stylesheet" href="{{asset("/css/check.css")}}">
</head>
<body>
    <header>
        <img class="logo" src="{{asset("/img/logo.png")}}">
        <span class="title">广州血液中心无偿献血综合服务平台</span>
        <div class="logout-con">
            <div class="user">你好！KUN</div>
            <a href="/BloodDistribution/public/logout1"><div class="logout-btn">安全退出</div></a>
        </div>
    </header>
    <nav>
        <ul>
            <a href="{{url("/text")}}"><li>我的工作台</li></a>
            <a href="{{url("/manager")}}"><li>宣传管理</li></a>
            <a href="{{url("/check")}}"><li class="active">宣传查询</li></a>
            <a href="{{url("/apply")}}"><li>宣传申请</li></a>
        </ul>
    </nav>
    <section>
        <div class="tag-bar">
            <div class="tag-item active">宣传信息查询</div>
        </div>
        <div class="content">
        <div class="search-panel">
            <form action="" method="post">
                <label for="title">标题</label>
                <input type="text" name="title" id="title">
                <label for="applicant">申请人</label>
                <input type="text" name="username" id="applicant">
                {{ csrf_field() }}
                <button type="submit" class="btn search" id="search">查询</button>
            </form>
            <a href="{{asset('/apply')}}"><button type="button" class="btn pull-right add">新建宣传</button></a>
        </div>
        <div class="show-table">
        <table border="0" cellspacing="0" cellpadding="0" class="text-center" id="showTable">
            <tr>
                <td><input type="checkbox"></td>
                <td>No.</td>
                <td>标题</td>
                <td>类别</td>
                <td>申请人</td>
                <td>申请时间</td>
            </tr>
            @foreach ($contents as $content)
                <tr>
                    <td><input type="checkbox"></td>
                    <td>{{ $content->id }}</td>
                    <td>{{ $content->title }}</td>
                    <td>{{ $content->media }}&nbsp;</td>
                    <td>{{ $content->username }}</td>
                    <td>{{ $content->created_at }}</td>
                </tr>
            @endforeach
        </table>
        </div>

        {{ $contents->links() }}
        <div class="page-con" id="pageCon">
            {{--<span class="btn page-item">首页</span>--}}
            {{--<span class="btn page-item">上一页</span>--}}
            {{--<span class="btn page-item">1</span>--}}
            {{--<span class="btn page-item">2</span>--}}
            {{--<span class="btn page-item">下一页</span>--}}
            {{--<span class="btn page-item">尾页</span>--}}
        </div>
        </div>
    </section>
    <footer>
        广州血液中心无偿献血综合服务平台 报障热线：83622354
    </footer>
</body>
<script src="{{asset("/js/jquery.js")}}"></script>
<script>
    $(document).ready(function () {
        window.addEventListener('resize', function () {
            renderTable()
        })
    })

    function renderTable() {
        var minHieght = window.innerHeight - 350
        var tableH = minHieght > 400 ? minHieght : 400
        $('.show-table').css({'height': tableH})
    }
    renderTable()
</script>
</html>