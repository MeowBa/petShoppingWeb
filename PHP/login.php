<?php

if (isset($_GET["logout"])) {
    setcookie("userName", "Guest", time() - 3600);
    header("Location: index.php");
    exit();
}

if (isset($_POST["btnHome"])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST["btnOK"])) {
    $sUserName = $_POST["txtUserName"];
    if (trim($sUserName) != "") {
        setcookie("userName", $sUserName);
        if (isset($_COOKIE["lastPage"]))
            header(sprintf("Location: %s", $_COOKIE["lastPage"]));
        else
            header("Location: index.php");
        exit();
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="loginStyle.php">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>

<body>

    <form class="loginBody" method="post" action="login.php">
        <!-- <span class="testHeader">登入</span> -->
        <div class="enter">
            <h2>登入</h2>
            <div>帳號</div>
            <input type="text" name="txtUserName" id="txtUserName" placeholder="請輸入帳號" required>
            <div>密碼</div>
            <input type="password" name="txtPassword" id="txtPassword" placeholder="請輸入密碼" required>
        </div>
        <br>
        <div class="apple">
            <input type="submit" name="btnOK" id="btnOK" value="登入" />
            <!-- <button name="btnOK" id="btnOK">登入</button> -->
            <button type="reset">重設</button>
            <button onclick="location.href='index.php'">回首頁</button>
        </div>

    </form>
</body>