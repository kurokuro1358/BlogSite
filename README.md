# ブログサイト　（七日町の思い出）
- ## アプリの概要について  
    - ### __開発背景__　　
        インスタグラムのような写真を投稿できるサービスを作ってみたいと思い、開発に着手しました。
    - ### __開発期間__
        ２日
    - ### __開発人数__  
        １人
    - ### __役割__
        設計、コーディング

- ## 使用言語・OSについて  
    - ### __使用言語__
        PHP 7.4.12  
        MySQL 5.7.32
    - ### __開発環境__
        MAMP 6.3

- ## 環境構築の手順  
    1. [MAMP](https://www.mamp.info/de/downloads/)をダウンロードする。  　　
    ![MAMPのダウンロード画面](https://dl.dropboxusercontent.com/s/w8x7xsr628gzjl4/mamp.png)

    2. MAMPを起動する。
    ![MAMPを起動した画面](https://dl.dropboxusercontent.com/s/91ka1f0bsgxczvt/startMamp.png)

    3. MAMPの起動画面から、Preferences -> Server -> Choose... からDocument rootに作業ディレクトリを選択し、OKを押す。
    ![Document rootをカレントディレクトリに設定する画面](https://dl.dropboxusercontent.com/s/xkvse72e6sd79x1/setMamp.png)

    4. ホーム画面から右上のStartを押し、サーバーを起動する。デェフォルトでは、ポート番号は8888に設定してある。詳細は、Preferences -> Portsから確認できる。
    ![ポート番号を確認できる画面](https://dl.dropboxusercontent.com/s/vgnjhfz2li1ktgx/Server.png)
    
    5. Google Chromeを開き、[http://localhost:8888/phpmyadmin/](http://localhost:8888/phpmyadmin/)にアクセスする。
    ![phpMyAdmin](https://dl.dropboxusercontent.com/s/yjw28eixqkdvdz6/phpmyadmin.png)

    6. ユーザーアカウント -> ユーザーアカウントを追加する から新たにユーザーアカウントを作成し、グローバル特権に全てチェックする。  
    ユーザー名：kurokuro   
    ホスト名：localhost  
    パスワード：secret

- ## デモ
    1. サーバーを起動した状態で、[http://localhost:8888/](http://localhost:8888/)にアクセスする。  
    ![ホーム画面](https://dl.dropboxusercontent.com/s/kn21kwfbyvzd8ar/myblog.png?dl=0)  

    2. ページ左上のブログ作成から、ブログ作成ページに移る。 

    3. ３つのファイル選択ボタンから、３枚の画像を選択し、それに対してのコメントを書く。１枚目に選択した画像が、ホーム画面のサムネイルとして表示される。画像の種類が、jpeg形式のものしか選択できないので、注意してください。

    4. [ホーム画面](http://localhost:8888/)より、投稿ができていることを確認する。

- ## 注意した機能や工夫した点  
    - どの端末でも、見栄えが良くなるように、レスポンシブデザインに対応させるため、Bootstrapを用いて開発しました。
    - よく使う機能に関しては、関数としてまとめ、template.phpにまとめました。

- ## 注意点  
    - 選択する画像は、jpeg形式のものしか選択できないので注意してください。jpeg以外でも、投稿はできますが、ホーム画面で、正常に画像が表示されない場合があります。