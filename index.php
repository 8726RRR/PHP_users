<?php
    // コントローラー(C-1)
    // 外部ファイルの読み込み
    require_once 'models/User.php';
    // セッション開始
    session_start();
    
    // $users = $_SESSION['users'];
    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
    
    // 全ユーザー情報を取得するメソッドを実行
    $users = User::all();
    
    // HTMLファイルの表示・相対パス
    include_once 'views/index_view.php';