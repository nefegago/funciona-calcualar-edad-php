<?php
function anhos($date) {

     list($Y,$m,$d) = explode("-",$date);

     return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );

}

echo anhos('2016-01-01');
?>