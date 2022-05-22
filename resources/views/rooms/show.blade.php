@extends('app')
@section('title', '新增教室表單')
<title>顯示單筆教室資料</title>
@section('reservation_contents')
<html>
<DIV style="text-align:center;">
    <h1>顯示單一教室資料</h1>
    <a href="{{ route('rooms.index') }}">所有借教室名單</a>
    <table align="center" bgcolor=#fff5ee border="1">
        <tr>
            <th>編號</th>
            <th>教室編號</th>
            <th>教室類型</th>
        </tr>
        <tr>
            <td>{{$rooms->id}}</td>
            <td>{{$rooms->room_id}}</td>
            <td>{{$rooms->room_type}}</td>
        </tr>
    </table>
</DIV>
</html>
@endsection
