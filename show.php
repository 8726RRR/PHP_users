<?php
    // (C)
    require_once 'models/User.php';
    session_start();
    $id = $_GET['id'];
    // データベースから指定されたIDのデータを取得
    $user = User::find($id);
    $token = session_id();
    // Viewの表示
    include_once 'views/show_view.php';