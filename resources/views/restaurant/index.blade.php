@extends('layouts.ramenapp')

@section('title','お店から探す')

@section('menubar')
    @parent
    メニューページ
@endsection

@section('content')

<table>
    <tr><th>Name</th><th>Address</th><th>TEL</th></tr>
    @foreach($items as $item)
        <tr>
            <td><a href="/restaurant/search/{{$item->name}}">{{$item->name}}</a></td>
            <td>{{$item->address}}</td>
            <td>{{$item->TEL}}</td>            
        </tr>
    @endforeach
</table>

@endsection

@section('footer')
copyright 2022 kaichi.
@endsection