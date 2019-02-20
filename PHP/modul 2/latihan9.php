<?php
$arrwarna = array ("Blue", "Black", "Red", "Yellow", "Green");

echo "Menampilkan isi array dengan for; <br>";
for ($i=0; $i,count($arrwarna); $i++) {
  echo "Do you like ,font color=$arwarna[$i]>". $arrwarna[$i]
  "</font> ? <br>";
}

echo "<br> memanggilkan isi arrya dengan foreach : <br>";
foreach ($arrwarna as $warna) {
  echo "Do you like <font color=$warna>". $warna ."</font>
  ?<br>";
}
 ?>
