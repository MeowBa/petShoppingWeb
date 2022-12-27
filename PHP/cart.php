<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.php"> -->
    <link rel="stylesheet" type="text/css" href="cartStyle.php">

</head>

<body>
    <!-- <div class="header">
        <div class="logo-centered">
            <a href="./home.html" class="active"> <img src="./img/LOGO.png" style="width: 150px; ;"> </a>
        </div>

        <button class="openbtn" onclick="openNav()">&#9776; </button>

        <div class="header-right">
            <a href="./car.html" target="_blank">購物車</a>
            <a href="./login.html" target="_blank">登入|註冊</a>
        </div>

    </div> -->

    <div id="car">
        <div class="container">
            <div class="car_title">訂單明細</div>
            <div class="car_header">
                <div class="car_detail">商品</div>
                <div class="price">單價</div>
                <div class="count">數量</div>
                <div class="amount">總計</div>
                <div class="operate">操作</div>
            </div>
            <div class="car_header car_body">
                <div class="car_detail">
                    <img src="./img/catfood_4.jpg" alt="">
                    <div class="name">ND 天然無穀糧 鯡魚甜橙 1.5公斤(貓飼料)</div>
                </div>

                <div class="price"><span>$</span> <span id="pp">1197</span> </div>
                <div class="count">
                    <button onclick="clickCut()">-</button>
                    <span id="qq">1</span>
                    <button onclick="clickAdd()">+</button>
                </div>
                <div class="amount" id="tt">1197</div>
                <div class="operate">
                    <button>刪除</button>
                </div>
            </div>
        </div>

    </div>

    <div class="but_tal">
        <div class="button2">
            <button>繼續購物</button>
            <button>結帳去</button>
        </div>

        <table class="tatle">
            <tr>
                <td>商品小計</td>
                <td id="littleTotal">1197</td>
            </tr>
            <tr>
                <td id="rebate">折扣優惠</td>
                <td>0</td>
            </tr>
            <tr>
                <td>運費</td>
                <td id="fare">100</td>
            </tr>
            <tr>
                <td>合計</td>
                <td id="bigTotal">1227</td>
            </tr>
        </table>
    </div>


    <!-- <script type="text/javascript" src="mycontent"></script> -->
    <script>
        function clickCut() {
            var bb = document.getElementById('qq');
            if (bb.innerHTML > 1) {
                bb.innerHTML--;
            }
            var p = document.getElementById('pp').innerText;
            var q = document.getElementById('qq').innerText;
            document.getElementById('tt').innerText = parseInt(p) * parseInt(q);
            document.getElementById('littleTotal').innerText = parseInt(p) * parseInt(q);

            var dd = document.getElementById('fare').innerText;
            document.getElementById('bigTotal').innerText = parseInt(p) * parseInt(q) + parseInt(dd);

        }

        function clickAdd() {
            var cc = document.getElementById('qq');
            cc.innerHTML++;
            var p = document.getElementById('pp').innerText;
            var q = document.getElementById('qq').innerText;
            document.getElementById('tt').innerText = parseInt(p) * parseInt(q);
            document.getElementById('littleTotal').innerText = parseInt(p) * parseInt(q);

            var dd = document.getElementById('fare').innerText;
            document.getElementById('bigTotal').innerText = parseInt(p) * parseInt(q) + parseInt(dd);

        }

    </script>
</body>