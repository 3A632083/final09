@extends('layouts.master')

@section('title', '線上訂位')

@section('content')

    <!-- Bootstrap 樣板... -->
    <header class="intro-header" style="background-image: url('img/00.jpg')">
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

    <div class="panel-body">
        <!-- 顯示驗證錯誤 -->
    @include('common.errors')
            @php
                $num=0;
                $today = date("Y-m-d",strtotime('+1day'));
            @endphp
            @foreach ($date as $dat)
                @if($dat->date===$today)
                    @php
                        $num= $num+1;
                    @endphp
                @endif
            @endforeach
            @if($num>=17)
            <form action="/stepnew/{id}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
            <div class="form-group">
                <label for="reservation-people" class="col-sm-2 control-label">人數</label>

                <div class="col-sm-6">
                    <input type="text" name="people" id="reservation-people" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <br>  <label for="reservation-date" class="col-sm-2 control-label">日期</label>

                    <div class="col-sm-6">
                        <input type="date"  name="date" value="<?php echo date("Y-m-d",strtotime('+2day'));?>" min="<?php echo date("Y-m-d",strtotime('+2day'));?>" max="<?php echo date("Y-m-d",strtotime('+2day'));?>"id="reservation-date" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="col-sm-3">
                            <button type="submit"  class="btn btn-success">
                                <i class="fa fa-plus"></i> 下一步
                            </button>
                        </div>
                    </div>
            </div>
            </form>

        @else
            <form action="/step2/{id}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                 <div class="form-group">
                    <label for="reservation-people" class="col-sm-2 control-label">人數</label>

                      <div class="col-sm-6">
                        <input type="text" name="people" id="reservation-people" class="form-control">
                      </div>
                 </div>
            <div class="form-group">
                <br>  <label for="reservation-date" class="col-sm-2 control-label">日期</label>

                    <div class="col-sm-6">
                        <input type="date"  name="date"  value="<?php echo date("Y-m-d",strtotime('+1day'));?>" min="<?php echo date("Y-m-d",strtotime('+1day'));?>" max="<?php echo date("Y-m-d",strtotime('+2day'));?>"id="reservation-date" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <button type="submit"  class="btn btn-success">
                                <i class="fa fa-plus"></i> 下一步
                            </button>
                        </div>
                    </div>
             </div>
            </form>
                @endif
    </div>
@endsection