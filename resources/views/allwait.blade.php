@extends('layouts.admin')

@section('title', '顧客候位資訊')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" >
        <div class="col-lg-12">
            <h1 class="page-header">
                <small></small>
            </h1>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>候位紀錄</h1>
                    <tr>
                        <form action="/wenxin/waittime/{id}" method="POST" >
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <label for="time" class="col-sm-2 control-label">目前<br>等候時間約為:</label>
                            <div class="col-sm-2">
                                <input type="text" name="time" id="time" class="form-control">
                            </div><label>分鐘</label>
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-plus"></i>送出
                            </button>
                        </form>
                        <div class="container">
                            <div class="row">
                                <div class="page-header">
                    <tr>
                        <form action="/wenxin/num/{id}" method="POST" >
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <label for="time" class="col-sm-2 control-label">目前<br>叫號:</label>
                            <div class="col-sm-2">
                                <input type="text" name="num"  id="num" class="form-control">
                            </div>
                            <button type="submit" value="+" class="btn btn-warning">
                                <i class="fa fa-send-o"></i>叫號
                            </button>
                        </form>
                    </tr>

                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>編號</th>
                                <th>姓名</th>
                                <th>人數</th>
                                <th>電話</th>
                                <th>候位號碼</th>
                                <th>候位時間</th>
                                <th>訂位狀態</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($waits as $index => $wait)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{ $wait->name}}</td>
                                    <td>{{ $wait->people }}</td>
                                    <td>{{ $wait->phone }}</td>
                                    <td>{{ $wait->id }}號</td>
                                    <td>{{ $wait->created_at}}</td>
                                    <td>{{ $wait->status }}</td>

                                    <form action="/wait/status/{{$wait->id}}" method="POST" >
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                        <td>
                                            <div class="col-sm-9">
                                                <select name="status" class="form-control">
                                                    <option value="已入座">已入座</option>
                                                    <option value="保留20分鐘">保留中</option>
                                                    <option value="取消訂位">取消訂位</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-success">
                                                <i class="fa fa-plus"></i>送出
                                            </button>
                                    </form>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>姓名</th>
                                <th>人數</th>
                                <th>電話</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <form action="/wenxins/store" method="POST">
                                    {{ csrf_field() }}
                                    <td>  <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" name="name" id="name"  class="form-control">
                                            </div>
                                        </div>
                                    </td>
                                    <td> <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" name="people" id="people"  class="form-control">
                                            </div>
                                        </div>
                                    </td>
                                    <td>  <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" name="phone" id="phone"  class="form-control">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus"></i>確認
                                        </button>
                                    </td>
                                </form>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </article>
@endsection
