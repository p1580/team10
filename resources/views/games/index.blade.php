<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有遊戲資料</title>
</head>
<body>
<h1>顯示所有遊戲資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>遊戲名稱</th>
        <th>遊戲類型編號</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($games as $games)
        <tr>
            <td>{{$games->id}}</td>
            <td>{{$games->name}}</td>
            <td>{{$games->gid}}</td>
            <td>
                <a href="games/{{$games->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="games/{{$games->id}}/edit">
                    修改
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
