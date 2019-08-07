# cakephp_study_sample3
 学習サンプル
 学習用なのでいろんな所にコメントアウトが残ってます
## 1
```
version
php 7.2.1
cake 3.6.15
```
### 1
```
composer create-project --prefer-dist cakephp/app=3.6 cakephp_study_sample3
cd cakephp_study_sample3
mysql -u root
    create database cake_php_sample;
    tavle.sql
```
## 2 DB 情報
```
'localhost',
'username' => 'root',
'password' => '',
'database' => 'cake_php_sample',
```
## migration
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
