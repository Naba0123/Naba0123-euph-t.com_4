<!DOCTYPE html>
<html lang="ja">
  <head>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/head.php' ?>
		<link href="css/pso2.css" rel="stylesheet">
		<title>PSO2 Contents - Euphoria Time</title>
  </head>
  <body>
    
    <!-- background -->
    <div id="bg">
      <img src="/share/img/bg.jpg" alt="background">
    </div>
    
    <!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/header.php' ?>
    
    <!-- container -->
    <div id="container" class="container-box">
      
      <h1>PSO2 Contents</h1>
      <table class="middle-table">
        <tr>
          <td>
            <p>SEGA のオンラインゲーム <a href="http://pso2.jp/" target="_blank" class="link">Phantasy Star Online 2</a> の<br>チームだったり、SSだったり、いろいろな紹介です。</p>
            <p style="font-size:small">このページにおける著作物（画像、データ、音声、テキスト等）の一切の権利は、<br>株式会社セガが保有しています。</p>
          </td>
          <td>
            <img src="img/pso2_title.png" alt="" style="margin: -25px 0px;">
          </td>
        </tr>
      </table>
      
      <h2>PSO2 Contents News</h2>
      <div class="container-text">
        <?php include 'php/pso2_news.php'; ?>
      </div>
      
      <h2>ヽ(・ω・ヽ)単位たんまってー</h2>
      <div class="container-text">
        <p>「ヽ(・ω・ヽ)単位たんまってー」は、Ship8(ウィン)で活動している身内チームです。</p>
        <table class="mini-dotted-table">
          <tr><td>チーム創設日</td><td>2013年8月12日</td></tr>
          <tr><td>チームマスター</td><td>ナーバ（-----）</td></tr>
          <tr><td>マネージャー</td><td>-----</td></tr>
          <tr><td>チームレベル</td><td>Lv.5</td></tr>
          <tr><td>チーム木レベル</td><td>攻撃力アップLv.5</td></tr>
          <tr><td>メンバー数</td><td>7人（アクティブ２～４人）</td></tr>
        </table>
      </div>
      
      <h3>ナーバ</h3>
      <table class="middle-table member">
        <tr>
          <td>
            <p>このホームページの管理者 Naba であり、<br>チームのマスターです。以下コメント。</p>
            <p>SSガチ勢になりたい。<br>いやその前にグラボが欲しい。<br><del>前提としてレア武器が欲しい。</del></p>
            <table class="member-table" >
              <tr><th colspan="2">Charactor Status (2014/12)</th></tr>
              <tr><td>よく使うクラス構成</td><td>BrRa / HuFi</td></tr>
              <tr><th colspan="2">Weapon Status</th></tr>
              <tr><td>（強弓☆12）エーデル・アーロ</td><td>炎32 / 6s / 射撃+110</td></tr>
              <tr><td>（大砲☆11）バイオスパット</td><td>炎50 / 5s / 射撃+100</td></tr>
              <tr><td>（自在槍☆11）ネプトアンカー</td><td>光50 / 5s / 打撃+85</td></tr>
              <tr><td>（自在槍☆9）ネイクロー</td><td>氷50 / ExLv.11 / UltB</td></tr>
            </table>
          </td>
          <td class="member-profile">
            <img src="img/naba.jpg" alt="naba" class="img-border">
          </td>
        </tr>
      </table>
      
      
    </div>
    
    <!-- footer -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/footer.php' ?>
    
  </body>