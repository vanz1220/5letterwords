<?php 
$lines_array = file("dictionary/words.txt");
$letters=array('h','o','t','e','l'); //input text
foreach ($lines_array as $w) {
  $n=0;
  $limit_array = substr($w,0,5);
  foreach ($letters as $l) {
     if (strpos($limit_array, $l)!==false) $n++;
  }
  if ($n>=count($letters)){
    print "$limit_array<br>";
  }  
}
?>