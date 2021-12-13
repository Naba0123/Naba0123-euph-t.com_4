<!DOCTYPE html>
<html lang="ja">
  <head>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/head.php' ?>
		<link href="css/music.css" rel="stylesheet">
		<title>Music - Euphoria Time</title>
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
      
      <h1>Music</h1>
      <div class="container-text">
        <table>
          <tr>
            <td style="padding-right: 40px">
              <p>Naba が制作した楽曲を公開しています。<br>
              <p style="margin-bottom: 0px">　<!-- オリジナル楽曲の他に、練習のために作った既存曲のカバーも投稿するため著作権が絡むので、JASRACに許諾されている -->音楽投稿サイト <a href="http://creofuga.net/" target="_blank" class="link">CreoFUGA</a> に楽曲を投稿させていただいています。</p>
            </td>
            <td style="vertical-align: middle; text-align: right;">
              <p style="margin: 0px"><a href='javascript:void(0)'><img src='img/creofuga.png' width='200px' height='37px' title='作曲・音楽投稿コミュニティ【クレオフーガ】' alt='Nabaさんのプロフィールページ | 作曲・音楽投稿コミュニティ【クレオフーガ】'></a></p>
            </td>
          </tr>
        </table>
      </div>
      
      <h2>Music News</h2>
      <div class="container-text">
        <?php include 'php/music_news.php'; ?>
      </div>
      
      <?php include 'php/music.php'; ?>
      
    </div>
    
    <!-- footer -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/footer.php' ?>
    
  </body>