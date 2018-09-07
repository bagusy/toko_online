<?php
	/**
	 * 
	 */
	class Setting_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		public function getId($id)
		{
			// echo $id;
			$this->db->where('id_setting', $id);
			$item = $this->db->get('setting');
			
			return $item->result_array();
		}

		public function isExist($name)
		{
			$item = $this->db->get('setting');
			
			$setting = $item->result_array();
			$n = 0;
			foreach ($setting as $key => $value) {
				if ($value['name'] == $name) {
					$n = $n+1;
				} else {
					$n = 0;
				}
			}

			if ($n > 0) {
				return true;
			} else {
				return false;
			}
		}

		public static function timeZone()
	    {
	        $timezones = DateTimeZone::listAbbreviations();
	//        $timezones = DateTimeZone::listAbbreviations(DateTimeZone::ALL);
	        $cities = array();
	        foreach ($timezones as $key => $zones) {
	            foreach ($zones as $id => $zone) {
	                //print_r($zone);
	                /*
	                 * Only get timezones explicitely not part of "Others".
	                 * @see http://www.php.net/manual/en/timezones.others.php
	                 */
	                if (preg_match('/^(America|Antartica|Arctic|Asia|Atlantic|Europe|Indian|Pacific)\//', $zone['timezone_id'])
	                    && $zone['timezone_id']) {
	                    $cities[$zone['timezone_id']][] = $key;
	                }
	            }
	        }
	        // For each city, have a comma separated list of all possible timezones for that city.
	        foreach ($cities as $key => $value) {
	            $cities[$key] = implode(', ', $value);
	        }
	        // Only keep one city (the first and also most important) for each set of possibilities.
	        $cities = array_unique($cities);
	        // Sort by area/city name.
	        ksort($cities);
	        return $cities;
	    }
	    public static function optTimeZone($val = '')
	    {
	        $tz = self::timeZone();
	        $opt = '';
	        foreach ($tz as $t => $z) {
	            ($t == $val) ? $sel = 'SELECTED' : $sel = '';
	            $opt .= "<option value=\"{$t}\" $sel>{$t}</option>";
	        }
	        return $opt;
	    }

	    public function getName($name)
	    {
	    	$item = $this->db->get('setting');
			
			$setting = $item->result_array();
			// print_r($setting);
			foreach ($setting as $key => $value) {
				if ($value['name'] == $name) {
					return $value['value'];
				} 
			}
	    }



	}