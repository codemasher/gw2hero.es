@extends('layout.wrapper')

@section('title', 'gw2hero.es &bull; soon&trade;')

@section('class', 'body--red')

@section('wrapper')
    <div class="wrapper" id="wrapper" role="main">
        <div class="teaser">
            <img src="{{ asset('assets/images/teaser.svg') }}" width="1000" height="500">
        </div>
        <div class="content">
            @section('content')
                <h2>Welcome!</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>

                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            @show
        </div>
    </div>
@stop
