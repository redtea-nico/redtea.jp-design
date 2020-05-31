# はじめに

これは私のサイト redtea.jp の子テーマです。需要は無いと思いますが。

親テーマはhabakiriです。

# 導入に必要なもの

導入にあたって必要なものは以下のものとなります。

* [habakiri](https://habakiri.2inc.org) 2.5.2  
* [Font Awesome Web版](https://fontawesome.com/download) 5.13.0 
* [icomoon](https://icomoon.io/app/#/select) 

habakiriは親テーマなので必須です。

Font Awesome と icomoon は任意です。この2つは、ソーシャルリンクのアイコンを追加したい場合に必要となります。

Twitter, Facebook, instagram, Githubなどの基本的なアイコンはhabakiriで間に合います。

私はMastodonのアイコンとniconicoのアイコンを導入したいと思い、この2つを導入させて頂きました。

欲しいアイコンが入っているかどうかはFont Awesomeで検索して下さい。

存在しない場合はアイコンをSVGを作成しicomoonでフォントにします。

# 内容
内容は以下のとおりです。

* css/assets.css
* css/assets.min.css

ボーダーの線を編集

* inc/class.breadcrumbs.php

パンくずリストにクラスを追加

* modules/copyright.php

コピーライトの内容を編集

* footer.php

ページごとにヘッダ画像を変更するためにカスタムフィールドの値を取得出来るように編集

`<?php echo get_post_meta($post->ID, 'article_css', true);?>`を追加

`article_css`を固定ページの編集画面などでカスタムフィールドを指定して画像のURLを記述することでヘッダ画像を追加できるようになる

* function.php

親のfunction.phpから引き継ぐ

`habakiri_child_theme_setup()`関数を記述
What's New を表示するためのショートコードを追加

* header.php

ハンバーガーボタンを変更するために`<div id="responsive-btn">`をコメントアウト

その後、むりやりハンバーガーボタンをHTMLで追加

* style.css

`.entry-meta` `.comments` `.trackbacks` コメント、トラックバックのボーダーをドットに変更

`.entries` `.article` `.related-posts` 同様

`.para_img` 本文内の画像に`para_img`クラスを付与し、画像をレスポンシブに対応させる

`img.habakiri-slider__image` トップページのスライドショーの画像をレスポンシブにする

`.habakiri-slider__item-wrapper` スライドショーに表示するhtml構文の位置を絶対位置にする

`.author` 投稿者を非表示

`.copyright` コピーライトの部分の背景と色を変更

`.breadcrumbs` パンくずリストの文字色を変更

`a.bread a.bread:hover` パンくずリストのリンクを通常時、ホバー時の文字色の変更

`a.copy` `a.copy:hover` コピーライトのリンク部分の文字色の変更

`li` `p` 背景色を変更したため文字色も変更

`h2.related-posts__title.h3` `h2.comments__title.h3`  `#trackback` `"#reply-title` `h2.sidebar-widget__title.h4`

タイトルの文字色の変更

`commentform` コメントフォームの高さ変更

`.page-header` ページヘッダ(固定ページではヘッダ画像のあたり)のマージンの削除とボーダーの削除

`@font-face` フォントの追加
`.social-nav` フッターに表示されているソーシャルナビゲーションのアイコンを指定

`.googlemap` レスポンシブの対応

以降はハンバーガーボタンと全画面メニューのスタイル調整
フォントは`Montserrat`を指定

# その他の変更点
以下はWordPressの管理画面上で行ったカスタマイズです

変更点のみを記述

記述がない場合はデフォルト

## Typography (プラグイン)

H1 : Noto Sans JP

H2 : Noto Sans JP

## サイト基本情報

タイトル : 紅茶(こうちゃん)のサイト

キャッチフレーズ : お茶は不思議な飲み物

アイコン : 適当

## ウィジェット

フッター : 固定ページ, メタ情報

## 色
### 一般設定

背景色 : #212121

ロゴテキストの色 : #000000

リンク文字色 : #29cccc

リンク文字色(ホバー時) : #2ee6e6

### ヘッダー

背景色 : #cc3030

### フッター

背景色 : #111113

文字色 : #ffffff

リンク文字色 : #777777

### グローバルナビゲーション

背景色 : #cc3030

リンク文字色 : #000000

リンク文字色(ホバー時) : #000000

メニュー背景色 : #cc3030

メニュー背景色(ホバー時) : #cc3d3d

サブラベルの文字色 : #777777

サブラベルの文字色(ホバー時) : #777

プルダウンのリンク文字色 : #777777

プルダウンのリンク文字色(ホバー時) : #337ab7

プルダウンメニューの背景色 : #000000

プルダウンメニューの背景色(ホバー時) : #191919

### ハンバーガーボタン

文字色 : #000

文字色(ホバー時) : #000

枠線の色 : #cc3030

枠線の色(ホバー時) : #cc3030

背景色 : #cc3030

背景色(ホバー時) : #cc3030

### ページヘッダー

背景色 : #212121

文字色 : #ffffff

## 設定

抜枠の長さ : 110

アーカイブページでのサムネイル表示 : はい

パンくずリストを表示中 : はい

個別投稿ページでの関連記事表示 : はい

ページヘッダーを表示 : はい

ページヘッダーにリード文を表示 : はい

## レイアウト
### ヘッダー

ヘッダー : デフォルト

ヘッダーを固定 : いいえ

### フッター

フッターのカラム数 : 3コラム

### グローバルナビゲーション

オフキャンバスナビゲーションに切り替えるブレイクポイント : タブレットサイズ

文字サイズ : 12px

サブラベルの文字サイズ : 10px

メニュー項目の余白(横) : 15

メニュー項目の余白(縦) : 23

オフキャンバスナビゲーションの文字サイズ : 12px

オフキャンバスナビゲーションのスライド方向 : 右寄せ

### テンプレート

ブログテンプレート : 右サイドバー

検索結果テンプレート: サイドバーなし

404テンプレート : サイドバーなし

## フロントページスライドショー
### 設定

エフェクト : フェード

インターバル : 5000ms

エフェクトスピード : 1000ms

オーバーレイの色 : #000

オーバレイ不透明度 : 80%

高さ : 0px(auto)

### 画像1

内容

`<h1>About</br><a class="btn btn-default" href=https://redtea.jp/about>About</a></h1>`

### 画像2

内容

`<h1>Blog</br><a class="btn btn-default" href=https://redtea.jp/blog>Blog</a></h1>`

### 画像3

内容

`<h1>Accounts</br><a class="btn btn-default" href="https://redtea.jp/accounts">Accounts</a></h1>`

## ホームページ設定

ホームページの表示 : 固定ページ

ホームページ : 紅茶(こうちゃん)のサイト(固定ページ)

# バージョン
## V1.0.3

フッターのソーシャルナビゲーションにKeybaseを追加

Accountsのページにアイコンを追加

## V1.0.2

フッターのソーシャルナビゲーションの修正

ブログ一覧ページ( https://redtea.jp/blog )のボタンの変更

## V1.0.1

Readmeの追加、説明の追加

親テーマのハンバーガーボタン`responsive-btn`の無効化

全画面メニューを表示させるハンバーガーボタンの追加

全画面メニューの追加

## V1.0.0

公開
