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
    // 入力された値の検証
    $errors = $user->validate();
    // 入力エラーが一つもなければ新規登録させたい
    if(count($errors) === 0) {
        //セッションからユーザー一覧を取得
        $users = $_SESSION['users'];
        $users[] = $user;
        $_SESSION['users'] = $users; // 新規ユーザーが入ったものを再保存
        $_SESSION['flush'] = $user->name . 'さんが登録されました';
        // ユーザー一覧へリダイレクト
        header('Location: index.php');
        exit;
    } else {
        // 入力のし直し
        $_SESSION['errors'] = $errors;
        $_SESSION['user'] = $user;
        header('Location: create.php');
        exit;
    }
    // var_dump($errors);
    // 目標