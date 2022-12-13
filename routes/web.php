<?php

Route::get('/', function () {
    return view('welcome');
});
// routes for unit_master.
Route::group(array('prefix' => 'unit_master'), function()
{
Route::get('/', 'Unit_masterController@index');
Route::get('/add-unit_master', 'Unit_masterController@add');
Route::post('/add-unit_master-post', 'Unit_masterController@addPost');
Route::get('/delete-unit_master/{id}', 'Unit_masterController@delete');
Route::get('/edit-unit_master/{id}', 'Unit_masterController@edit');
Route::post('/edit-unit_master-post', 'Unit_masterController@editPost');
Route::get('/change-status-unit_master/{id}', 'Unit_masterController@changeStatus');
Route::get('/view-unit_master/{id}', 'Unit_masterController@view');
});
// end of unit_master routes

// routes for branch_master.
Route::group(array('prefix' => 'branch_master'), function()
{
Route::get('/', 'Branch_masterController@index');
Route::get('/add-branch_master', 'Branch_masterController@add');
Route::post('/add-branch_master-post', 'Branch_masterController@addPost');
Route::get('/delete-branch_master/{id}', 'Branch_masterController@delete');
Route::get('/edit-branch_master/{id}', 'Branch_masterController@edit');
Route::post('/edit-branch_master-post', 'Branch_masterController@editPost');
Route::get('/change-status-branch_master/{id}', 'Branch_masterController@changeStatus');
Route::get('/view-branch_master/{id}', 'Branch_masterController@view');
});
// end of branch_master routes
// routes for requiredfor_master.
Route::group(array('prefix' => 'requiredfor_master'), function()
{
Route::get('/', 'Requiredfor_masterController@index');
Route::get('/add-requiredfor_master', 'Requiredfor_masterController@add');
Route::post('/add-requiredfor_master-post', 'Requiredfor_masterController@addPost');
Route::get('/delete-requiredfor_master/{id}', 'Requiredfor_masterController@delete');
Route::get('/edit-requiredfor_master/{id}', 'Requiredfor_masterController@edit');
Route::post('/edit-requiredfor_master-post', 'Requiredfor_masterController@editPost');
Route::get('/change-status-requiredfor_master/{id}', 'Requiredfor_masterController@changeStatus');
Route::get('/view-requiredfor_master/{id}', 'Requiredfor_masterController@view');
});
// end of requiredfor_master routes
// routes for material_master.
Route::group(array('prefix' => 'material_master'), function()
{
Route::get('/', 'Material_masterController@index');
Route::get('/add-material_master', 'Material_masterController@add');
Route::post('/add-material_master-post', 'Material_masterController@addPost');
Route::get('/delete-material_master/{id}', 'Material_masterController@delete');
Route::get('/edit-material_master/{id}', 'Material_masterController@edit');
Route::post('/edit-material_master-post', 'Material_masterController@editPost');
Route::get('/change-status-material_master/{id}', 'Material_masterController@changeStatus');
Route::get('/view-material_master/{id}', 'Material_masterController@view');
});
// end of material_master routes
// routes for purpose_master.
Route::group(array('prefix' => 'purpose_master'), function()
{
Route::get('/', 'Purpose_masterController@index');
Route::get('/add-purpose_master', 'Purpose_masterController@add');
Route::post('/add-purpose_master-post', 'Purpose_masterController@addPost');
Route::get('/delete-purpose_master/{id}', 'Purpose_masterController@delete');
Route::get('/edit-purpose_master/{id}', 'Purpose_masterController@edit');
Route::post('/edit-purpose_master-post', 'Purpose_masterController@editPost');
Route::get('/change-status-purpose_master/{id}', 'Purpose_masterController@changeStatus');
Route::get('/view-purpose_master/{id}', 'Purpose_masterController@view');
});

// end of purpose_master routes
// routes for inward_master.
Route::group(array('prefix' => 'inward_master'), function()
{
Route::get('/', 'Inward_masterController@index');
Route::get('/add-inward_master', 'Inward_masterController@add');
Route::post('/add-inward_master-post', 'Inward_masterController@addPost');
Route::get('/delete-inward_master/{id}', 'Inward_masterController@delete');
Route::get('/edit-inward_master/{id}', 'Inward_masterController@edit');
Route::post('/edit-inward_master-post', 'Inward_masterController@editPost');
Route::get('/change-status-inward_master/{id}', 'Inward_masterController@changeStatus');
Route::get('/view-inward_master/{id}', 'Inward_masterController@view');
});
// end of inward_master routes
// routes for received_master.
Route::group(array('prefix' => 'received_master'), function()
{
Route::get('/', 'received_masterController@index');
Route::get('/add-received_master', 'received_masterController@add');
Route::post('/add-received_master-post', 'received_masterController@addPost');
Route::get('/delete-received_master/{id}', 'received_masterController@delete');
Route::get('/edit-received_master/{id}', 'received_masterController@edit');
Route::post('/edit-received_master-post', 'received_masterController@editPost');
Route::get('/change-status-received_master/{id}', 'received_masterController@changeStatus');
Route::get('/view-received_master/{id}', 'received_masterController@view');
});

// end of received_master routes
// routes for return_master.
Route::group(array('prefix' => 'return_master'), function()
{
Route::get('/', 'Return_masterController@index');
Route::get('/add-return_master', 'Return_masterController@add');
Route::post('/add-return_master-post', 'Return_masterController@addPost');
Route::get('/delete-return_master/{id}', 'Return_masterController@delete');
Route::get('/edit-return_master/{id}', 'Return_masterController@edit');
Route::post('/edit-return_master-post', 'Return_masterController@editPost');
Route::get('/change-status-return_master/{id}', 'Return_masterController@changeStatus');
Route::get('/view-return_master/{id}', 'Return_masterController@view');
});
// end of return_master routes
// routes for outward_master.
Route::group(array('prefix' => 'outward_master'), function()
{
Route::get('/', 'Outward_masterController@index');
Route::post('/', 'Outward_masterController@index');
Route::get('/add-outward_master', 'Outward_masterController@add');
Route::post('/add-outward_master-post', 'Outward_masterController@addPost');
Route::get('/delete-outward_master/{id}', 'Outward_masterController@delete');
Route::get('/edit-outward_master/{id}', 'Outward_masterController@edit');
Route::post('/edit-outward_master-post', 'Outward_masterController@editPost');
Route::get('/change-status-outward_master/{id}', 'Outward_masterController@changeStatus');
Route::get('/view-outward_master/{id}', 'Outward_masterController@view');
});

// end of outward_master routes
// routes for issued_master.
Route::group(array('prefix' => 'issued_master'), function()
{
Route::get('/', 'Issued_masterController@index');
Route::get('/add-issued_master', 'Issued_masterController@add');
Route::post('/add-issued_master-post', 'Issued_masterController@addPost');
Route::get('/delete-issued_master/{id}', 'Issued_masterController@delete');
Route::get('/edit-issued_master/{id}', 'Issued_masterController@edit');
Route::post('/edit-issued_master-post', 'Issued_masterController@editPost');
Route::get('/change-status-issued_master/{id}', 'Issued_masterController@changeStatus');
Route::get('/view-issued_master/{id}', 'Issued_masterController@view');
});
// end of issued_master routes
// routes for usage_master.
Route::group(array('prefix' => 'usage_master'), function()
{
Route::get('/', 'Usage_masterController@index');
Route::get('/add-usage_master', 'Usage_masterController@add');
Route::post('/add-usage_master-post', 'Usage_masterController@addPost');
Route::get('/delete-usage_master/{id}', 'Usage_masterController@delete');
Route::get('/edit-usage_master/{id}', 'Usage_masterController@edit');
Route::post('/edit-usage_master-post', 'Usage_masterController@editPost');
Route::get('/change-status-usage_master/{id}', 'Usage_masterController@changeStatus');
Route::get('/view-usage_master/{id}', 'Usage_masterController@view');
});


// end of usage_master routes
// routes for Supplier.
Route::group(array('prefix' => 'Supplier'), function()
{
Route::get('/', 'SupplierController@index');
Route::get('/add-Supplier', 'SupplierController@add');
Route::post('/add-Supplier-post', 'SupplierController@addPost');
Route::get('/delete-Supplier/{id}', 'SupplierController@delete');
Route::get('/edit-Supplier/{id}', 'SupplierController@edit');
Route::post('/edit-Supplier-post', 'SupplierController@editPost');
Route::get('/change-status-Supplier/{id}', 'SupplierController@changeStatus');
Route::get('/view-Supplier/{id}', 'SupplierController@view');
});
// end of Supplier routes
// routes for list.
Route::group(array('prefix' => 'list'), function()
{
Route::get('/', 'ListController@index');
Route::get('/add-list', 'ListController@add');
Route::post('/add-list-post', 'ListController@addPost');
Route::get('/delete-list/{id}', 'ListController@delete');
Route::get('/edit-list/{id}', 'ListController@edit');
Route::post('/edit-list-post', 'ListController@editPost');
Route::get('/change-status-list/{id}', 'ListController@changeStatus');
Route::get('/view-list/{id}', 'ListController@view');
});
// end of list routes
// routes for Stock.
Route::group(array('prefix' => 'Stock'), function()
{
Route::get('/', 'StockController@index');
Route::get('/add-Stock', 'StockController@add');
Route::post('/add-Stock-post', 'StockController@addPost');
Route::get('/delete-Stock/{id}', 'StockController@delete');
Route::get('/edit-Stock/{id}', 'StockController@edit');
Route::post('/edit-Stock-post', 'StockController@editPost');
Route::get('/change-status-Stock/{id}', 'StockController@changeStatus');
Route::get('/view-Stock/{id}', 'StockController@view');
});
// end of Stock routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
