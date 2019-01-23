@extends('layouts.master')

@section('title', '線上訂位')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
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
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>選擇座位</h1>

                    <div class="row">
                        <table class="table table-hover">
                            <tbody>
                            <div style="text-align:left">
                                <td>大門</td>
                            </div>
                                <div style="text-align:left">
                                    <td>櫃台</td>
                                </div>
                            @foreach ($seats2 as $seat)
                                    <form action="/reservationchecknew/{id}" method="POST" >
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                        <td>
                                            @foreach ($datetime as $datetime1)
                                                    @if ($datetime1->seat === $seat->name )
                                                    @php
                                                        $num[$seat->name]="已訂完";
                                                    @endphp
                                                    @break;
                                                    @else
                                                    @php
                                                        $num[$seat->name]="";
                                                    @endphp
                                                @endif
                                            @endforeach
                                                @if($num[$seat->name] === "已訂完")
                                                    <button type="submit" name="seat" disabled  id="seat" value="{{$seat->name}}" class="btn btn-danger">
                                                        <i class="fa fa-plus"></i>{{$seat->name}}
                                                    </button>
                                                @elseif($num[$seat->name] ==="")
                                                        <button type="submit" name="seat"  id="seat" value="{{$seat->name}}" class="btn btn-success">
                                                            <i class="fa fa-plus"></i>{{$seat->name}}
                                                        </button>
                                                @endif
                                                @endforeach
                                        </td>
                                        <div style="text-align:right">
                                            <td>廁所</td>
                                        </div>
                                    </form>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
    </article>
@endsection
