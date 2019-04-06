## イチゴジャム レシピ MixJuice コンテンツ

![スクリーンショット](screenshot.jpg)

IchigoJam BASIC＋MixJuice で参照できるコンテンツです。\
MixJuice コンテンツがまだまだ少ないので、\
サンプルとしてソースを公開する事にしました。

2019年4月5日より、独自ドメイン **15jr.tk** へ移しました。\
一部 PHP で処理させるため、[Google App Engine](https://cloud.google.com/appengine/docs/whatisgoogleappengine?hl=ja) を採用しています。\
従来 15jr.tk で行っていた短縮 URL も含めてあります。

## MixJuice コンテンツの使用方法

次のコマンドで参照できます。GET の代わりに GETS も使用可能です。

```
?"MJ GET 15jr.tk/
```

また、[15ja.ml](https://github.com/fu-sen/15ja.ml) にも入れてあります。15ja.ml/**R**（Recipe）です。\
こちらも GET の代わりに GETS を使用可能です。

```
?"MJ GET 15ja.ml/R
```

## 短縮 URL の使用方法

15jr.tk/英 1 文字 で使用します。

```
?"MJ GET 15jr.tk/●
```

MixJuice コンテンツは次のとおりです。

|15jr.tk  |内容|
|---------|---|
|15jr.tk/ |イチゴジャム レシピ MixJuice コンテンツ|
|15jr.tk/B|[IchigoJam BASIC コマンド一覧 - MixJuice コンテンツ](https://github.com/fu-sen/IJHELP)|
|15jr.tk/D|[MixJuice 向けコンテンツの作成と公開 - 動的コンテンツ生成 サンプル](http://kidspod.club/program/?id=685)|
|15jr.tk/M|[MixJuice コンテンツ サンプル](https://github.com/fu-sen/mj)|
|15jr.tk/S|[MixJuice SSL テスト](https://github.com/fu-sen/ijmj.ga)|
|15jr.tk/T|短縮 URL メニュー|
|15jr.tk/U|[MixJuice 向けコンテンツの作成と公開 - User Agent](https://15jamrecipe.jimdo.com/mixjuice/%E3%82%B3%E3%83%B3%E3%83%86%E3%83%B3%E3%83%84%E3%81%AE%E4%BD%9C%E6%88%90%E3%81%A8%E5%85%AC%E9%96%8B/#ua)|

MixJuice 1.2.1 以前では一部参照できません。最新バージョンへ更新して下さい。

15jr.tk は イチゴジャム レシピ 関連専用なので、他者が公開するコンテンツはリンクしません。\
MixJuice コンテンツのリンク登録は同じ仕組みで運用している 15ja.ml で行っています。

**15ja.ml** https://github.com/fu-sen/15ja.ml

## MixJuice コンテンツ製作 について

[**MixJuice 向けコンテンツの作成と公開 | イチゴジャム レシピ**](https://15jamrecipe.jimdo.com/mixjuice/%E3%82%B3%E3%83%B3%E3%83%86%E3%83%B3%E3%83%84%E3%81%AE%E4%BD%9C%E6%88%90%E3%81%A8%E5%85%AC%E9%96%8B/)

## 15jr.tk の仕組み

2019年4月5日 の MixJuice コンテンツ・短縮 URL と統合すると共に\
[Google App Engine](https://cloud.google.com/appengine/docs/whatisgoogleappengine?hl=ja) で動作させています。

PHP 7.2 のランタイムでは index.php を必ず呼び出すため、\
index.php で読み出すファイルを選定し、\
該当のファイルがなければ 404.php を出力します。\
この Not Found 表示の考慮で PHP を使用する必要がありました。

www 内が出力ファイルの本体で、これらは通常の静的ファイルです。

GitHub へ git push した時に自動ビルド（デプロイ）する方法は次のとおりです。

1. [Cloud Build](https://console.cloud.google.com/cloud-build/triggers?hl=ja) でトリガーを作成し、対象の GitHub リポジトリを割り当てます。\
（この代わりに GitHub 側で [Google Cloud Build](https://github.com/apps/google-cloud-build) をインストールして同じ動作が可能です）
1. [App Engine Admin API](https://console.cloud.google.com/apis/library/appengine.googleapis.com?q=app%20engine) を有効にします。
1. [設定ページ](https://console.cloud.google.com/iam-admin/settings) でプロジェクト番号を確認します。
1. [IAMと管理ページ](https://console.cloud.google.com/iam-admin/iam) で  **プロジェクト番号@cloudbuild.gserviceaccount.com** に対し、\
   App Engine の権限を追加します。必要であれば他の権限も追加します。

ビルドに 1 分半以上要します。また無料でビルドできる回数に制限があります。\
git push 更新が多く発生する場合はビルドトリガーのトリガーページより無効にして、\
git push で更新後、手動でトリガーを実行して、実行回数を必要最小限にして下さい。

[cloudbuild.yaml](https://github.com/fu-sen/15jr.tk/blob/master/cloudbuild.yaml) はリポジトリの構成ファイルで **gcloud app deploy** する動作です。\
GitHub の Google Cloud Build を用いる場合は args の項目追加が必要かもしれません。

[Deploy to Google App Engine via a GitHub Repo | Stack Overflow](https://stackoverflow.com/questions/41308888/deploy-to-google-app-engine-via-a-github-repo)\
[Continuous deployment to App Engine using Google Cloud Build | Leigh McCulloch Posts](https://leighmcculloch.com/posts/continuous-deployment-to-app-engine-using-google-cloud-build/)

## 関連 Web サイト

**IchigoJam** https://ichigojam.net/ \
**MixJuice** http://mixjuice.shizentai.jp/

**イチゴジャム レシピ** https://15jamrecipe.jimdo.com/

## IchigoJam Advent Calendar 2018 - 10 日目

- [**IchigoJam Advent Calendar 2018 | Qiita**](https://qiita.com/advent-calendar/2018/ichigojam)
- [**翌日 11 日目**<br />円形WS2812Bx2でお手軽工作エモメガネペンダント！ IoTプログラミングで明日を創ろう - 福井市美山中学校会社訪問＆IoT体験 | 福野泰介の一日一創 - create every day](http://fukuno.jig.jp/2331)
- [**前日 9 日目**<br />IchigoJam 画面の画像を撮る方法。 | ふうせん Fu-sen.](https://balloon.gq/2018/12/ichigojam-%E7%94%BB%E9%9D%A2%E3%81%AE%E7%94%BB%E5%83%8F%E3%82%92%E6%92%AE%E3%82%8B%E6%96%B9%E6%B3%95/)
