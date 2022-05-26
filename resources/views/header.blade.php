
<div style="padding:20px 30px 40px 50px; margin-top:20px ; ">
<div style="text-align:center;"><h1>龍華資網系借教室系統</h1></div>
</div>
<hr>
<DIV style="text-align:center;">
    <body>
    <img src="https://www.lhu.edu.tw/about/images/logo.jpg" width="200"><br>
    <a href="{{ route('reservations.create') }}">新增借教室名單</a><br>
    <img src="https://m1.ntsu.edu.tw/Preview/images/VC.jpg" width="50">
    <a href="{{ route('rooms.index') }}">教室名單</a>
    <a href="{{ route('reservations.cid') }}">F309借用狀況</a>
    <a href="{{ route('reservations.index') }}">所有借教室名單</a>
    <div id="show_time">
        <script>
            //這裡程式碼多了幾行，但是不會延遲顯示，速度比較好，格式可以自定義，是理想的時間顯示
            setInterval("fun(show_time)",1);
            function fun(timeID){
                var date = new Date();  //建立物件
                var y = date.getFullYear();     //獲取年份
                var m =date.getMonth()+1;   //獲取月份  返回0-11
                var d = date.getDate(); // 獲取日
                var w = date.getDay();   //獲取星期幾  返回0-6   (0=星期天)
                var ww = ' 星期'+'日一二三四五六'.charAt(new Date().getDay()) ;//星期幾
                var h = date.getHours();  //時
                var minute = date.getMinutes()  //分
                var s = date.getSeconds(); //秒
                if(m<10){
                    m = "0"+m;
                }

                if(d<10){
                    d = "0"+d;
                }

                if(h<10){
                    h = "0"+h;
                }

                if(minute<10){
                    minute = "0"+minute;
                }

                if(s<10){
                    s = "0"+s;
                }
                document.getElementById(timeID.id).innerHTML =  y+"-"+m+"-"+d+"   "+h+":"+minute+":"+s+"  "+ww;
            }
        </script>
    </div>
    </body>
</DIV>
<script src="script.js" async></script>
