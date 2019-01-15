@extends('layouts.admin')

@section('title', '輕鬆Eat')

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
                    <h1>輕鬆Eat 訂候位狀況</h1>
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th><h1>目前排隊組數</h1></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                　　  <td><h1>現場排隊組數:{{$total}}組</h1></td>
                                　<td><h1>線上預約組數:{{ $total2}}組</h1></td>
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
