<?php $root = '../' ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
		<?php include '../share/php/head.php' ?>
		<link href="css/about.css" rel="stylesheet">
		<title>About Us - Euphoria Time</title>
  </head>
  <body>
    
    <!-- background -->
    <div id="bg">
      <img src="/share/img/bg.jpg" alt="background">
    </div>
    
    <!-- header -->
		<?php include '../share/php/header.php' ?>
    
    <!-- container -->
    <div id="container" class="container-box">
      
      <h1>About Us</h1>
      <div class="container-text">
        <p>Euphoria Time についてだったり、サーバー情報だったり、メンバー情報だったり。</p>
      </div>
      
      <h2>About Euphoria Time</h2>
      <div class="container-text">
        <p>Euphoria Time は、同人ゲーム製作を目標にしているサークルです。<br>
          しかし、内容はゲーム制作に限っておらず、幅広くやりたいことをメンバーが公開しようとしています。</p>
      </div>
      
      <h3>Euphoria Time News</h3>
      <div class="container-text">
        <?php include 'php/about_news.php'; ?>
      </div>
     
      <h2>Member</h2>
      <div class="container-text">
        <p>Euphoria Time は二人のメンバーで活動をしています。</p>
      </div>
      
      <h3>Naba</h3>
      <table class="middle-table">
        <tr>
          <td style="width:200px;">
            <img src="img/naba.jpg" alt="pen" class="img-border shadow-box">
          </td>
          <td style="text-align: left">
            <p>このサイトの管理者であり、サークルの代表です。</p>
            <p>今は何もないサークルですが、<br>これからコンテンツを増やします。</p>
            <p>Contents : Music / Program / PSO2 / Minecraft / etc</p>
            <table class="profile-link">
              <tr><td>Twitter</td><td><a href="javascript:void(0);">-----</a></td></tr>
              <tr><td>Blog</td><td><a href="javascript:void(0);">-----</a></td></tr>
              <tr><td>CreoFuga</td><td><a href="javascript:void(0);">-----</a></td></tr>
              <tr><td>Github</td><td><a href="javascript:void(0);">-----</a></td></tr>
            </table>
          </td>
          <td class="twitter-box shadow-box">
            <a class="twitter-timeline" href="https://twitter.com/Naba0123" data-widget-id="547257130521083904" data-chrome="nofooter transparent">@Naba0123さんのツイート</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </td>
        </tr>
      </table>
      
      <h3>-----</h3>
      <table class="middle-table">
        <tr>
          <td style="width:200px;">
            <img src="https://placehold.jp/180x180.png" class="img-border shadow-box">
          </td>
          <td style="text-align: left">
            <p>Euphoria Time のもう一人のメンバー。</p>
            <p>Contents : Illust / Star / Penguin / Photo / etc</p>
            <table class="profile-link">
              <tr><td>Blog</td><td><a href="javascript:void(0)">-----</a></td></tr>
            </table>
          </td>
        </tr>
      </table>
      
    </div>
    
    <!-- footer -->
		<?php include '../share/php/footer.php' ?>
    
  </body>