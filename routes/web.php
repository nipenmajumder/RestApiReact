<?php

$router->get('/ChartData',['middleware'=>'auth','uses'=>'ChartDataController@onAllSelect']);
$router->get('/ClientReview',['middleware'=>'auth','uses'=>'ClientReviewController@onAllSelect']);
$router->post('/ContactSend',['middleware'=>'auth','uses'=>'ContactController@onContactSend']);
$router->get('/CourseHome',['middleware'=>'auth','uses'=>'CourseController@onSelectFour']);
$router->get('/CourseAll',['middleware'=>'auth','uses'=>'CourseController@onSelectAll']);
$router->post('/CourseDetails',['middleware'=>'auth','uses'=>'CourseController@onSelectDetails']);
$router->get('/Footer',['middleware'=>'auth','uses'=> 'FooterController@onSelect']);
$router->get('/Information',['middleware'=>'auth','uses'=>'InformationController@onSelect']);
$router->get('/Service',['middleware'=>'auth','uses'=>'ServiceController@onSelect']);
$router->get('/Project',['middleware'=>'auth','uses'=>'ProjectController@onSelect3']);
$router->get('/ProjectAll',['middleware'=>'auth','uses'=>'ProjectController@onAllSelect']);
$router->get('/ProjectDetails/{projectID}',['middleware'=>'auth','uses'=>'ProjectController@onSelectDetails']);
$router->get('/Video',['middleware'=>'auth','uses'=>'HomeEtcController@onSelectVideo']);
$router->get('/TotalProject',['middleware'=>'auth','uses'=>'HomeEtcController@onSelectProjectClient']);
$router->get('/TechDesc',['middleware'=>'auth','uses'=>'HomeEtcController@onSelectDesc']);
$router->get('/HomeTopTitle',['middleware'=>'auth','uses'=>'HomeEtcController@onSelectTitle']);


