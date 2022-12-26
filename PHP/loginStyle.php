<?php
header('Content-type: text/css; charset:UTF-8');
$main_color = "#fff389";
$two_color = "#A6372D";
$thr_color = "#4D5D73";
?>
<!-- 首頁CSS -->
<!-- @import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap"); -->

html {
font-family: 'Noto Sans TC', sans-serif;
width: 100%;
height: 100%;
}
body {
background-image: linear-gradient(to bottom, rgba(213,206,166,1) 0%,rgba(201,193,144,1) 40%,rgba(183,173,112,1) 100%);
width: 100%;
height: 100%;
}
<!-- 登入 -->
.apple {
margin-top: 50px;
background-color: red !important;
}

.apple>button {
width: 80px;
background-color: white;
font-size: 16px;
height: 35px;
margin: 5px;
color: <?= $thr_color ?>;
border: none;
border-radius: 5px;
}
.enter {
/* background-color: red; */
font-size: 18px;
height: 100px;
padding: 30px 50px;
text-align: left;
}
.enter>div {
padding:3px;
}
.enter>h2 {
margin: 10px;
padding:3px;
margin-top:10px;
text-align:center;
}

.enter input {
height: 30px;
width: 200px;
border: none;
padding: 3px;
outline-style: none ;
}

.enter input:focus{
border-color: #66afe9;
outline: 0;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
}

.apple>button:hover{
background-color: <?= $thr_color ?>;
color: white;
cursor: pointer;
}


.loginBody {
width: 300px;
height: 350px;
background-color: <?= $main_color ?>;
border-radius: 5px;
text-align: center;
margin: auto;
margin-top: 150px;
box-shadow:5px 5px 0px 0px rgba(0,0,0,0.25);

}
.apple {
width: 300px;
height: 50px;
background-color: <?= $main_color ?>;
margin-top: 80px;
}