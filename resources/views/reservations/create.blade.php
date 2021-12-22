<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示借教室的新增表單</title>
</head>
<body>
<h1>顯示借教室的新增表單</h1>
<a href="{{ route('reservations.index') }}">所有借教室名單</a>
<form method="post" action="/reservations">
    @csrf
    <table border="1">
        <tr>
            <td>日期</td>
            <td><input type="text" name="date"/></td>
        </tr>
        <tr>
            <td>學生證卡號</td>
            <td><input type="text" name="card_id"/></td>
        </tr>
        <tr>
            <td>教室編號</td>
            <td><input type="text" name="cid"/></td>
        </tr>
        <tr>
            <td>借用時間</td>
            <td><input type="text" name="start_at"/></td>
        </tr>
        <tr>
            <td>結束時間</td>
            <td><input type="text" name="end_of"/></td>
        </tr>
        <tr>
            <td>備註</td>
            <td><input type="text" name="memo"/></td>
        </tr>
    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>