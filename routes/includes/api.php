<?php



	Route::prefix('api')->group(function(){

		Route::post('/board/member/settings/theme-select', 'Board\MemberSettingsController@post_theme');

		Route::post('/board/member/settings/language-select', 'Board\MemberSettingsController@post_language');

	});