<?php
header('Content-type: text/css; charset:UTF-8');
$main_color = "#fff389";
$two_color = "#A6372D";
$thr_color = "#4D5D73";
?>
<!-- 首頁CSS -->
<!-- @import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap"); -->

html {
/* margin: 20px 0; */
font-family: 'Noto Sans TC', sans-serif;
}
body {
background: rgb(213,206,166); /* Old browsers */
<!-- background: -moz-linear-gradient(top, rgba(213,206,166,1) 0%, rgba(201,193,144,1) 40%, rgba(183,173,112,1) 100%); /*
FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(213,206,166,1) 0%,rgba(201,193,144,1) 40%,rgba(183,173,112,1) 100%); /*
Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(213,206,166,1) 0%,rgba(201,193,144,1) 40%,rgba(183,173,112,1) 100%); /* W3C,
IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d5cea6', endColorstr='#b7ad70',GradientType=0 ); /*
IE6-9 */ -->

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