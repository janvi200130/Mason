<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//  Frontend Routes 

$route['/']='HomeController/index';
$route['about']='HomeController/about_us';
$route['service']='HomeController/services';
$route['enquiry']='HomeController/enquiries';
$route['career']='HomeController/careers';
$route['faq']='HomeController/faqs';
$route['contact']='HomeController/contact_us';
$route['term']='HomeController/term_condition';
$route['policy']='HomeController/privacy';


// Backend Routes 
$route['login']='AdminController/login';
$route['admin']='AdminController/index';
$route['admin/about']='AdminController/about';

// contact
$route['admin/contact']='AdminController/contact';
$route['admin/deleteContact']='AdminController/deleteContact';

// enquiry
$route['admin/enquiry']='AdminController/enquiry';
$route['admin/deleteEnquiry']='AdminController/deleteEnquiry';

// career
$route['admin/career']='AdminController/career';
$route['admin/deleteCareer']='AdminController/deleteCareer';

$route['admin']='AdminController/index';
$route['admin']='AdminController/index';
$route['admin']='AdminController/index';

