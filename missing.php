<!DOCTYPE html>
<html lang="ja">
  <head>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/head.php' ?>
		<title>Oops! - Euphoria Time</title>
    
    <style>
      table {
        width: 100%;
      }
      table td {
        text-align: center;
        vertical-align: middle;
      }
    </style>
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
      
      <h1>Missing Page</h1>
      <table>
        <tr>
          <td>
            <p>ページが見つかりません。</p>
            <p>入力したアドレスが正しいかどうか確認をしてください。</p>
          </td>
          <td style="height: 500px;">
            <img src="/share/img/missing.png" alt="">
          </td>
        </tr>
      </table>

    </div>
    
    <!-- footer -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/footer.php' ?>
    
  </body>