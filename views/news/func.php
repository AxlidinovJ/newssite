<?php
function noimg($contents){
          $ex = explode('<img src="',$contents);
          $ex1 = explode('" />',$ex[1]);
          $ex2 = $ex1[0];
          $qidr = '<img src="'.$ex2.'" />';
          $content =  str_replace($qidr,"",$contents);
          $content = str_replace(
        ["<div ","<a ","</div>","</a>"],
        ["<p","<p ","</p>","</p>"],
        $content
    );

          return $content;
}

// function yoqotteg($contents){
//     $cont = str_replace(
//         ["<div ","<a ","</div>","</a>"],
//         ["<p","<p ","</p>","</p>"],
//         $contents
//     );
//     return $cont;
// }


?>
