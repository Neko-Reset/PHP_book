<table>
  <?php
  // 長いテーブル場合、背景色を一行ごとに変えて見やすくする
  // 一行ごとにテーブルセルの色を変える剰余残

  for ( $i = 1; $i <= 10; $i++ ) {
    if ( $i % 2 ) {
      echo '<tr style = "background-color: #ccc">'; //シングルクオーテーションじゃないとだめ
    } else {
      echo "<tr>";
      }
    echo "<td>" .$i . "行目</td>";
    echo "</tr>";
  }
  ?>
</table>
