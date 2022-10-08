<!-- 複数選択可能なチェックボックス -->
<form action = "index.php" method = "POST">
  <p>ご予約希望日(複数選択可)</p>
  複数のcheckboxを作りたい場合nameに[]を入れる
  <p>
    <input type="checkbox" name = "reserve[]" value = "1/1">1/1<br>
    <input type="checkbox" name = "reserve[]" value = "1/2">1/2<br>
    <input type="checkbox" name = "reserve[]" value = "1/3">1/3<br>
  </p>
  <input type="submit" value = "送信">
</form>
