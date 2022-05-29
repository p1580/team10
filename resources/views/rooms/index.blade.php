@extends('app')
@section('title', '新增教室表單')
<title>所有教室的表單</title>
@section('reservation_contents')
<DIV style="text-align:center;">
    <h1>所有教室的名單</h1>
    <table align="center" bgcolor=#fff5ee border="1">
        <div style="text-align:center;"><tr style="background-color:greenyellow;">
            <tr>
                <th>編號</th>
                <th>教室編號</th>
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
            </tr>
            @foreach($rooms as $rooms)
                <tr>
                    <td>{{$rooms->id}}</td>
                    <td>{{$rooms->room_id}}</td>
                    <td>
                        <a href="rooms/{{$rooms->id}}">
                            詳細
                        </a>
                    </td>
                    <td>
                        <a href="rooms/{{$rooms->id}}/edit">
                            修改
                        </a>
                    </td>
                    <td>
                        <form method="post" action="rooms/{{$rooms->id}}">
                        @csrf <!-- CSRF = Cross-Site Request Forgery-->
                            @method("delete")
                            <input type="submit" value="刪除"/>
                        </form>
                    </td>
                </tr>
        @endforeach
    </table>
    </body>
    </html>
</DIV>
@endsection
