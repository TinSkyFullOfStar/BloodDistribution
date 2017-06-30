
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>广州血液中心服务平台</title>
    <link rel="stylesheet" href="{{asset("/css/manager.css")}}">
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
            <a href="{{url("/manager")}}"><li class="active">宣传管理</li></a>
            <a href="{{url("/check")}}"><li>宣传查询</li></a>
            <a href="{{url("/apply")}}"><li>宣传申请</li></a>
        </ul>
    </nav>
    <section>
        <div class="tag-bar">
            <div class="tag-item active">宣传信息管理</div>
        </div>
        <div class="content">
            <div class="search-panel">
                <form action="" method="post" id="operationForm">
                    <label for="title">标题:</label>
                    <input type="text" name="title" id="title">
                    <label for="appliciant">申请人:</label>
                    <input type="text" name="username" id="appliciant">
                    <label for="applyTime">申请时间:</label>
                    <input type="text" id="applyTime" name="created_at">
                    <label for="catetory">类别:</label>
                    <select name="type_id" id="catetory">
                        <option value="">全部</option>
                        <option value="1">电视媒体类</option>
                        <option value="2">网络媒体类</option>
                        <option value="3">电梯海报类</option>
                        <option value="4">新闻稿件类</option>
                        <option value="5">微博微信类</option>
                        <option value="6">其他</option>
                    </select>
                    <label for="status">状态:</label>
                    <select name="status_id" id="status">
                        <option value="">全部</option>
                        <option value="1">待审批</option>
                        <option value="2">执行中</option>
                        <option value="3">已归档</option>
                    </select>
                    <button type="submit" id="search" class="btn check">查询</button>
                    <button id="reset" class="btn reset">重置</button>
                    {{ csrf_field() }}
                </form>
            </div>
            <form action="/BloodDistribution/public/delete" method="post">
                {{ csrf_field() }}
                <div class="tool-panel">
                    <a href="{{url("/apply")}}"><button class="btn" id="new">新建</button></a>
                    <button class="btn disabled" id="nothing">归档</button>
                    <button type="submit" class="btn">删除</button>
                </div>
                <div id="show-table">
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr class="text-center">
                            <th width="5%"><input type="checkbox"></th>
                            <th width="5%">No.</th>
                            <th width="30%">标题</th>
                            <th width="10%">类别</th>
                            <th width="10%">发布媒介</th>
                            <th width="10%">申请人</th>
                            <th width="10%">申请时间</th>
                            <th width="10%">状态</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($contents as $content)
                        <tr class="text-center">
                            <td><input type="checkbox"  name="id" value="{{ $content->id  }}"></td>
                            <td>{{ $content->id }}</td>
                            <td class="text-left">{{ $content->title }}</td>
                            <td>{{ $content->media }}</td>
                            <td>{{ $content->type }}</td>
                            <td>{{ $content->username }}</td>
                            <td>{{ substr($content->created_at, 0, 10) }}</td>
                            <td>{{ $content->status }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                </div>
                </form>
        </div>
    </section>
    <footer>
        <ul class="page-con">
            {{ $contents->links() }}
        </ul>
    </footer>
</body>
{{--<script src="{{asset('/js/')}}"></script>--}}
<script>
    window.onload = function () {
        var newBtn = document.getElementById('new');
        newBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            e.preventDefault();
            window.location.href = '{{url("/apply")}}'
        })

        var resetBtn = document.getElementById('reset')
        var nothing = document.getElementById('nothing')

        var title = document.getElementById('title')
        var name = document.getElementById('appliciant')
        var time = document.getElementById('applyTime')
        var catetory = document.getElementById('catetory')
        var status = document.getElementById('status')

        var form = []
        form.push(title, name, time, catetory, status)

        nothing.addEventListener('click', function (e) {
            e.stopPropagation()
            e.preventDefault()
        })

        reset.addEventListener('click', function (e) {
            e.preventDefault()
            e.stopPropagation()

            for(var i = 0; i < form.length; i ++) {
                form[i].value = ""
            }
        })

            window.addEventListener('resize', function () {
                renderTable()
            })

        function renderTable() {
            var minHieght = window.innerHeight - 350
            var tableH = minHieght > 400 ? minHieght : 400
            document.getElementById('show-table').style.height = tableH + 'px';
        }
        renderTable()
    }

</script>
</html>