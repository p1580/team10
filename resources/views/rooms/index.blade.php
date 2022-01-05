<html>
<head>
    <meta charset="UTF-8"/>
    <title>所有教室的表單</title>
</head>
<body>
<h1>所有教室的表單</h1>
<a href="{{ route('rooms.index') }}">教室名單</a>
<a href="{{ route('rooms.create')}}">新增借教室名單</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>教室編號</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($rooms as $rooms)
        <tr>
            <td>{{$rooms->id}}</td>
            <td>{{$rooms->room_id}}</td>
            <td>
                <a href="rooms/{{$rooms->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="rooms/{{$rooms->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="rooms/{{$rooms->id}}">
                @csrf <!-- CSRF = Cross-Site Request Forgery-->
                @method("delete")
                <input type="submit" value="刪除"/>
            </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>