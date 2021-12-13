<?php
  function day_diff($date1, $date2) {
      // 日付をUNIXタイムスタンプに変換
      $timestamp1 = strtotime($date1);
      $timestamp2 = strtotime($date2);
      // 何秒離れているかを計算
      $seconddiff = abs($timestamp2 - $timestamp1);
      // 日数に変換
      $daydiff = $seconddiff / (60 * 60 * 24);
      // 戻り値
      return $daydiff;
  }

  print '<p>今日　' . date('Y / m / d') . '.</p>';
  print '<p>放送開始　2014 / 04 / 10.</p>';
  $next_month = date("m", strtotime("Thursday"));
  $next_day = date("d", strtotime("Thursday"));
  $next_story = (int)(day_diff(date("Y-m-d", strtotime("Thursday")), '2014-04-10')/7+1);
  print '<p>次回　' . date("Y / m / d", strtotime("Thursday")) . ' <strong>（ 第' . $next_story . '羽 ）</strong>.</p>';
?>