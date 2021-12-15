<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一類型資料</title>
</head>
<body>
<h1>顯示單一類型資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>遊戲類型</th>
    </tr>
        <tr>
            <td>{{$reservations->id}}</td>
            <td>{{$reservations->name}}</td>
        </tr>
</table>
</body>
</html>
