<html>
<head>
    <title>@yield('title')</title>
    <style>
    body {font-size:16pt; color:#999; margin: 5px; }
    h1 { font-size:30pt; text-align:left; color:#000000;
        margin:20px 0px -30px 0px; letter-specing:-4pt; }
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutitle { font-size:14pt; font-weight:bold; margin: 20px; }
    .content { text-align:center; margin-left:auto; margin-right:auto;}
    .footer { text-align:center; font-size:10pt; margin:10px;
        border-bottom:solid 1px #ccc; color:#ccc; }
    th {background-color:#999; color:fff; padding:5px 10px; }
    td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle">※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">       
    @yield('content')
    </div>
    <div class="footer">
    <p><a href="/ramen">トップページへ戻る</a></p>
    @yield('footer')
    </div>
</body>
</htiml>
