@extends('layouts.ramenapp')

@section('title','条件から検索する')

@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')
    
    <form action="/ramen/session" method="post">
    <p><label>スープ</label></p>
    @csrf 
        <select name="soup">
            <option value="豚骨">豚骨</option>
            <option value="醤油">醤油</option>
            <option value="味噌">味噌</option>
            <option value="塩">塩</option>
            <option value="辛">辛</option>
            <option value="その他">その他</option>
        </select>
    <p><label>麺</label></p> 
        <select name="noodles">
            <option value="細麺">細麺</option>
            <option value="太麺">太麺</option>
        </select>
    <p><label>予算(円)</label></p> 
        <input type="number" name="price">
        <br><br>
        <input type="submit" value="検索する">
    </form>
@endsection

@section('footer')
copyright 2022 kaichi.
@endsection