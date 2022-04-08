<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $user->name?>さんの詳細</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background-image:url(images/bg.jpg)">
        <!--ビュー(V)-->
        <div class="container">
            <div class="row mt-2">
                <h1 class="col-sm-12 text-center text-primary mt-4"><?= $user->name?>さんの詳細</h1>
            </div>
            <div class="row mt-5">
                <table class="table table-bordered table-striped">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>名前</th>
                        <th>年齢</th>
                        <th>性別</th>
                        <th>お酒</th>
                    </tr>
                    <tr class="text-center">
                        <!--クエリーパラメーター-->
                        <td><?= $user->id ?></td>
                        <td><?= $user->name ?></td>
                        <td><?= $user->age ?>歳</td>
                        <td><?= $user->gender === 'male' ? '男性' : '女性' ?></td>
                        <td><?= $user->drink() ?></td>
                    </tr>
                </table>
            </div>
            <div class="row mt-5">
                <a href="edit.php?id=<?= $user->id ?>" class="offset-sm-3 col-sm-6 btn btn-success">編集</a>
            </div>
            <div class="row">
                <form class="col-sm-12 p-0" action="destroy.php" method="POST">
                    <input type="hidden" name="id" value="<?= $user->id ?>"/>
                    <input type="hidden" name="_token" value="<?= $token ?>"/>
                    <button class="offset-sm-3 col-sm-6 btn btn-danger mt-4" type="submit" onclick="return confirm('本当に削除しますか?')">削除</button>
                </form>
            </div>
            <div class="row mt-4">
                <a href="index.php" class="offset-sm-3 col-sm-6 btn btn-primary">ユーザー一覧に戻る</a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>