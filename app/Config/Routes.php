<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes 
 */
$routes->get('/dashboard', 'Dashboard::index');

//user
$routes->get('/dashboard/all_user', 'Alluser::index');
$routes->get('/dashboard/delete/(:num)', 'Alluser::delete/$1');
$routes->get( '/dashboard/add_user', 'Adduser::index');
$routes->post('/dashboard/add_user', 'Adduser::index');
// $routes->match(['get', 'put'], '/dashboard/add_user', 'Adduser::index');
$routes->get( '/dashboard/edit/(:num)', 'UpdateUser::edit/$1');
$routes->post( '/dashboard/update_user/(:num)', 'UpdateUser::index/$1');

//Role
$routes->get( '/dashboard/all_role', 'RoleController::index');
$routes->get( '/dashboard/add_role', 'RoleController::addrole');
$routes->post('/dashboard/add_role', 'RoleController::addrole');
$routes->get( '/dashboard/edit_role/(:num)', 'RoleController::edit/$1');
$routes->post( '/dashboard/update_role/(:num)', 'RoleController::update/$1');
$routes->get( '/dashboard/all_role/delete/(:num)', 'RoleController::delete/$1');

//Course
$routes->get('/dashboard/all_course', 'CourseController::index');
$routes->get('/dashboard/add_course', 'CourseController::addcourse');
$routes->post('/dashboard/add_course', 'CourseController::addcourse');
$routes->get( '/dashboard/edit_course/(:num)', 'CourseController::edit/$1');
$routes->post( '/dashboard/update_course/(:num)', 'CourseController::update/$1');
$routes->get('/dashboard/add_course/delete/(:num)', 'CourseController::delete/$1');

//Batch
$routes->get('/dashboard/all_batch', 'BatchController::index');
$routes->get('/dashboard/add_batch', 'BatchController::addbatch');
$routes->post('/dashboard/add_batch', 'BatchController::addbatch');
$routes->get('/dashboard/edit_batch/(:num)', 'BatchController::edit/$1');
$routes->post('/dashboard/update_batch/(:num)', 'BatchController::update/$1');
$routes->get('/dashboard/delete_batch/(:num)', 'BatchController::delete/$1');

//class
$routes->get('/dashboard/all_class','ClassController::index');
$routes->get('/dashboard/add_class','ClassController::addclass');
$routes->post('/dashboard/add_class','ClassController::addclass');
$routes->get('/dashboard/edit_class/(:num)','ClassController::edit/$1');
$routes->post('/dashboard/update_class/(:num)','ClassController::update/$1');
$routes->get('/dashboard/delete_class/(:num)','ClassController::delete/$1');

//Branch
$routes->get('/dashboard/all_branch','BranchController::index');
$routes->get('/dashboard/add_branch','BranchController::addbranch');
$routes->post('/dashboard/add_branch','BranchController::addbranch');
$routes->get('/dashboard/edit_branch/(:num)','BranchController::edit/$1');
$routes->post('/dashboard/update_branch/(:num)','BranchController::update/$1');
$routes->get('/dashboard/delete_branch/(:num)','BranchController::delete/$1');

//Notice
$routes->get('/dashboard/all_notice','NoticeController::index');
$routes->get('/dashboard/add_notice','NoticeController::addnotice');
$routes->post('/dashboard/add_notice','NoticeController::addnotice');
$routes->get('/dashboard/edit_notice/(:num)','NoticeController::edit/$1');
$routes->post('/dashboard/update_notice/(:num)','NoticeController::update/$1');
$routes->get('/dashboard/delete_notice/(:num)','NoticeController::delete/$1');

//student
$routes->get('/dashboard/all_student','StudentController::index');
$routes->get('/dashboard/add_student','StudentController::addstudent');
$routes->post('/dashboard/add_student','StudentController::addstudent');
$routes->get('/dashboard/edit_student/(:num)','StudentController::edit/$1');
$routes->post('/dashboard/update_student/(:num)','StudentController::update/$1');
$routes->get('/dashboard/view_student/(:num)','StudentController::viewstudent/$1');
$routes->get('/dashboard/delete_student/(:num)','StudentController::delete/$1');

$routes->match(['get', 'post'], '/login', 'Login::index');


