@extends('app')

@section('title', '新增教室表單')

@section('reservation_contents')
    <DIV style="text-align:center;">
        <h1>借教室的編輯表單</h1>
        <a href="{{ route('reservations.index') }}">所有借教室名單</a>
        <form method="post" action="/reservations/{{ $reservations->id}}">
            @csrf
            @method('put')
            <table align="center" bgcolor=#fff5ee border="1">
                <tr>
                    <td>編號</td>
                    <td>{{ $reservations->id }}</td>
                </tr>
                <tr>
                    <td>日期</td>
                    <td><input type="date" name="date" value="{{ $reservations->date }}"maxlength="10" size="10" required/></td>
                </tr>
                <tr>
                    <td>學生證卡號</td>
                    <td>{{ $reservations->card_id }}</td>
                </tr>
                <tr>
                    <td>教室編號</td>
                    <td>
                        <select name="cid" required>
                            @foreach ($rooms as $room)
                                @if ($room->id == $reservations->cid)
                                    <option value="{{ $room->id }}" selected>{{ $room->room_id }}</option>
                                @else
                                    <option value="{{ $room->id }}">{{ $room->room_id }}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>借用時間</td>
                    <td><input type="time" name="start_at" value="{{ $reservations->start_at }}"/></td>
                </tr>
                <tr>
                    <td>結束時間</td>
                    <td><input type="time" name="end_of" value="{{ $reservations->end_of }}"/></td>
                </tr>
                <tr>
                    <td>備註</td>
                    <td><input type="text" name="memo" value="{{ $reservations->memo }}"/></td>
                </tr>
            </table>
            <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
        </form>
    </DIV>
@endsection