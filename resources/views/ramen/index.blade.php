@extends('layouts.ramenapp')

@section('title','御坊市らーめん検索')

@section('menubar')
    @parent
    トップページ
@endsection

@section('content')
    <p><a href="/ramen/session">条件から検索<a></p>
    <p><a href="/restaurant">お店から検索<a></p>
@endsection


@section('footer')
copyright 2022 kaichi.
@endsection
