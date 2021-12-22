<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有借教室的表單</title>
</head>
<body>
<h1>顯示所有借教室的表單</h1>
<a href="{{ route('reservations.index') }}">所有借教室名單</a>
<a href="{{ route('reservations.create') }}">新增借教室名單</a>
<a href="{{ route('reservations.cid') }}">F309借用狀況</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>日期</th>
        <th>學生證卡號</th>
        <th>教室編號</th>
        <th>借用時間</th>
        <th>結束時間</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($reservations as $reservations)
        <tr>
            <td>{{$reservations->id}}</td>
            <td>{{$reservations->date}}</td>
            <td>{{$reservations->card_id}}</td>
            <td>{{$reservations->cid}}</td>
            <td>{{$reservations->start_at}}</td>
            <td>{{$reservations->end_of}}</td>
            <td>
                <a href="reservations/{{$reservations->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="reservations/{{$reservations->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method="post" action="reservations/{{$reservations->id}}">
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
