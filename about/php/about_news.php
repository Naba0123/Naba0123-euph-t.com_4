<?php

echo "<p>データベースに接続されていません</p>";

return;

$host = 'hostname';
$username = 'user';
$password = 'password';

$show = 4;

$link = mysql_connect($host, $username, $password);
if (!$link) {
  die('データベースに接続失敗しました。'.mysql_error());
}

$db_selected = mysql_select_db('euphoria_time', $link);
if (!$db_selected){
  die('データベース選択失敗です。'.mysql_error());
}

mysql_query('SET NAMES utf8', $link);

$result = mysql_query("SELECT SQL_CALC_FOUND_ROWS * FROM euphoria_news ORDER BY date DESC"); //DESCで降順
if (!$result) {
  die('クエリーが失敗しました。'.mysql_error());
}

$num_result = mysql_query('SELECT FOUND_ROWS()'); // 件数取得
list($num) = mysql_fetch_row($num_result);

echo "\n";
switch($num) {
  case "":
    echo "<!-- データベースには何もありません。-->\n";
    break;
  default:
    if ($show > $num) {
      $show = $num;
    }
    echo "<table id=\"news\">\n";
    for ($i = 0; $i < $show; $i++) {
      $row = mysql_fetch_assoc($result);
      print "    <tr><td>" . date("Y / m / d",strtotime($row['date'])) . "</td><td>" . $row['cont'] . "</td></tr>\n";
    }
    echo "</table>\n";
}

$close_flag = mysql_close($link);
if (!$close_flag){
  print('<!-- 切断に失敗しました。-->');
}

?>