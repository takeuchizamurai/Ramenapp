@extends('layouts.ramenapp')
<style>
    .pagination { font-size:10pt; }
    .pagination li { display:inline-block }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
</style>

@section('title','検索結果')

@section('menubar')
    @parent
    メニューページ
@endsection

@section('content')

<table>
    <tr>
        <th><a href="/menu/search?sort=name">name</a></th>
        <th><a href="/menu/search?sort=price">price</a></th>
        {{--<th><a href="/restaurant/search">restaurant</a></th>--}}
        <th>restaurant</th><th>soup</th><th>noodles</th>
    </tr>
        
    {{--<tr><th>Name</th><th>price</th><th>restaurant</th><th>soup</th><th>noodles</th></tr>--}}
    @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            {{--<td>{{$item->getData()}}</td>--}}
            {{--<td><a href="/restaurant/search">{{$item->getData()}}</a></td>--}}
            <td><a href="/restaurant/search/{{$item->getData()}}">{{$item->getData()}}</a></td>
            <td>{{$item->soup}}</td>
            <td>{{$item->noodles}}</td>
        </tr>
    @endforeach
</table>
{{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2022 kaichi.
@endsection