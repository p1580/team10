<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一類型資料編輯頁面</title>
</head>
<body>
<h1>顯示單一類型資料編輯頁面</h1>
<form method="post" action="/genres/{{$genres->id}}">
    @csrf
    @method('put')
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{$genres->id}}</td>
    </tr>
    <tr>
        <th>遊戲類型</th>
        <td><input type="text" name="name" value="{{$genres->name}}"/></td>
    </tr>
</table>
    <input type ="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
