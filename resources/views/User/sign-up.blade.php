@extends('app')

@section('title', '新增教室表單')
<title>註冊會員</title>
@section('reservation_contents')
    <form id="form1" method="post" action="" align="center"
    <div class="login_form">
        <div class="login_title">註冊</div>
        <div class="login_label">帳號</div>
        <div class="login_textbox">
            <input name="account" class="form_textbox" type="text" placeholder="請輸入帳號"/>
        </div>
        <div class="login_label">密碼</div>
        <div class="login_textbox">
            <input name="password" class="form_textbox" type="password" placeholder="請輸入密碼"/>
        </div>
        <div class="btn_group">
            <button type="submit" class="btn btn-primary btn_login">註冊</button>
        </div>
    </div>
    </form>
@endsection