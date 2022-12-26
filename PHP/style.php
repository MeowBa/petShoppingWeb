<?php
header('Content-type: text/css; charset:UTF-8');
$main_color = "#fff389";
$two_color = "#A6372D";
$thr_color = "#4D5D73";
?>
<!-- 首頁CSS -->
@import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap");

html {
/* margin: 20px 0; */
font-family: 'Noto Sans TC', sans-serif;
}

/* 這裡是headerCSS設定 */
.header {
position: fixed;
background-color: <?= $main_color ?>;
overflow: hidden;
top: 0;
right: 0;
left: 0;
z-index: 1030;
}

body {
margin: 50px 0 0 0;
}

.header a {
float: left;
color: <?= $thr_color ?>;
text-align: center;
padding: 14px 6px;
text-decoration: none;
font-size: 14px;
}

.header a:visited {
    color: black;
}

.header i {
float: left;
font-size:20px;
<!-- padding: 14px 6px; -->
}
.header span  {
float: left;
font-size:16px;
padding: 14px 6px;
}

.header i:hover {
cursor: pointer;
color:<?= $two_color ?>;
}

.header a:hover {
color:<?= $two_color ?>;
}

.logo-centered a {
float: none;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);

}

.header-right {
float: right;
}

@media screen and (max-width: 600px) {

.hearder a,
.hearder-right {
float: none;
display: block;
}
}

/* 這裡是MenuCss設定 */
.menu {
height: 400px;
width: 0;
position: fixed;
z-index: 1;
top: 10;
left: 1;
background-color: <?= $main_color ?>;
overflow-x: hidden;
padding-top: 60px;
transition: 0.5s;
}

.menu a {
padding: 8px 8px 8px 32px;
text-decoration: none;
font-size: 17px;
/* font-family: 'Noto Sans TC', sans-serif; */
color: <?= $two_color ?>;
display: block;
transition: 0.3s;
}

/* 經過menu裡面的字變色 */
.menu a:hover {
text-shadow: 0 0 10px #FFFFFF, 0 0 15px #FFFFFF, 0 0 20px #FFFFFF;
}

/*menu裡面字的設定 */
.menu .closebtn {
position: absolute;
top: 0;
right: 25px;
font-size: 36px;
margin-left: 50px;

}

/* menu三條線的設定 */
.openbtn {
font-size: 20px;
cursor: pointer;
background-color: <?= $main_color ?>;
color: <?= $two_color ?>;
padding: 10px 15px;
border: none;
}

.openbtn:hover {
text-shadow: 0 0 10px #FFFFFF, 0 0 15px #FFFFFF, 0 0 20px #FFFFFF,
0 0 25px #FFFFFF;
}

/* 這裡是中間的icons列 */
#icons {
display: flex;
/* align-items: center; */
justify-content: center;
/* background-color: lightcyan; */
}

#icons img {
width: 45px;
}

#icons>a {
color: 1f317f;
margin: 10px;
text-align: center;
color: gray;
text-decoration: none;
float: left;
}

body a:visited {
color: gray;
}

#icons>a:hover {
color: <?= $two_color ?>;

}

/* 這裡是搜尋列的CSS設定 */

.search input {
width: 250px;
border-radius: 30px;
border: 2px solid #324B4E;
background: #F9F0DA;
transition: .3s linear;
float: right;
}

.search input:focus {
width: 300px;
}

.search button {
background: none;
top: -2px;
right: 20px;
height: 42px;
width: 30px;
cursor: pointer;
position: absolute;
}

.search {
width: 500px;
height: 42px;
margin: 0 auto;
padding: 5px 0;

}

.search>form {
position: relative;
width: 300px;
margin: 0 auto;

}

input,
button {
border: none;
outline: none;
}

input {
width: 100%;
height: 30px;
padding-left: 13px;
}

/* 這裡是廣告圖 */
.slideshow-container {
max-width: 900px;
position: relative;
margin: auto;
}

/* 隱藏圖片 */
.mySlides {
display: none;
}

/* 下一頁< 上一頁> */
    .prev,
    .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    }

    /* 下一頁框框 */
    .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    }

    .prev:hover,
    .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
    }

    /* 廣告圖下面的點點 */
    .dot {
    cursor: pointer;
    height: 10px;
    width: 10px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }


    .dot:hover {
    background-color: #717171;
    }

    .dots {
    position: absolute;
    bottom: 5px;
    right: 45%;
    }

    /* 動畫 */
    .fade {
    animation-name: fade;
    animation-duration: 1.5s;
    }

    @keyframes fade {
    from {
    opacity: .4
    }

    /* opacity元素的不透明度*/

    to {
    opacity: 1
    }
    }

    /* 熱銷榜 */

    .HotList {
    height: 150px;
    width: 900px;
    margin: auto;
    border: 10px;
    }

    /* 熱銷按鈕連結 */
    .tablink {
    background-color: rgba(255, 254, 254, 0.5);
    color: <?= $thr_color ?>;
    float: right;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 100px;
    /* box-shadow: 0 4px 8px 0 rgba(17, 8, 8, 0.3); */
    }

    .Hot {
    color: black;
    text-shadow: 0 0 15px <?= $main_color ?>, 0 0 10px <?= $main_color ?>;
    float: left;
    font-size: 28px;
    padding: 10px 5px 10px 20px;
    animation-iteration-count: infinite;


    }

    .tablink:hover {
    text-shadow: 0 0 15px rgb(194, 60, 60), 0 0 10px rgb(194, 60, 60);

    }

    /* 熱銷商品裡的商品列 */
    .tabcontent {
    /* color: white; */
    display: none;
    padding: 20px;
    height: 280px;
    }

    /* 熱銷商品設定 */
    .HotList {
    border: 5px double #1C6EA4;
    border-radius: 10px;
    width: 900px;
    height: 320px;
    }

    .hot-foods {
    display: flex;
    margin: auto;
    width: 800px;

    }

    .foods {
    box-shadow: 0 4px 4px 0 rgba(17, 8, 8, 0.2);
    width: 200px;
    height: 250px;
    text-align: center;
    font-family: arial;
    font-size: small;
    position: relative;
    margin: auto;


    }

    .foods button {
    border: none;
    outline: 0;
    background-color: transparent;
    cursor: pointer;
    width: 50px;
    position: absolute;
    bottom: 0;
    right: 5px;
    }

    .foods button:hover {
    opacity: 0.7;

    }

    .foods a {
    text-decoration: none;
    }

    .foods a:hover {
    color: <?= $two_color ?>;
    }

    ol,
    ul {
    list-style: none;
    }

    .rank {
    position: absolute;
    width: 50px;
    height: 50px;
    border: 2px;
    border-color: red;
    background: #f3f366;
    clip-path: polygon(0% 0%, 100% 0, 100% 70%, 50% 100%, 0 70%);
    font-size: 18px;
    font-family: Arial;
    text-align: center;
    line-height: 50px;
    color: red;

    }

    /* 商品列表 */
    .list {
    width: 900px;
    /* box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2); */
    margin: auto;
    /* display: flex; */

    /* border: 5px double #1C6EA4; */
    border-radius: 10px;


    }

    .list>span {
    font-size: 20px;
    }

    .cards {
    display: flex;

    }

    .card {
    box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
    width: 180px;
    height: 230px;
    text-align: center;
    font-family: arial;
    font-size: small;
    position: relative;
    margin: 10px;
    right: 20px;
    padding: 0 5px;

    }

    /* 熱銷商品等的價錢 */
    .price {
    color: rgba(255, 0, 0, 0.5);
    font-size: 18px;
    position: absolute;
    bottom: 5px;
    left: 10px;
    }

    .card button {
    border: none;
    outline: 0;
    background-color: transparent;
    cursor: pointer;
    width: 50px;
    position: absolute;
    bottom: 0;
    right: 5px;
    }

    .card button:hover {
    opacity: 0.7;

    }

    .card a {
    text-decoration: none;
    }

    .card a:hover {
    color: red;
    }

    ol,
    ul {
    list-style: none;
    }

    /* 滑鼠移過商品圖片變大 */
    #qwert img {
    transform: scale(1, 1);
    transition: all 1s ease-out;
    }

    #qwert img:hover {
    transform: scale(1.2, 1.2);
    }
