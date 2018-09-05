<?php

/**
 * 
 */
class City_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function provinceDropdown()
	{

		$kat=$this->db->get('province');
		$k=$kat->result_array();

		$select = "<select name='province_id' class='addr-select form-control' data-section='province'>
		<option value='' >pilih provinsi</option>
		<option value=''>-------</option>
		";
		foreach ($k as $key => $value) {
		    // $sel = ( isset($id) && $id == $value['id']) ? "SELECTED": "";
			$select .= "<option value='{$value['id']}' >{$value['province']}</option>";

		}
		$select .= "</select>";

		return $select;
	}
	
	public function cityDropdown($id)
	{
		$this->db->where('province_id', $id);
		$kat=$this->db->get('city');
		$k=$kat->result_array();

		$select = "<select name='city_id' class='addr-select form-control' data-section='city'>
		<option value='' >pilih kota</option>
		<option value=''>-------</option>
		";
		foreach ($k as $key => $value) {
		    // $sel = ( isset($id) && $id == $value['id']) ? "SELECTED": "";
			$select .= "<option value='{$value['id']}' >{$value['type']} {$value['city_name']}</option>";

		}
		$select .= "</select>";

		return $select;
	}
	public function subdistrictDropdown($idd)
	{
		$this->db->where('city_id', $idd);
		$kat=$this->db->get('subdistrict');
		$k=$kat->result_array();

		$select = "<select name='subdistrict_id' class='addr-select form-control' data-section='subdistrict'>
		<option value='' >pilih kecamatana</option>
		<option value=''>-------</option>
		";
		foreach ($k as $key => $value) {
		    // $sel = ( isset($id) && $id == $value['id']) ? "SELECTED": "";
			$select .= "<option value='{$value['id']}' >{$value['subdistrict_name']}</option>";

		}
		$select .= "</select>";

		return $select;
	}
}