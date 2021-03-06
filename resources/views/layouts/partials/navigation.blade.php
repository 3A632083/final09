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
                    <a href="{{route('reservation.index')}}"><h5>預約訂位</h5></a>
                </li>
                <li>
                    <a href="{{route('searchreservation.show')}}"><h5>查詢訂位資訊</h5></a>
                </li>
                <li>
                    <a href="{{route('wait.index')}}"><h5>現場候位</h5></a>
                </li>
                <li>
                    <a href="{{route('searchwait.index')}}"><h5>查詢候位資訊</h5></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

