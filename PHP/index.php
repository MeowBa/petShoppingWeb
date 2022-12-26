
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.php">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
</head>
<body>
    <!-- 這裡是header -->
    <div class="header">
        <div class="logo-centered">
            <a href="./home.html" class="active"> <img src="./img/LOGO.png" style="width: 150px; ;"> </a>
        </div>
        <button class="openbtn" onclick="openNav()">&#9776; </button>

        <div class="header-right">
            <!-- <a href="./car.html" target="_blank">購物車</a> -->
            <i class="fa fa-shopping-cart fa-2x"></i>
            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
            <a href="./login.html" target="_blank">登入</a>
            <!-- <a href="./login.html" target="_blank">登出</a> -->
        </div>

    </div>
        <!-- 這裡是漢堡打開內容 -->
        <div id="myMenu" class="menu">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./food.html">貓狗飼料</a>
        <a href="#">貓狗罐頭</a>
        <a href="./candy.html">貓狗零食</a>
        <a href="./health.html">寵物保健</a>
        <a href="#">貓砂系列</a>
        <a href="./use.html">居家用品</a>
        <a href="#">抓板玩具</a>
        <a href="./pretty.html">美容護理</a>
        <a href="#">環境清潔</a>
        <a href="./hotel.html">住宿推薦</a>
    </div>
        <!-- 這裡是icon列 -->
    <div id="icons">
        <a href="./food.html">
            <img src="icons/pet-food.png" alt="貓狗飼料">
            <p>貓狗飼料</p>
        </a>
        <a href="./candy.html">
            <img src="icons/dog-treat (1).png" alt="寵物零食">
            <p>寵物零食</p>
        </a>
        <a href="./use.html">
            <img src="icons/cat-toy.png" alt="寵物用品">
            <p>寵物用品</p>
        </a>
        <a href="./health.html">
            <img src="icons/medicine.png" alt="寵物保健">
            <p>寵物保健</p>
        </a>
        <a href="./pretty.html">
            <img src="icons/pet-shampoo (1).png" alt="寵物美容">
            <p>寵物美容</p>
        </a>
        <a href="./hotel.html">
            <img src="icons/house.png" alt="寵物住宿">
            <p>寵物住宿</p>
        </a>
    </div>
    <!-- 這裡是搜尋列 -->
    <div class="search">
        <form>
            <input type="text" placeholder="搜尋..">
            <button type="submit"><img src="icons/search.png" alt="Search" style="width: 25px;"></button>
        </form>
    </div>
    <!-- 這裡是廣告輪播 -->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/adv_1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/adv_3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/adv_10.jpg" style="width:100%">
        </div>
        <!-- 下一張及上一張的按鈕 -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <!-- 廣告圖下面的點點 -->
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <br>
    <!-- 熱銷榜 -->
    <div class="HotList">
        <span class="Hot animate__heartBeat">熱銷排行榜</span>
        <button class="tablink" onclick="openPage('Stay', this, 'var(--maincolor)')">寵物住宿</button>
        <button class="tablink" onclick="openPage('Pretty', this, 'var(--maincolor)')">美容護理</button>
        <button class="tablink" onclick="openPage('Health', this, 'var(--maincolor)')">保健食品</button>
        <button class="tablink" onclick="openPage('Candy', this, 'var(--maincolor)')">寵物零食</button>
        <button class="tablink" onclick="openPage('Use', this, 'var(--maincolor)')">寵物用品</button>
        <button class="tablink" onclick="openPage('Food', this, 'var(--maincolor)')" id="defaultOpen">飼料排行</button>

        <!-- 飼料熱銷榜 -->
        <div id="Food" class="tabcontent">
            <ul class="hot-foods">
                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/dogfood_3.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"> <br> 零穀 全齡犬敏感配方(羊肉+鮭魚)5.5磅(狗飼料)</a> <br>
                    <span class="price"> $664</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>

                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/catfood_7.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"> <br> 莫比 Mobby 愛貓無穀配方【鱒魚+馬鈴薯】1.5公斤 (貓飼料)</a> <br>
                    <span class="price"> $621</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/原點_1.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>原點 無穀雞肉 5公斤</a> <br>
                    <span class="price"> $2,521</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

            </ul>
        </div>

        <!-- 寵物用品熱銷榜 -->
        <div id="Use" class="tabcontent">
            <ul class="hot-foods">
                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/用品_4.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>渦流循環寵物活水機1.5L(綠) W2-N</a> <br>
                    <span class="price"> $990</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>

                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/用品_5.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>甜甜圈六餐餵食器 (粉)(環保版) F6-TW</a> <br>
                    <span class="price"> $990</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/用品_6.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>高質感可折疊雙肩寵物包【淺灰色】(40* 26* 33cm)(寵物外出包)</a> <br>
                    <span class="price"> $1,090</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

            </ul>
        </div>

        <!-- 寵物零食熱銷榜 -->
        <div id="Candy" class="tabcontent">
            <ul class="hot-foods">
                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/點心_4.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>毛孩好棒棒 鴨肉口味20克(狗零食)</a> <br>
                    <span class="price"> $99</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>

                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/點心_5.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>貓咪凍乾零食 鱈魚 60克 (貓零食)</a> <br>
                    <span class="price"> $240</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/點心_6.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>100%新鮮食材手作寵物鮮食零食 起士雞肉條 100 克 (貓狗零食)</a> <br>
                    <span class="price"> $200</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

            </ul>
        </div>

        <!-- 保健食品熱銷榜 -->
        <div id="Health" class="tabcontent">
            <ul class="hot-foods">
                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/保健4.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>抗焦慮咀嚼錠30錠(貓狗保健用品)</a> <br>
                    <span class="price"> $589</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>

                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/保健5.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>幼貓高鈣營養膏 50克</a> <br>
                    <span class="price"> $269</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/保健6.jpg
                        " style="width: 180px;"></a>
                    <a href="#" class="textname"><br>保健系列 皮毛好美麗 80錠(185克) 改善貓狗毛髮與皮膚問題 豐富深海魚EPA DHA Omega3</a> <br>
                    <span class="price"> $269</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

            </ul>
        </div>

        <!-- 美容熱銷榜 -->
        <div id="Pretty" class="tabcontent">
            <ul class="hot-foods">
                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/美容_1.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>草本養護 癢癢退散洗毛精 汪汪專用 500ml</a> <br>
                    <span class="price"> $460</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>

                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/美容_2.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>純天然除蚤驅蟲洗毛精 500ML</a> <br>
                    <span class="price"> $700</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/美容_3.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>世界級東方草本精油 貓狗適用 沐浴系列 400ml </a> <br>
                    <span class="price"> $640</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

            </ul>
        </div>

        <!-- 住宿熱銷榜 -->
        <div id="Stay" class="tabcontent">
            <ul class="hot-foods">
                <li class="foods" style="height: 200px;">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/住宿_1.jpg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>踏踏貓旅館．貓咪美容</a> <br>
                    <span class="price">臺中大雅</span>
                    <button style="width: 80px; bottom: 8px; color: var(--thrcolor);"> <a
                            href="https://tatacathotel.com/" target="_blank">瞭解更多..</a> </button>
                </li>

                <li class="foods">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/住宿_2.jpeg" style="width: 180px;"></a>
                    <a href="#" class="textname"><br>毛小愛Fluv</a> <br>
                    <span class="price"> 台北大安</span>
                    <button style="width: 80px; bottom: 8px; color: var(--thrcolor);"> <a href="https://fluv.com/tw"
                            target="_blank">瞭解更多..</a> </button>
                </li>

                <li class="foods" style="height: 200px;">
                    <div class="rank">HOT</div>
                    <a href="#"><img src="img/住宿_3.jpg" style="width: 180px; height: 130px;"></a>

                    <a href="#" class="textname"><br>阿默寵物美容 </a> <br>
                    <span class="price"> 新北三峽</span>
                    <button style="width: 80px; bottom: 8px; color: var(--thrcolor);"> <a
                            href="http://www.amopetgrooming.com" target="_blank">瞭解更多..</a> </button>
                </li>

            </ul>
        </div>
    </div>

    <br>

    <!-- 商品列表 -->
    <div class="list" style="text-align: center;">
        <span>商品列表</span>
        <div>
            <ul class="cards">
                <li class="card">
                    <a href="#" id="qwert"><img src="img/catfood_1.jpg" style="width: 150px;"></a>
                    <a href="#" class="textname">Mobby Choice 莫比自然食 低卡化毛配方 (1.5kg)
                    </a> <br>
                    <span class="price"> $359</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>
                <li class="card">
                    <a href="#" id="qwert"><img src="img/catfood_2.jpg" style="width: 150px;"></a>
                    <a href="#" class="textname">Orijen 極緻無穀成幼貓 野牧鮮雞 5.45kg</a> <br>
                    <span class="price"> $2,299</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>
                <li class="card">
                    <a href="#" id="qwert"><img src="img/catfood_3.jpg" style="width: 150px;"></a>
                    <a href="#" class="textname">Nutrience 紐崔斯無穀養生貓飼料-火雞肉+雞肉+鯡魚 5kg</a> <br>
                    <span class="price"> $1,850</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>
                <li class="card">
                    <a href="#" id="qwert"><img src="img/catfood_4.jpg" style="width: 150px;"></a>
                    <a href="#" class="textname">ND 天然無穀糧 鯡魚甜橙 1.5公斤(貓飼料)</a> <br>
                    <span class="price"> $1,197</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>
                <li class="card">
                    <a href="#" id="qwert"><img src="img/catfood_1.jpg" style="width: 150px;"></a>
                    <a href="#" class="textname">經典系列成功貓 化毛高纖1.5KG(貓飼料)</a> <br>
                    <span class="price"> $408</span>
                    <button><img src="icons/shopping.png" style="width: 30px;"></button>
                </li>

            </ul>
        </div>

    </div>


    <script type="text/javascript" src="mycontent"></script> 
    
</body>
</html>