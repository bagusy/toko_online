<?php

/**
 * 
 */
class Ongkir extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
		$this->load->model('produk_model');
	}

	public function index()
	{
		// print_r($_POST);

		$item = $this->produk_model->getId($_POST['pid']);
		// print_r($item);

		$asal = $item[0]['asal_pengiriman'];
		$berat = $item[0]['berat']*$_POST['qty'];
		$dest = $_POST['dest'];

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "origin={$asal}&destination={$dest}&weight={$berat}&courier=jne",
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/x-www-form-urlencoded",
		    "key: b7d4d1cc6f3aa84dd816f63ed447a005"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  $ongkir = json_decode($response, true);

		  // print_r($ongkir);
		  foreach ($ongkir['rajaongkir']['results'][0]['costs'] as $k => $v) {
		  	
		  	if ($v['service'] == 'REG') {
		  		// echo $v['cost'][0]['value'];

		  		print '<div class="card mb-5">
                <div class="card-header font-weight-bold bg-white"><i class="fa fa-truck"></i> pengiriman</div>
	                <div class="card-body">
	                     <input type="radio" checked name="ongkir" value="'.$v['cost'][0]['value'].'"> '.$v['cost'][0]['value'].' - '.$v['service'].' ('.$v['cost'][0]['etd'].' hari)
	                </div>
                <div class="card-footer bg-white">

                </div>
            </div>
            </div>';
		  	}
		  }
		}
	}
}