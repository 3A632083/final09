@extends('layouts.master')

@section('title', '現場候位')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/查詢訂位.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>現場候位</h1>
                        <hr class="small">
                        <span class="subheading">Query site waiting</span>
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
                    <h1>候位狀況</h1>
                </div>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>恭喜您候位成功！</th>
                        </tr>
                        </thead>
                        <tbody>
                        <td>目前排隊組數：{{$total}}組</td>
                        <td>您還須等待：{{$total-1}}組</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection