<?php

use Illuminate\Support\Facades\Route;
use App\contents;
use App\about;
use App\services;
use App\features;
use App\portfolio;
use App\team;
use App\qestion;
use App\contact;
use App\contact_detail;
use App\footar;
use App\footar_mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
	return view('welcome');
});*/
//call first welcome page
//this files is for calling dyanamic template  
Route::get('/','template@showw');




//call admin welcome page
Route::get('admin/welcome', function () {
	return view('admin.welcome');
});
//go in add_header page
Route::get('admin/add_header', function () {
	return view('admin.add_header');
});
//go in show_header page
Route::get('admin/show_header', function () {
	return view('admin.show_header');
});
//go in admin/add_about page
Route::get('admin/add_about', function () {
	return view('admin.add_about');
});
Route::get('admin/view_about', function () {
	return view('admin.view_about');
});
Route::get('admin/add_services', function () {
	return view('admin.add_services');
});

Route::get('admin/view_services', function () {
	return view('admin.view_services');
});

Route::get('admin/add_features', function () {
	return view('admin.add_features');
});
Route::get('admin/view_features', function () {
	return view('admin.view_features');
});
Route::get('admin/add_portfolio', function () {
	return view('admin.add_portfolio');
});
Route::get('admin/view_portfolio', function () {
	return view('admin.view_portfolio');
});
Route::get('admin/add_team', function () {
	return view('admin.add_team');
});
Route::get('admin/add_qes', function () {
	return view('admin.add_qes');
});
Route::get('admin/add_contact', function () {
	return view('admin.add_contact');
});
Route::get('admin/view_contact',function(){
	return view('admin.view_contact');
});
Route::get('admin/view_contact_form',function(){
	return view('admin.view_contact_form');
});
Route::get('admin/add_footar',function(){
	return view('admin.add_footar');
});
Route::get('admin/view_footar',function(){
	return view('admin.view_footar');
});

Route::get('admin/view_footar_mail',function(){
	return view('admin.view_footar_mail');
});

//in under file all are route for connect controllers file 

//add data headerfile
Route::view('form','add_header');
Route::post('submit','add_details@add')->name('submit');

// add data in add_about file
Route::view('form2','add_about');

Route::post('submitt','add_details@add_about')->name('submitt');

Route::post('send','add_details@add_services')->name('send');

Route::post('sendd','add_details@add_features')->name('sendd');

Route::post('upload','add_details@add_portfolio')->name('upload');

Route::post('senddata','add_details@add_team')->name('senddata');

Route::post('sub','add_details@add_qestion')->name('sub');

Route::post('form2','add_details@add_contact_form')->name('form2');

Route::post('form3','add_details@add_contact')->name('form3');

Route::post('form4','add_details@add_footar')->name('form4');

Route::post('mail','add_details@add_footar_mail')->name('mail');

//select data header file
Route::get('admin/show_header','add_details@show');
//select data about file
Route::get('admin/view_about','add_details@show_about');
//select data services
Route::get('admin/view_services','add_details@show_services');
//
Route::get('admin/view_features','add_details@show_features');
//
Route::get('admin/view_portfolio','add_details@show_portfolio');
//
Route::get('admin/view_team','add_details@show_team');
//
Route::get('admin/view_qes','add_details@show_qes');
//
Route::get('admin/view_contact_form','add_details@show_contact_form');
//
Route::get('admin/view_contact','add_details@show_contact');
//
Route::get('admin/view_footar','add_details@show_footar');
//
Route::get('admin/view_footar_mail','add_details@show_footar_mail');


