<?php
    // (C)
    require_once 'models/User.php';
    session_start();
    $id = $_GET['id'];
    
    // データベースから指定されたIDのデータを取得
    $user = User::find($id);
    
    $errors = $_SESSION['errors'];
    $_SESSION['errors'] = null;
    
    $token = session_id();

    // Viewの表示
    include_once 'views/edit_view.php';