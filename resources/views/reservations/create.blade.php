@extends('app')

@section('title', '新增教室表單')
<title>新增表單</title>
@section('reservation_contents')
    <DIV style="text-align:center;">
        <h1>顯示借教室的新增表單</h1>
        <a href="{{ route('reservations.index') }}">所有借教室名單</a>
        <table align="center" bgcolor=#fff5ee border="1">
            <div style="text-align:center;">
                <tr style="background-color:greenyellow;">
                <tr>
                    <td>日期</td>
                    <td><input type="date" id="date" name="date"></td>
                </tr>
                <tr>
                    <td>學生證卡號</td>
                    <td><input type="text" name="card_id"/></td>
                </tr>
                <tr>
                    <td>教室編號</td>
                    <td>
                        <select name="room_id" required>
                            @foreach($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->room_id }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>借用時間</td>
                    <td><input type="time" id="start_at" name="start_at"></td>
                </tr>
                <tr>
                    <td>結束時間</td>
                    <td><input type="time" id="end_of" name="end_of"></td>
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


        </table>
    </DIV>
@endsection