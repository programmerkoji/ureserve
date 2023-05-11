# Udeny Laravel講座 第三弾

## ダウンロード方法

git clone git@github.com:programmerkoji/ureserve.git

git clone ブランチを指定してダウンロードする場合

git clone -b ブランチ名 git@github.com:programmerkoji/ureserve.git

もしくはZIPファイルでダウンロードしてください。

## インストール方法

- cd ureserve
- composer install
- npm i && npm run dev

.env.example をコピーして.envファイルを作成

.envファイルの中の下記をご利用の環境に合わせて変更してください。

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

XAMPP/MAMP または他の開発環境でDBを起動した後に

php artisan migrate:fresh --seed

と実行してください。（データベーステーブルとダミーデータが追加されればOK）

最後に
php artisan key:generate
と入力してキーを生成後、

php artisan server
で簡易サーバーを立ち上げ、表示確認してください。

## インストール後の実施事項

画像のリンク
php artisan storage:link

プロフィールページで画像アップロード機能を使う場合は、
.envのAPP_URLを下記に変更してください。

APP_URL=http://localhost
↓
APP_URL=http://127.0.0.1:8000
