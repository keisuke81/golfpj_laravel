<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
=======
<!DOCTYPE html>
<html lang="ja">

<head>
@component('components.header')
@endcomponent
<title>top_page</title>
</head>
<body>
    @component('components.menu')
    @endcomponent
    <div class="wrapper">
        <div>
            <a class="btn" href="/offer_cast">キャストから探す</a>
        </div>
        <div>
            <a class="btn" href="/offer">日程から探す</a>
>>>>>>> 1e76a731c3cbe6d4c0f4a4bdece00b4945d34a1e
        </div>
    </div>
</div>
@endsection
