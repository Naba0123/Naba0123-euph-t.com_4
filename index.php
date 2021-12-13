<!DOCTYPE html>
<html lang="ja">
  <head>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/head.php' ?>
		<link href="root/css/root.css" rel="stylesheet">
		<title>Euphoria Time</title>
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
      
      <div style="text-align: center">
        <img src="root/img/top.png" alt="logo" style="margin: 30px 0px;">
      </div>
      
      <h2>News</h2>
      <?php include "root/php/whats_new.php"; ?>

      <h2>Backup Pages(2021/12)</h2>

      <p><a href="missing.php">missing page</a></p>
      <p><a href="other/gochiusa/index.php">次のご注文は何羽ですか？</a></p>
        
      <h2>Contents</h2>
      
      <table id="contents">
      <tr>
        <td class="shadow-box img-a-white">
          <h3>Music</h3>
          <a href="/music/">
            <img src="root/img/music.jpg" alt="" class="shadow-box">
          </a>
          <p>製作音楽まとめ</p>
          <p>インスト，VOCALOID，Vocal曲，etc</p>
        </td>
        <td class="shadow-box img-a-white">
          <h3>PSO2</h3>
          <a href="/pso2/">
            <img src="root/img/pso2.jpg" alt="" class="shadow-box">
          </a>
          <p>Phantasy Star Online 2</p>
          <p>Ship8のチーム「ヽ(・ω・ヽ)単位たんまってー」の紹介</p>
        </td>
      </tr>
      <tr>
        <td class="shadow-box img-a-white">
          <h3>Programs</h3>
          <a href="https://github.com/Naba0123/" target="_blank">
            <img src="root/img/github.jpg" alt="" class="shadow-box">
          </a>
          <p>公開できるプログラムが無いのでGithubのリンク</p>
        </td>
        <td class="shadow-box img-a-white">
          <h3>About Us</h3>
          <a href="/about/">
            <img src="root/img/about.jpg" alt="" class="shadow-box">
          </a>
          <p>Euphoria Time のメンバーやリンク等</p>
          <p>自宅サーバーの情報</p>
        </td> 
      </tr>
      </table>
      
    </div>
    
    <!-- footer -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/footer.php' ?>
    
  </body>
  
  
</html>