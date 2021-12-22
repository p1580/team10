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
        <th>日期</th>
        <td><input type="text" name="name" value="{{$reservations->name}}"/></td>
    </tr>
</table>
    <input type ="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
