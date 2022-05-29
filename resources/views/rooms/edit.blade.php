@extends('app')

@section('title', '新增教室表單')

@section('reservation_contents')
    <DIV style="text-align:center;">
        <h1>教室編輯表單</h1>
        <form method="post" action="/rooms/{{$rooms->id}}">
            @csrf
            @method('put')
            <table align="center" bgcolor=#fff5ee border="1">
                <tr>
                    <td>編號</td>
                    <td>{{$rooms->id}}</td>
                </tr>
                <tr>
                    <td>教室名稱</td>
                    <td>{{$rooms->room_id}}</td>
                </tr>
                <tr>
                    <td>教室類型</td>
                    <td><input type="text" name="room_type" value="{{ $rooms->room_type }}"/></td>
                </tr>
            </table>
            <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
        </form>
    </DIV>
@endsection