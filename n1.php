<?php
function litres($t) {
  $lit = $t * 0.5;
    return floor($lit);
  }

echo litres(6);
?>