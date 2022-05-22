@extends('app')

@section('title', '新增教室表單')
<title>借教室表單</title>
@section('reservation_contents')
    <DIV style="text-align:center;">
        <h0>借教室的名單</h0>
        <a href="{{ route('reservations.index') }}">所有借教室名單</a><br>

        搜尋:<input type="search" class="light-table-filter" data-table="order-table" placeholder="請輸入關鍵字">
        <script>(function(document) {
                'use strict';

                // 建立 LightTableFilter
                var LightTableFilter = (function(Arr) {

                    var _input;

                    // 資料輸入事件處理函數
                    function _onInputEvent(e) {
                        _input = e.target;
                        var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                        Arr.forEach.call(tables, function(table) {
                            Arr.forEach.call(table.tBodies, function(tbody) {
                                Arr.forEach.call(tbody.rows, _filter);
                            });
                        });
                    }

                    // 資料篩選函數，顯示包含關鍵字的列，其餘隱藏
                    function _filter(row) {
                        var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                        row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
                    }

                    return {
                        // 初始化函數
                        init: function() {
                            var inputs = document.getElementsByClassName('light-table-filter');
                            Arr.forEach.call(inputs, function(input) {
                                input.oninput = _onInputEvent;
                            });
                        }
                    };
                })(Array.prototype);

                // 網頁載入完成後，啟動 LightTableFilter
                document.addEventListener('readystatechange', function() {
                    if (document.readyState === 'complete') {
                        LightTableFilter.init();
                    }
                });

            })(document);</script>
        <table class="order-table" align="center" bgcolor=#fff5ee border="1">
            <thead>
            <tr>
                <div style="text-align:center;">
            <tr style="background-color:greenyellow;">
                <th>編號</th>
                <th>日期</th>
                <th>學號</th>
                <th>教室編號</th>
                <th>借用時間</th>
                <th>結束時間</th>
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
            </tr>
            </tr>
            </thead>
            <tbody>

            @foreach($reservations as $reservations)

                <tr>
                    <td>{{$reservations->id}}</td>
                    <td>{{$reservations->date}}</td>
                    <td>{{$reservations->card_id}}</td>
                    <td>{{$reservations->room->room_id}}</td>
                    <td>{{$reservations->lesson->lesson_id}}</td>
                    <td>{{$reservations->lesson_end->lesson_id}}</td>
                    <td>
                        <a href="reservations/{{$reservations->id}}">
                            詳細
                        </a>
                    </td>
                    <td>
                        <a href="reservations/{{$reservations->id}}/edit">
                            修改
                        </a>
                    </td>
                    <td>
                        <form method="post" action="reservations/{{$reservations->id}}"
                              onSubmit="return confirm('是否確認刪除編號{{$reservations->id}}這筆借用資料');">
                        @csrf <!-- CSRF = Cross-Site Request Forgery-->
                            @method("delete")
                            <input type="submit" value="刪除"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <table align="center" bgcolor=#fff5ee border="1">

        </table>
    </DIV>

@endsection