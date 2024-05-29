<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//  Frontend Routes 

$route['/']='HomeController/index';
$route['about']='HomeController/about_us';
$route['service']='HomeController/services';
$route['technology']='HomeController/technology';
$route['manufacturing']='HomeController/manufacturing';
$route['sales']='HomeController/sales';
$route['enquiry']='HomeController/enquiries';
$route['career']='HomeController/careers';
$route['faq']='HomeController/faqs';
$route['contact']='HomeController/contact_us';
$route['term']='HomeController/term_condition';
$route['policy']='HomeController/privacy';


// stores fronted form data

$route['save-enquiry']='HomeController/save_enquiry';
$route['save-contact']='HomeController/save_contact';


// Backend Routes 
$route['login']='LoginController/index';
$route['admin']='LoginController/index';
$route['auth'] = 'LoginController/auth';

$route['admin/dashboard']='AdminController/index';
$route['admin/about']='AdminController/about';

// profile
$route['admin/profile']='AdminController/profile';



// faq
$route['admin/add-faq']='AdminController/add_faq';
$route['admin/faq']='AdminController/faq';
$route['admin/save-faq']='AdminController/saveFaq';
$route['admin/deleteFaq']='AdminController/deleteFaq';

// slider
// $route['admin/slider']='AdminController/add_slider';
$route['admin/slider']='AdminController/slider';
$route['admin/add-slider']='AdminController/addSlider';
$route['admin/deleteSlider']='AdminController/deleteSlider';

// contact
$route['admin/contact']='AdminController/contact';
$route['admin/deleteContact']='AdminController/deleteContact';

// enquiry
$route['admin/enquiry']='AdminController/enquiry';
$route['admin/deleteEnquiry']='AdminController/deleteEnquiry';

// career
$route['admin/career']='AdminController/career';
$route['admin/deleteCareer']='AdminController/deleteCareer';


$route['admin/settings']='AdminController/settings';
$route['admin/edit-setting']='AdminController/edit_setting';
