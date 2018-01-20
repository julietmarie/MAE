<?php
/*
* 2018-01-20 jmk
*
*/

function fnSoma($arr){

  $soma = 0;
  foreach($arr as $value){
    $soma += $value;
  }
  return $soma;
}

function fnMedia($arr){

  $soma   = fnSoma($arr);
  $n      = count($arr);
  $media  = $soma / $n;

  return $media;
}

function fnParte($arr,$parte,$todo){
  sort($arr);
  $n  = count($arr);
  $p  = $parte / $todo;
  $i  = $n * $p;

  if ($n%2 == 0) {
    $a        = $arr[$i] + $arr[$i-1];
    $mediana  = $a / 2;
  } else {
    $mediana  = $arr[$i];
  }

  return $mediana;
}

function fnMediana($arr){
  //alias
  return fnParte($arr,2,4);
}

function fnQuartis($arr){
  //alias
  for($i=1;$i<4;$i++){
    $arr_q[] = fnParte($arr,$i,4);
  }
  return $arr_q;
}

?>
