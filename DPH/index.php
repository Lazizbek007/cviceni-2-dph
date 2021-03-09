<?php
function getPriceDPH(float $PriceDPH, float $DPH){
      return $PriceDPH * $DPH;
}
echo "<br>";
echo getPriceDPH(658.89568,0.5688);
echo "<br>";
echo getPriceDPH(658.89568,0.4256);
echo"<br>";
echo getPriceDPH(658.89568,0.0256);
?>