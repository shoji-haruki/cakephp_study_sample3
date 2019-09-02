# cakephp_study_sample3
 学習サンプル
 学習用なのでいろんな所にコメントアウトが残ってます
## varsion
```
php 7.2.1
cake 3.6.15
```
## 一時公開URL（ローカルサーバー起動時限定）
```
https://cakephp_sample.serveo.net
```
## migration関連コマンド
```
作成
    php bin/cake.php bake migration CreateProducts name:string description:text created modified
実行
    php bin/cake.php migrations migrate
カラム削除
    bin/cake bake migration RemovePriceFromProducts price
    Remove[削除するカラム名]From[テーブル名] [カラム名（小文字）]
    php bin/cake.php migrations migrate
カラム追加
    bin/cake bake migration AddPriceToProducts price:decimal
    Add[追加するカラム名]From[テーブル名] [カラム名（小文字）]:[型]
```
## model controller　作成コマンド
```
bake コマンドで使用できるオプション一覧
bin/cake bake
上記を全て作成　最後にテーブル名
bin/cake bake all users
```
## ローカルサーバー
```
bin/cake server
http://localhost:8765/
```
### mysql
```
composer create-project --prefer-dist cakephp/app=3.6 cakephp_study_sample3
cd cakephp_study_sample3
mysql -u root
    create database cake_php_sample;
    tavle.sql
mysql -v 5.6.45
docker exec -it b0e1e613cd0a bash
mysql -u root -p   パス xxx
```
## データベース情報
```
'localhost',
'username' => 'root',
'password' => '',
'database' => 'cake_php_sample',
```
## その他
```
キャッシュ削除
cd [CakePHPのルートフォルダ]
bin/cake cache clear_all
```
## テスト
vendor/bin/phpunit
