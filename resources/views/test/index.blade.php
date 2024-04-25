@extends('test.layout')

{{-- メインコンテンツ --}}
@section('contets')
        <form action="/test/input" method="post">
            @csrf
            email：<input name="email"><br>
            パスワード：<input  name="password" type="password"><br>
            <button>送信する</button>
        </form>
@endsection