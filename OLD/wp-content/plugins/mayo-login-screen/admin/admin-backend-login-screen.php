<div class="wrap">
			$import_option_obj = json_decode ( file_get_contents ( $_FILES['mayo_login_screen_import_file']['tmp_name'] ) );
			update_option('mayo_login_screen_option', $mayo_login_screen_option);