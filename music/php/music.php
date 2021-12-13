<?php

echo "<p>データベースに接続されていません</p>";

return;

$host = 'hostname';
$username = 'user';
$password = 'password';

$show = 2;

// Music Container
function musicContainer($row) {
  echo "<table class=\"music\">\n  <tr><td>\n";
  echo "    <p class=\"music-title\">" . $row['title'] . "</p>\n";
  echo "    <p class=\"music-created\">Created " . date("Y/m",strtotime($row['created'])) . "</p>\n";
  echo "    <table class=\"music-by\">\n";
  echo "      <tr><td>Music</td><td>:</td><td>" . $row['music-by'] . "</td></tr>\n";
  if ( isset($row['lyric-by']) ) {
    echo "      <tr><td>Liric</td><td>:</td><td>" . $row['lyric-by'] . "</td></tr>\n";
  }
  if ( isset($row['vocal-by']) ) {
    echo "      <tr><td>Vocal</td><td>:</td><td>" . $row['vocal-by'] . "</td></tr>\n";
  }
  echo "    </table>\n";
  echo "    <div class=\"music-info\">\n";
  $cont = "cont/" . $row['cont'] . ".html";
  include $cont;
  echo "    </div>\n";
  echo "  </td><td class=\"player\">\n";
  echo "    <p class=\"music-upload\">Uploaded " . date("Y/m/d",strtotime($row['uploaded'])) . "</p>\n";
  echo "    <iframe width=\"100%\" height=\"120\" scrolling=\"no\" frameborder=\"no\" src=\"https://creofuga.net/audios/player?id=" . $row['creofuga-id'] . "\" class=\"shadow-box\"></iframe>";
  echo "  </td></tr>\n</table>\n";
}


$link = mysql_connect($host, $username, $password);
if (!$link) {
  die('データベースに接続失敗しました。'.mysql_error());
}

$db_selected = mysql_select_db('euphoria_time', $link);
if (!$db_selected){
  die('データベース選択失敗です。'.mysql_error());
}

mysql_query('SET NAMES utf8', $link);

// Genreの抜き出し
$genre_result = mysql_query('SELECT DISTINCT music.genre FROM music INNER JOIN music_order ON music.genre = music_order.genre ORDER BY genre_order;');
if (!$genre_result) {
  die('クエリーが失敗しました。'.mysql_error());
}
$num_genre_result = mysql_query('SELECT FOUND_ROWS()'); // Genre件数取得
list($num_genre) = mysql_fetch_row($num_genre_result);


echo "\n";
for ($g = 0; $g < $num_genre; $g++) {
  $genre_row = mysql_fetch_assoc($genre_result);
  echo "<h2>" . $genre_row['genre'] . " Library</h2>\n";
  
  $result = mysql_query('SELECT SQL_CALC_FOUND_ROWS * FROM music WHERE genre=\'' . $genre_row['genre'] . '\' ORDER BY uploaded DESC'); //DESCで降順
  if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
  }

  // $row = mysql_fetch_assoc($result);
  $num_result = mysql_query('SELECT FOUND_ROWS()'); // 件数取得
  list($num) = mysql_fetch_row($num_result);

  echo "\n";
  switch($num) {
    case "":
      echo "<!-- データベースには何もありません。-->\n";
      break;
    default:
      if ($num <= $show) {
        $show = $num;
      }
      for ($i = 0; $i < $show; $i++) {
        $row = mysql_fetch_assoc($result);
        musicContainer($row);
      }
      if ($num > $show) {
        echo "<div class=\"more-music-link\">\n";
        echo "  <a href=\"JavaScript:more_open('" . $genre_row['genre'] . "','" . $genre_row['genre'] . "1','" . $genre_row['genre'] . "2');\" id=\"" . $genre_row['genre'] . "1\" target=\"_blank\">▼ More " . $genre_row['genre'] . " Music</a>\n";
        echo "  <a href=\"JavaScript:more_close('" . $genre_row['genre'] . "','" . $genre_row['genre'] . "1','" . $genre_row['genre'] . "2');\" id=\"" . $genre_row['genre'] . "2\" style=\"display:none;\" target=\"_blank\">▲ Close " . $genre_row['genre'] . " Music</a>\n";
        echo "</div>\n";
        echo "<div class=\"more-music\" id=\"" . $genre_row['genre'] . "\">\n";
        for ($i = $show; $i < $num; $i++) {
          $row = mysql_fetch_assoc($result);
          musicContainer($row);
        }
        echo "</div>\n";
      }
  }
}

$close_flag = mysql_close($link);
if (!$close_flag){
  print('<!-- 切断に失敗しました。-->');
}

?>