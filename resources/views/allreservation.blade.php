@extends('layouts.admin')

@section('title', '顧客訂位資訊')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <small></small>
            </h1>

        </div>
        <!-- Post Content -->
    </div>
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
                            <th>人數</th>
                            <th>電話</th>
                            <th>日期</th>
                            <th>時間</th>
                            <th>訂位狀態</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reservations as $index => $reservation)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{ $reservation->name}}</td>
                                <td>{{ $reservation->people }}</td>
                                <td>{{ $reservation->phone}}</td>
                                <td>{{ $reservation->date }}</td>
                                <td>{{ $reservation->time }}</td>
                                <td>{{ $reservation->status }}</td>

                                <form action="/reservation/status/{{$reservation->id}}" method="POST" >
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <td>
                                        <div class="col-sm-9">
                                            <select name="status" class="form-control" onchange="window.document.location.href=this.options[this.selectedIndex].value;">
                                                <option value="訂位成功">訂位成功</option>
                                                <option value="訂位失敗">訂位失敗</option>
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
            </div>
        </div>
    </article>
@endsection
