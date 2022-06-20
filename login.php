<?php

session_start();
include "php/app.php";

?>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="javascript/main.js"></script>
    <link type="text/css" rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <div class="login-form col s10 l10">

        <div class="logo">
            <img src="images/logo.png">
        </div>

        <form class="row" action="php/session">

            <div class="input-field col s12">
                <i class="tiny material-icons prefix">account_circle</i>
                <input id="username" type="text" name='user' class="validate">
                <label for="username">Username</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">lock</i>
                <input id="password" type="password" name='pass' class="validate">
                <label for="password">Password</label>
                <button class="btn waves-effect waves-light login-btn" type="submit" name="action">Login</button>
            </div>
            <span class="notif-error">* wrong username or password!</span>
        </form>

    </div>
</body>