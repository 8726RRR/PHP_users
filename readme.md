# 簡易ユーザー登録アプリ

## 1. このアプリの概要
これは、SAMURAI ENGINEERのレッスン中に、PHPのMVCモデルとCRUD処理の基礎を理解するために開発した簡易ユーザー登録アプリです。
開発する中で、入力値に対するバリデーション機能で、名前、年齢、年齢に応じて判定(お酒OK、お酒NG)する項目を意識しました。
これにさらに機能を付け加えるとしたら、jQueryのアニメーション機能を使って画面をデコレーションしたり、セキュリティー対策もかねてログイン機能を付けたりしたいと考えております。
Herokuにデプロイしておりますので、ぜひ操作してみてください。

## 2. 技術要素

- 開発環境 AWS Cloud9 / Amazon Linux AMI
- HTML5 / CSS3
- Bootstrap 4.3.1
- PHP 7.2.34
- MySQL 5.5.62
- バージョン管理 Git / GitHub
- デプロイ Heroku
- Herokuにデプロイしたもの: https://happy-php-users.herokuapp.com/

## 3. 機能一覧
- ユーザー一覧表示機能
- ユーザー登録機能
- ユーザー詳細情報の編集・削除機能
- 各種入力値に対するバリデーション機能(名前の入力、年齢の入力、年齢に応じてお酒がOKまたはNGかどうか)
- PDO
- 各種フラッシュメッセージ表示機能
- CSRF対策機能

## 4. このアプリの画像資料

#### ⓵最初の画面
![最初の画面](/images/sample_1.jpg)

#### ⓶新規ユーザー登録画面
![新規ユーザー登録画面](/images/sample_2.jpg)

#### ⓷ユーザー情報の詳細画面
![ユーザー情報の詳細画面](/images/sample_3.jpg)

#### ⓸ユーザー情報の編集画面
![ユーザー情報の編集画面](/images/sample_4.jpg)

#### ⓹このアプリのデータベース図
![このアプリのデータベース図](/images/PHP_users_database.jpg)


## 5. お問い合わせ
駆け出しエンジニアの立場であり、まだまだ不勉強のためバグが潜んでいるかもしれません。
改善点などがありましたら、以下のメールアドレスにご連絡いただけると幸いです。

##### ◆メールアドレス:
happyday.kazuma@outlook.jp

また、自作のポートフォリオサイトもありますので、よろしければこちらもご覧ください。

##### ◆Kazuma Iwaiのポートフォリオサイト:
http://ksamurai.php.xdomain.jp/Portfolio/index.php

## 著者
2022/06/15 Kazuma Iwai