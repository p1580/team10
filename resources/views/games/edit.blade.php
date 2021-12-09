<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一遊戲資料編輯頁面</title>
</head>
<body>
<h1>顯示單一遊戲資料編輯頁面</h1>
<form method="post" action="/games/{{$games->id}}">
    @csrf
    @method('put')
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{$games->id}}</td>
    <tr/>
    <tr>
        <td>遊戲名稱</td>
        <td><input type="text" name="name" value="{{$games->name}}"/></td>
    <tr/>
    <tr>
        <td>發售平台</td>
        <td><input type="text" name="platform" value="{{$games->platform}}"/></td>
    <tr/>
    <tr>
        <td>開發商</td>
        <td><input type="text" name="developer" value="{{$games->developer}}"/></td>
    <tr/>
    <tr>
        <td>發行商</td>
        <td><input type="text" name="publisher" value="{{$games->publisher}}"/></td>
    <tr/>
    <tr>
        <td>遊戲類型編號</td>
        <td><input type="text" name="gid"value="{{$games->gid}}"/></td>
    </tr>
</table>
    <input type ="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
