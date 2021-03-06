<?php
namespace Opencart\Application\Model\Setting;
class Module extends \Opencart\System\Engine\Model {
	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `module_id` = '" . (int)$module_id . "'");
		
		if ($query->row) {
			return json_decode($query->row['setting'], true);
		} else {
			return [];
		}
	}		
}
