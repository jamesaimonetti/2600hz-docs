<?php

class Nav_Plugin {

	public function before_read_file_meta(&$headers) {
		$headers['section'] = 'Section';
		$headers['main_nav'] = 'Main_Nav';
	}

	public function get_page_data(&$data, $page_meta)
	{
		$data['section'] = $page_meta['section'];
		$data['main_nav'] = $page_meta['main_nav'];
	}
	
	
}

