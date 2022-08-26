<?php
return [
    '' => 'Controllers\HomeController@index',
    'about' => 'Controllers\AboutController@index',
    'contact' => 'Controllers\ContactController@index',

    'admin' => 'Controllers\Admin\DashboardController@index',
    'admin/brands' => 'Controllers\Admin\BrandController@index',
    'admin/brands/create' => 'Controllers\Admin\BrandController@create',
    'admin/brands/edit/{id}' => 'Controllers\Admin\BrandController@edit',
    'admin/brands/destroy/{id}' => 'Controllers\Admin\BrandController@destroy',
    'admin/brands/update' => 'Controllers\Admin\BrandController@update',
    'admin/brands/store' => 'Controllers\Admin\BrandController@store',

    'admin/categories' => 'Controllers\Admin\CategoryController@index',
    'admin/categories/create' => 'Controllers\Admin\CategoryController@create',
    'admin/categories/edit/{id}' => 'Controllers\Admin\CategoryController@edit',
    'admin/categories/destroy/{id}' => 'Controllers\Admin\CategoryController@destroy',
    'admin/categories/update' => 'Controllers\Admin\CategoryController@update',
    'admin/categories/store' => 'Controllers\Admin\CategoryController@store',
    
    'errors' => 'Controllers\ErrorController@index',
];