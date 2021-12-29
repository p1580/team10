<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一類型資料</title>
</head>
<body>
<h1>顯示單一類型資料</h1>
<a href="{{ route('reservations.index') }}">所有借教室名單</a>
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
    </tr>
        <tr>
            <td>{{$reservations->id}}</td>
            <td>{{$reservations->date}}</td>
            <td>{{$reservations->card_id}}</td>
            <td>{{$reservations->cid}}</td>
            <td>{{$reservations->start_at}}</td>
            <td>{{$reservations->end_of}}</td>
            <td>{{$reservations->memo}}</td>
            <td>{{$reservations->created_at}}</td>
            <td>{{$reservations->updated_at}}</td>
        </tr>
</table>
</body>
</html>
