<?php

Route::get('/', 'GridController@index')->name('grid.index');


Route::group(['prefix' => 'employees/'], function () {
    Route::get('', 'EmployeeController@index')->name('employees.index');
    Route::get('create', 'EmployeeController@create')->name('employees.create');
    Route::get('{employee}/edit', 'EmployeeController@edit')->name('employees.edit');
    Route::post('store', 'EmployeeController@store')->name('employees.store');
    Route::put('{employee}/update', 'EmployeeController@update')->name('employees.update');
    Route::delete('{employee}/destroy', 'EmployeeController@destroy')->name('employees.destroy');
});

Route::group(['prefix' => 'departments/'], function () {
    Route::get('', 'DepartmentController@index')->name('departments.index');
    Route::get('create', 'DepartmentController@create')->name('departments.create');
    Route::get('{department}/edit', 'DepartmentController@edit')->name('departments.edit');
    Route::post('store', 'DepartmentController@store')->name('departments.store');
    Route::put('{department}/update', 'DepartmentController@update')->name('departments.update');
    Route::delete('{department}/destroy', 'DepartmentController@destroy')->name('departments.destroy');
});
