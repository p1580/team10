@extends('app')

@section('title', '新增教室表單')
<title>顯示單筆資料</title>
@section('reservation_contents')
    <DIV style="text-align:center;">
        <h1>顯示單一類型資料</h1>
        <a href="{{ route('reservations.index') }}">所有借教室名單</a>
        <table align="center" bgcolor=#fff5ee border="1">
            <div style="text-align:center;"><tr style="background-color:greenyellow;">
                    <th>編號</th>
                    <th>日期</th>
                    <th>學生證卡號</th>
                    <th>教室編號</th>
                    <th>借用節次</th>
                    <th>結束節次</th>
                    <th>備註</th>
                    <th>建立時間</th>
                    <th>編輯時間</th>
                </tr>
                <tr>
                    <td>{{$reservations->id}}</td>
                    <td>{{$reservations->date}}</td>
                    <td>{{$reservations->card_id}}</td>
                    <td>{{$reservations->room->room_id}}</td>
                    <td>{{$reservations->lesson->lesson_id}}</td>
                    <td>{{$reservations->lesson_end->lesson_id}}</td>
                    <td>{{$reservations->memo}}</td>
                    <td>{{$reservations->created_at}}</td>
                    <td>{{$reservations->updated_at}}</td>
                </tr>
        </table>
    </DIV>
@endsection
