<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一類型資料</title>
</head>
<body>
<h1>顯示單一類型資料</h1>
<a href="{{ route('rooms.index') }}">所有借教室名單</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>教室編號</th>
    </tr>
        <tr>
            <td>{{$rooms->id}}</td>
            <td>{{$rooms->room_id}}</td>
        </tr>
</table>
</body>
</html>
