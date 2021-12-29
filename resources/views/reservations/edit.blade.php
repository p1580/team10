<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一類型資料編輯頁面</title>
</head>
<body>
<h1>顯示單一類型資料編輯頁面</h1>
<a href="{{ route('reservations.index') }}">所有借教室名單</a>
<form method="post" action="/reservations/{{$reservations->id}}">
    @csrf
    @method('put')
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{$reservations->id}}</td>
    </tr>
    <tr>
        <td>日期</td>
        <td><input type="date" id="date" name="date" value="{{ $reservations->date }}"></td>
    </tr>
    <tr>
        <td>學生證卡號</td>
        <td>{{$reservations->card_id}}</td>
    </tr>
    <tr>
        <td>教室編號</td>
        <td><select name="cid" id="cid" value="{{ $reservations->cid }}">
                <option value="F308">F308</option>
                <option value="F309">F309</option>
                <option value="F313">F313</option>
                <option value="F314">F314</option>
            </select>
        </td>
    <tr>
        <td>借用時間</td>
        <td><input type="time" id="start_at" name="start_at" value="{{ $reservations->start_at }}"></td>
    </tr>
    <tr>
        <td>結束時間</td>
        <td><input type="time" id="end_of" name="end_of" value="{{ $reservations->end_of }}"></td>
    </tr>
    <tr>
        <td>備註</td>
        <td><input type="text" name="memo" value="{{ $reservations->memo }}"></td>
    </tr>
</table>
    <input type ="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
