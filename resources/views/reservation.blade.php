@extends('layouts.master')

@section('title', '線上訂位')

@section('content')

    <!-- Bootstrap 樣板... -->
    <header class="intro-header" style="background-image: url('img/index00.jpg')">
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

    <!-- 新任務的表單 -->
        <form action="/reservation" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- 任務名稱 -->
            <div class="form-group">
                <label for="reservation-name" class="col-sm-3 control-label">姓名</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="reservation-name" value="{{Auth::user()->name}}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="reservation-phone" class="col-sm-3 control-label">電話</label>

                <div class="col-sm-6">
                    <input type="text" name="phone" id="reservation-phone" value="{{Auth::user()->phone}}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="reservation-people" class="col-sm-3 control-label">人數</label>

                <div class="col-sm-6">
                    <input type="text" name="people" id="reservation-people" class="form-control">
                </div>
            </div>



            <div class="form-group">
                <label for="reservation-date" class="col-sm-3 control-label">日期</label>

                <div class="col-sm-6">
                    <input type="date" name="date" value="<?php echo date("Y-m-d",strtotime('+1day'));?>" min="<?php echo date("Y-m-d",strtotime('+1day'));?>" max="<?php echo date("Y-m-d",strtotime('+6day'));?>" id="task-date" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="reservation-time" class="col-sm-3 control-label">時間</label>

                <div class="col-sm-6">
                    <select name="time" class="form-control">
                        <option value="11:00~14:00">11:00~14:00</option>
                        <option value="14:00~17:00">14:00~17:00</option>
                        <option value="17:00~20:00">17:00~20:00</option>
                        <option value="20:00~23:00">20:00~23:00</option>
                        <option value="23:00~02:00">23:00~02:00</option>
                    </select>
                </div>
            </div>
            <!-- 增加任務按鈕-->

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    @if($total>6)
                        <button type="submit" disabled class="btn btn-success">
                            <i class="fa fa-plus"></i> 確認訂位
                        </button>
                    @else
                        <button type="submit"  class="btn btn-success">
                            <i class="fa fa-plus"></i> 確認訂位
                        </button>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection