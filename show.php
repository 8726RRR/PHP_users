<?php
    // (C-4)
    require_once 'models/User.php';
    // var_dump($_GET);
    $id = $_GET['id'];
    // print $id;
    // データベースから指定されたIDのデータを取得
    $user = User::find($id);
    // var_dump($user);
    // Viewの表示
    include_once 'views/show_view.php';