@extends('layouts.master')

@section('title', '查詢訂位資訊')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/00.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>查詢訂位資訊</h1>
                        <hr class="small">
                        <span class="subheading">Search Reservation Data</span>
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
                    <h1>訂位紀錄</h1>
                </div>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>編號</th>
                            <th>姓名</th>
                            <th>電話</th>
                            <th>人數</th>

                            <th>日期</th>
                            <th>時間</th>
                            <th>狀態</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reservations as $index => $reservation)
                            <tr>
                                　　  <td>{{$index+1}}</td>
                                　　<td>{{ $reservation->name}}</td>
                                <td>{{ $reservation->phone }}</td>
                                <td>{{ $reservation->people}}</td>

                                <td>{{ $reservation->date }}</td>
                                <td>{{ $reservation->time }}</td>
                                <td>{{ $reservation->status }}</td>
                                <td></td>
                                <td>
                                    <form action="/reservation/{{ $reservation->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-plus"></i>取消訂位
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
