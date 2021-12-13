<!-- footer -->
<div id="footer">
	<p>2012-2014 Euphoria Time. Designed by <a href="javascript:void(0)">Naba</a>.</p>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

<!-- More Button -->
<script type="text/javascript">
  // http://half-a.net/labo/screen.html
  function more_open(geID, geIDB1, geIDB2) { 
  document.getElementById(geID).style.display = "block"; //文表示
  document.getElementById(geIDB1).style.display = "none"; //ボタン1非表示
  document.getElementById(geIDB2).style.display = "inline"; //ボタン2表示
  }
  function more_close(geID, geIDB1, geIDB2) {
  document.getElementById(geID).style.display = "none"; //文非表示
  document.getElementById(geIDB1).style.display = "inline"; //ボタン1表示
  document.getElementById(geIDB2).style.display = "none"; //ボタン2非表示
  }
</script>