<?php

echo "<p>データベースに接続されていません</p>";

return;

$host = 'hostname';
$username = 'user';
$password = 'password';

$show = 5;

$link = mysql_connect($host, $username, $password);
if (!$link) {
  die('データベースに接続失敗しました。'.mysql_error());
}

$db_selected = mysql_select_db('euphoria_time', $link);
if (!$db_selected){
  die('データベース選択失敗です。'.mysql_error());
}

mysql_query('SET NAMES utf8', $link);

$result = mysql_query("SELECT date, cont, 'HP' AS genre FROM euphoria_news UNION SELECT date, cont, 'PSO2' FROM pso2_news UNION SELECT uploaded, title, 'Music' FROM music ORDER BY date DESC;"); //DESCで降順
if (!$result) {
  die('クエリの取得に失敗しました。'.mysql_error());
}

$row = mysql_fetch_assoc($result);
$num_result = mysql_query('SELECT FOUND_ROWS()'); // 件数取得
list($num) = mysql_fetch_row($num_result);

echo "\n";
switch($num) {
  case "":
    echo "<p>データベースには何もありません。</p>\n";
    break;
  default:
    echo "<table class=\"news\" align=\"center\">\n";
    echo "  <thead>\n";
    if ($row['genre'] != "Music") {
      print "    <tr><th>" . date("Y / m / d",strtotime($row['date'])) . "</th><th class=\"news-group\">" . $row['genre'] . "</th><th>" . $row['cont'] . "</th></tr>\n";
    } else {
      print "    <tr><th>" . date("Y / m / d",strtotime($row['date'])) . "</th><th class=\"news-group\">" . $row['genre'] . "</th><th>「" . $row['cont'] . "」追加</th></tr>\n";
    }
    echo "  </thead>\n";
    echo "  <tbody>\n";
    if ($show > $num) {
      $show = $num;
    }
    for ($i = 1; $i < $show; $i++) {
      $row = mysql_fetch_assoc($result);
      if ($row['genre'] != "Music") {
        print "    <tr><td>" . date("Y / m / d",strtotime($row['date'])) . "</td><td class=\"news-group\">" . $row['genre'] . "</td><td>" . $row['cont'] . "</td></tr>\n";
      } else {
        print "    <tr><td>" . date("Y / m / d",strtotime($row['date'])) . "</td><td class=\"news-group\">" . $row['genre'] . "</td><td>「" . $row['cont'] . "」追加</td></tr>\n";
      }
    }
    echo "  </tbody>\n";
    echo "</table>\n";
}

$close_flag = mysql_close($link);
if (!$close_flag){
  print('<!-- 切断に失敗しました。-->');
}

?>