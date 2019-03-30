<?php



	Route::prefix('api')->group(function(){




	// Board api routes
		//
		Route::post('/board/member/settings/theme-select', 'Board\MemberSettingsController@post_theme');

		Route::post('/board/member/settings/language-select', 'Board\MemberSettingsController@post_language');

		Route::post('/board/member/settings/show-web', 'Board\MemberSettingsController@update_contact_show_web_settings');

	});