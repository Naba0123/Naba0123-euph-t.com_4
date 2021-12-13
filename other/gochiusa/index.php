<!DOCTYPE html>
<html lang="ja">
  <head>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/head.php' ?>
		<title>Euphoria Time</title>
    <style>
      #container {
        height: auto;
      }
      #gochiusa {
        margin: 50px 0px;
        text-align: center;
        font-size: x-large;
      }
      .img-text {
        font-size: small;
      }
    </style>
  </head>
  <body>
    
    <!-- header -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/header.php' ?>
    
    <!-- container -->
      
      <div id="gochiusa">
        <p style="margin-bottom: 50px;"><a href="http://www.gochiusa.com/" target="_blank" class="link" style="font-size: x-large;">ご注文はうさぎですか？ - Is the order a rabbit?</a></p>
        <img src="https://placehold.jp/360x180.png" alt="gochiusa" class="img-border">
        <p class="img-text">©Koi・芳文社／ご注文は製作委員会ですか？</p>
        <p style="font-size: large; margin-bottom: 50px;">Euphoria Timeは、「ご注文はうさぎですか？」を心より応援しています。</p>
        <?php include 'gochiusa.php' ?>
        <?php
          print "<a href=\"https://twitter.com/intent/tweet?button_hashtag=next_gochiusa&text=%E6%AC%A1%E5%9B%9E%E3%81%AE%E3%81%94%E3%81%A1%E3%81%86%E3%81%95%E3%81%AF" . $next_month .  "%E6%9C%88" . $next_day . "%E6%97%A5%E3%81%A7%E7%AC%AC" . $next_story . "%E7%BE%BD%E3%81%A7%E3%81%99%E3%80%82\" class=\"twitter-hashtag-button\" data-size=\"large\" data-url=\"http://example.com/\">Tweet #next_gochiusa</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>"
        ?>
        
      </div>
      
    
    <!-- footer -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/share/php/footer.php' ?>
    
  </body>
  
  
</html>