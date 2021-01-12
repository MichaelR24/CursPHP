<?php
$sir ='Lorem ipsum dolor sit amet consectetur, adipisicing 
elit. Laudantium dicta distinctio facere, perferendis pariatur 
natus libero, fuga voluptatibus est consequatur quaerat quas, 
consequuntur magnam assumenda veniam. Facere tenetur laboriosam 
repellendus!';

echo strlen($sir);
echo "<br>";
echo str_word_count($sir);
$arr = str_word_count($sir,2);
print_r($arr);