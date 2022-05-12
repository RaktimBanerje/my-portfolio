<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route["register"]["POST"] = "UserController/register";
$route["login"]["POST"] = "UserController/login";
$route["logout"]["GET"] = "UserController/logout";

$route["portfolio"]["GET"] = "PortfolioController";
$route["portfolio"]["POST"] = "PortfolioController/store";
$route["portfolio/delete/(:any)"]["GET"] = "PortfolioController/delete/$1";
$route["api/portfolio"]["GET"] = "PortfolioController/get_all";

$route["blog"]["GET"] = "BlogController";
$route["blog"]["POST"] = "BlogController/store";
$route["blog/delete/(:any)"]["GET"] = "BlogController/delete/$1";
$route["api/blog"]["GET"] = "BlogController/get_all";

$route["category"]["POST"] = "CategoryController/store";
$route["category/delete/(:any)"]["GET"] = "CategoryController/delete/$1";
$route["api/category"]["GET"] = "CategoryController/get_all";

$route["skill"]["GET"] = "SkillController";
$route["skill"]["POST"] = "SkillController/store";
$route["skill/delete/(:any)"]["GET"] = "SkillController/delete/$1";
$route["api/skill"]["GET"] = "SkillController/get_all";

$route["service"]["GET"] = "ServiceController";
$route["service"]["POST"] = "ServiceController/store";
$route["service/delete/(:any)"]["GET"] = "ServiceController/delete/$1";
$route["api/service"]["GET"] = "ServiceController/get_all";

$route["message"]["GET"] = "MessageController";
$route["api/message"]["POST"] = "MessageController/store";
$route["message/delete/(:any)"]["GET"] = "MessageController/delete/$1";

$route["subscribe"]["GET"] = "SubscribeController";
$route["api/subscribe"]["POST"] = "SubscribeController/store";
$route["subscribe/delete/(:any)"]["GET"] = "SubscribeController/delete/$1";

$route["export-csv"] = "CSVExportController";