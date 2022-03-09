<?php
    //(C-3)
    require_once "models/User.php";
    session_start();
    // $_POST はページ間をまたいで飛んでくる連想配列
    // var_dump($_POST);
    $name = $_POST['name'];
    // print $name;
    // create_view.phpのフォームで入力された値を取得
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    
    // 入力された値をもとに新しいユーザーを作成
    $user = new User($name, $age, $gender);
    // var_dump($user)
    // 目標
    // セッションからユーザー一覧を取得
    $users = $_SESSION['users'];
    $users[] = $user;
    var_dump($users);