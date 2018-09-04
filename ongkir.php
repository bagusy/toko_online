<?php
$link =mysqli_connect('localhost','root','');
mysqli_select_db ( $link , 'toko' );

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: b7d4d1cc6f3aa84dd816f63ed447a005"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  print_r( json_decode($response, true));
  $out = json_decode($response, true);
  
  foreach ($out['rajaongkir']['results'] as $key => $value) {
  	$sql = "INSERT INTO `city` SET `province_id`='{$value['province_id']}'
  	,`province`='{$value['province']}'
  	,`type`='{$value['type']}'
  	,`city_name`='{$value['city_name']}'
  	,`postal_code`='{$value['postal_code']}'";
  	mysqli_query($link,$sql);
  }
}