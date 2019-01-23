@extends('layouts.master')

@section('title', '線上訂位')

@section('content')

    <!-- Bootstrap 樣板... -->
    <header class="intro-header" style="background-image: url('/img/00.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>線上訂位</h1>
                        <hr class="small">
                        <span class="subheading">Online Reservation</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <tr class="panel-body">
        <!-- 顯示驗證錯誤 -->
    @include('common.errors')

        @php
            $num=0;
        @endphp
        @foreach ($null1 as $null)
            @if($null->seat===null)
                @php
                    $num= $num+1;
                @endphp
            @endif
        @endforeach
        <form action="/section1/{id}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="reservation-time" class="col-sm-3 control-label">選擇時間</label>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    @if($total1-$num>=6)
                        <button type="submit" name="time" id="time" disabled value="11:00~14:00" class="btn btn-danger">
                        <i class="fa fa-plus"></i>11:00~14:00
                        </button>
                    @else
                        <button type="submit" name="time" id="time" value="11:00~14:00" class="btn btn-success">
                            <i class="fa fa-plus"></i>11:00~14:00
                        </button>
                    @endif
                </div>
            </div>
        </form>
        @php
            $num=0;
        @endphp
        @foreach ($null2 as $null)
        @if($null->seat===null)
                @php
                    $num= $num+1;
                @endphp
               @endif
        @endforeach
        <form action="/section2/{id}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
                <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    @if($total2-$num>=6)
                        <button type="submit"  name="time" id="time" disabled value="15:00~18:00" class="btn btn-danger">
                            <i class="fa fa-plus"></i>15:00~18:00
                        </button>
                    @else
                        <button type="submit"  name="time" id="time"  value="15:00~18:00" class="btn btn-success">
                        <i class="fa fa-plus"></i>15:00~18:00
                    </button>
                    @endif
                </div>
                </div>
        </form>
        @php
            $num=0;
        @endphp
        @foreach ($null3 as $null)
            @if($null->seat===null)
                @php
                    $num= $num+1;
                @endphp
            @endif
        @endforeach
        <form action="/section3/{id}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
                <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    @if($total3-$num>=6)
                    <button type="submit" name="time"  id="time" disabled value="18:00~21:00" class="btn btn-danger">
                        <i class="fa fa-plus"></i>18:00~21:00
                    </button>
                    @else
                        <button type="submit" name="time"  id="time" value="18:00~21:00" class="btn btn-success">
                            <i class="fa fa-plus"></i>18:00~21:00
                        </button>
                    @endif
                </div>
                </div>
        </form>
    </tr>
@endsection