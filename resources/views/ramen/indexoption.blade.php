<html>
<head>
    <title>Ramen/Index</title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 { font-size:25pt; text-align:left; color:#000000; 
        letter-spacing:-4pt;}
    </style>
</head>
<body>
    <h1>御坊市らーめん検索</h1>
    <p>{{$msg}}<p>
    <form action="/ramen" method="POST" >
        @csrf 
        <select name="soup">
            <option value="豚骨">豚骨</option>
            <option value="醤油">醤油</option>
            <option value="味噌">味噌</option>
            <option value="塩">塩</option>
            <option value="辛">辛</option>
            <option value="その他">その他</option>
        </select>
        <input type="submit" value="send">
    </form>
</body> 
</html> 
