<?php

/**
* 
*/
class Kategori_model extends CI_Model
{
	public function getName($id='')
	{
		$this->db->where('id_kategori', $id);
		$kat=$this->db->get('kategori');
		$k=$kat->result_array();
		if (count($k) > 0) {
			$name=$k[0]['name'];
		}else{
			$name='';
		}

		return $name;

	}



	public function dropdown($id_kategori="0", $name = 'kategori' )
	{
		$this->db->where('parent', $id_kategori);
		$kat=$this->db->get('kategori');
		$k=$kat->result_array();

		$select = "<select name='{$name}' class='form-control'>
		<option value='' >pilih kategori</option>
		<option value=''>-------</option>
		";
		foreach ($k as $key => $value) {
		    $sel = ( isset($id_kategori) && $id_kategori == $value['id_kategori']) ? "SELECTED": "";
			$select .= "<option value='{$value['id_kategori']}' {$sel}>{$value['name']}</option>";
			$this->db->where('parent', $value['id_kategori']);
			$kat2=$this->db->get('kategori');
			$k2=$kat2->result_array();
			foreach ($k2 as $key2 => $value2) {
				$select .= "<option value='{$value2['id_kategori']}'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$value2['name']}</option>";
			}
		}
		$select .= "</select>";

		return $select;
	}
}