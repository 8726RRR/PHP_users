<?php
    // コントローラー(C-1)
    // 外部ファイルの読み込み
    require_once 'models/User.php';
    // セッション開始
    session_start();
    
    $users = $_SESSION['users'];
    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
    // セッションにユーザー一覧が保存されていなければ
    if($users === null) {
        //物語開始
        $iwai = new User('岩井', 25, 'male');
        $shima = new User('島', 49, 'male');
        $yamada = new User('山田', 18, 'female');
        //ユーザー一覧を作成
        $users = array();
        $users[] = $iwai;
        $users[] = $shima;
        $users[] = $yamada;
        
        // usersというキーワードのついたsessionという全部のファイルが使える共通の保存箱に、$usersを保存
        // sessionにユーザー一覧を保存
        $_SESSION['users'] = $users;
    } 
    // var_dump($users);
    
    // ユーザー一覧の表示
    // foreach($users as $user) {
    //     print $user->name . PHP_EOL;
    //     print $user->age . '歳' . PHP_EOL;
    //     print $user->gender === 'male' ? '男性' . PHP_EOL : '女性' . PHP_EOL;
    //     print $user->drink();
    // }
    
    // HTMLファイルの表示・相対パス
    include_once 'views/index_view.php';