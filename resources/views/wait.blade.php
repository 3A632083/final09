@extends('layouts.master')

@section('title', '現場候位')

@section('content')
    <header class="intro-header" style="background-image: url('img/查詢訂位.jpg')">
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
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .dot {
                height: 110px;
                width: 110px;
                background-color: #ffed4a;
                border-radius: 100%;
                display: inline-block;
            }
        </style>
    </head>
    <body>
    </body>
    </html>

    <article>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>候位狀況</h1>
                </div>
                    <tr>
                        <div style="text-align:left">
                        <th><span class="dot"><h1><p class="text-primary" style="text-align:center">{{$total}}</p></h1></span></th>
                        </div>
                        <div style="text-align:center">
                        <th><span class="dot"><h1><p class="text-primary" style="text-align:center">{{$admins[0]->time}}<h3>分鐘</h3></h3></p></h1></span></th>
                        </div>
                        <div style="text-align:right">
                        <th><span class="dot"><h1><p class="text-primary" style="text-align:center">{{$admins[0]->num}}</p></h1></span></th>
                       </div>
                 </tr>
                     <tr>
                       <div style="text-align:left">
                         <label class="p-3 mb-1 bg-primary text-white">目前排隊組數</label>
                       </div>
                         <div style="text-align:center">
                         <label class="p-3 mb-1 bg-primary text-white">等候時間</label>
                         </div>
                         <div style="text-align:right">
                         <label class="p-3 mb-1 bg-primary text-white">目前叫號</label>
                         </div>
                     </tr>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        </thead>
                        <tbody>
                        <tr>
                            　<th>
                                <form action="/insertwait/{id}" method="GET">
                                    {{ csrf_field() }}
                                    <div style="text-align:center">
                                    @if($total>15)
                                        <button type="submit" disabled class="btn btn-info">
                                            <i class="fa fa-plus"></i>我要候位
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-info">
                                            <i class="fa fa-plus"></i>我要候位
                                        </button>
                                    @endif
                                   </div>
                                </form>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection