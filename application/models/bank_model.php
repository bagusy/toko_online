<?php
/**
 * 
 */
class bank_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
	public function getId($id)
	{
		echo $id;
		$this->db->where('id_bank', $id);
		$item = $this->db->get('bank');
		
		return $item->result_array();
	}
	public function dropdown()
	{
		$q = $this->db->get('bank');
		$bank = $q->result_array();
		$select = "<select name='id_bank' class='form-control'>
		<option value='' >pilih bank</option>
		<option value=''>-------</option>
		";
		foreach ($bank as $key => $value) {
			$select .= "<option value='{$value['id_bank']}' >{$value['bank']}</option>";
		}
		$select .= "</select>";
		return $select;
	}
	
}