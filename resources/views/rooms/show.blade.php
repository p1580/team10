<html>
<DIV style="text-align:center;">
    <h1>顯示單一類型資料</h1>
    <a href="{{ route('rooms.index') }}">所有借教室名單</a>
    <<table align="center" bgcolor=#fff5ee border="1">>
        <tr>
            <th>編號</th>
            <th>教室編號</th>
        </tr>
        <tr>
            <td>{{$rooms->id}}</td>
            <td>{{$rooms->room_id}}</td>
        </tr>
    </table>
</DIV>
</html>
