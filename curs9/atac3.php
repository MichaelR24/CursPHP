<?php
$url = 'http://localhost/mysite/post.php';
$fields = array(
    'prenume' => 'Atacator',
    'nume' => 'Test',
    'parola' => 'Atacator',
    'parola2' => 'Atacator',
    'email' => 'atacator@test.com',
    'zinastere' => '2018-01-11',
    'sex' => 'm',
    'telefon' => '0777777777'
);
$fields_string='';
//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);
//var_dump($result);
//close connection
curl_close($ch);
 ?>
<script type="text/javascript">location.href = 'https://google.ro';</script>
