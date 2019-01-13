@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">登入成功</div>

                    <div class="card-body">
                        {{ Auth::user()->name }} 您好!<br><br>
                        ~歡迎來到輕鬆Eat線上訂候位系統~
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
