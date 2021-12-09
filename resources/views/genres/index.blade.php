<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有類型資料</title>
</head>
<body>
<h1>顯示所有類型資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>遊戲類型</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($genres as $genres)
        <tr>
            <td>{{$genres->id}}</td>
            <td>{{$genres->name}}</td>
            <td>
                <a href="genres/{{$genres->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="genres/{{$genres->id}}/edit">
                    修改
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
