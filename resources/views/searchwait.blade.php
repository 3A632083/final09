@extends('layouts.master')

@section('title', '查詢候位資訊')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/查詢訂位.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>查詢候位資訊</h1>
                        <hr class="small">
                        <span class="subheading">Waiting Inline</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>候位紀錄</h1>
                </div>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>編號</th>
                            <th>姓名</th>
                            <th>人數</th>
                            <th>您的候位號碼</th>
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
                                <td>{{ $wait->id}}號</td>
                                <td>{{ $wait->created_at }}</td>
                                <td>{{ $wait->status }}</td>
                                <td>
                                    <form action="/wait/{{ $wait->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-calendar-minus-o"></i>取消訂位
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection
