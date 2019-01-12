<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('welcome.index')}}">首頁</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('store.index')}}"><h5>店家資訊</h5></a>
                </li>
                <li>
                    <a href="{{route('member.show')}}"><h5>會員基本資料</h5></a>
                </li>
                <li>
                    <a href="{{route('task.index')}}"><h5>線上訂位</h5></a>
                </li>
                <li>
                    <a href="{{route('searchreservation.show')}}"><h5>查詢訂位資訊</h5></a>
                </li>
                <li>
                    <a href="{{route('meal.index')}}"><h5>餐點介紹</h5></a>
                </li>
                <li>
                    <a href="{{route('post.show')}}"><h5>最新消息</h5></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

