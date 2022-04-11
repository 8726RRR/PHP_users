<?php
    // (C)
    require_once 'filters/csrf_filter.php';
    require_once 'models/User.php';
    $id = $_POST['id'];
    // そのインスタンスをMySQLから削除
    $flush = User::destroy($id);
    
    $_SESSION['flush'] = $flush;
    
    // リダイレクト
    header('Location: index.php');
    exit;