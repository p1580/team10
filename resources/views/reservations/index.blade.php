<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有資料類型</title>
</head>
<body>
<h1>顯示所有資料類型</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>日期</th>
        <th>學生證卡號</th>
        <th>教室編號</th>
        <th>借用時間</th>
        <th>結束時間</th>
        <th>備註</th>
        <th>建立時間</th>
        <th>編輯時間</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($reservations as $reservations)
        <tr>
            <td>{{$reservations->id}}</td>
            <td>{{$reservations->date}}</td>
            <td>{{$reservations->card_id}}</td>
            <td>{{$reservations->cid}}</td>
            <td>{{$reservations->start_at}}</td>
            <td>{{$reservations->end_at}}</td>
            <td>{{$reservations->memo}}</td>
            <td>{{$reservations->created_at}}</td>
            <td>{{$reservations->updated_at}}</td>
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
        </tr>
    @endforeach
</table>
</body>
</html>
