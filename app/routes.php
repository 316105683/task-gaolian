<?php

/**
 * since gaolian<316105683@qq.com>
 * date 2017-2-28
 */

Route::get('/', array('as' => 'home_index', 'uses' => 'HomeController@index'));

Route::get('export', ['as' => 'export', 'uses' => 'ExportController@exportCVS']);


