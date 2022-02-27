<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'User_Registers_Controller'; ///'welcome ka first run name'

$route['user_registers'] = 'User_Registers_Controller';

$route['user_registers/add'] = 'User_Registers_Controller/add_user_register';

$route['user_details'] = 'User_Details_Controller';

$route['user_details/add'] = 'User_Details_Controller/add_user_detail';

$route['user_skills'] = 'User_Skills_Controller';

$route['user_skills/add'] = 'User_Skills_Controller/add_user_skill';

$route['user_experiences'] = 'User_Experiences_Controller';

$route['user_experiences/add'] = 'User_Experiences_Controller/add_user_experience';

$route['user_educations'] = 'User_Educations_Controller';

$route['user_educations/add'] = 'User_Educations_Controller/add_user_education';

$route['user_projects'] = 'User_Projects_Controller';

$route['user_projects/add'] = 'User_Projects_Controller/add_user_project';

$route['user_languages'] = 'User_Languages_Controller';

$route['user_languages/add'] = 'User_Languages_Controller/add_user_language';


$route['detail'] = 'All_Details_Controller';
$route['all_detail/:num'] = 'All_Details_Controller/all_detail';



//$route['expense_categories/delete'] = 'Expense_Categories_Controller/delete_expense_category';

//$route['expense_categories/get_expense_category'] = 'Expense_Categories_Controller/get_category';

//$route['expense_categories/update'] = 'Expense_Categories_Controller/update_expense_category';

//$route['expense/add'] = 'Expense_Controller/add_expense';

//$route['expense/delete'] = 'Expense_Controller/delete_expense';

//$route['expenselist'] = 'Expense_List_Controller';

//$route['expenselist/search'] = 'Expense_List_Controller/search_by_date';


//$route['expense'] = 'Expense_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
