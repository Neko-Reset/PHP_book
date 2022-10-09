ご予約日:
<?php
foreach ( $_POST[ "reserve" ] as $n ) {
  echo htmlspecialchars( $n, ENT_QUOTES ) . " "; 
}

echo "<br>";

// for文の場合
for (  $i=0; $i < count( $_POST[ "reserve" ] ); $i++ ) {
  echo htmlspecialchars( $n, ENT_QUOTES ) . "<br>"; 
}

?>
