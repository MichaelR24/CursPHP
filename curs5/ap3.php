<?php
$model['auto'] =array(
        "Fiat"=> array('model'=>'500', 'culoare'=>'rad', 'an'=>2020),
        "Alfa"=>array('model'=>'147', 'culoare'=>'rad', 'an'=>2020),
        "Lancia"=>"Delta", 
        "Ferrari"=>"Testarossa", 
        "Maserati"=>"biturbo"
    );
unset($model['auto']['Ferrari']);
$model['auto']['Fiat'] ='500XL';

//echo count($model);
// echo "<pre>";
// var_dump($model);
// var_export($model);
// print_r($model);
//met 1

/*foreach($model as  $masini):?>
    <?php foreach ($masini as $key=> $masina):?>
        <p> Marca este: <?php echo $key;?> modelul este :  <?php echo $masina;?></p>
    <?php endforeach;?>
<?php endforeach;?>
*/

$arr = [
    'ar1'=>array(1,2,3,4,5),
    'ar2'=>array(6,7,8,9),
    'ar3'=>array(10,11,12,13,14,15),
    16,17,18,19,20
]; 
//  $arr = array();
if(isset($arr) && !empty($arr)){
    foreach($arr as $a){
        if(is_array($a)){
            foreach ($a as $nr){
                echo $nr. ' ';
            }
        }
        else{
                echo $a. ' ';
        }
    }
}