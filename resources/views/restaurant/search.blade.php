@extends('layouts.ramenapp')

@section('title','')

@section('menubar')
<br>
<table>
    <tr><th>Name</th><th>Address</th><th>TEL</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->TEL}}</td>            
        </tr>
    @endforeach
</table>
            
@endsection

@section('content')
<table>
    <tr><th>Name</th><th>price</th><th>soup</th><th>noodles</th></tr>
    @foreach($items as $item)
        <tr>
            @foreach($item->menus as $obj)
                <tr>            
                <td>{{$obj->name}}</td>
                <td>{{$obj->price}}</td>
                <td>{{$obj->soup}}</td>
                <td>{{$obj->noodles}}</td>
        </tr>
            @endforeach
        </tr>
    @endforeach
</table>

@endsection

@section('footer')
copyright 2022 kaichi.
@endsection