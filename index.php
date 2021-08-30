<?php 
  header("Access-Control-Allow-Origin: *"); 
  // phpinfo();

  //包含所有Composer的组件库
  require('vendor/autoload.php');

  use \NoahBuscher\Macaw\Macaw;

  //singleQ
  Macaw::get('/singleQ/list', 'question\SingleQ@index');
  Macaw::post('/singleQ/add','question\SingleQ@add');
  Macaw::post('/singleQ/update','question\SingleQ@update');
  Macaw::get('/singleQ/del/(:id)','question\SingleQ@del');

  //mulitpleQ
  Macaw::get('/multipleQ/list','question\MultipleQ@index');
  Macaw::post('/multipleQ/add','question\MultipleQ@add');
  Macaw::post("/multipleQ/update",'question\MultipleQ@update');
  Macaw::get('/multipleQ/del/(:id)','question\MultipleQ@del');

  //judgeQ
  Macaw::get('/judgeQ/list','question\JudgeQ@index');
  Macaw::post('/judgeQ/add','question\JudgeQ@add');
  Macaw::post('/judgeQ/update','question\JudgeQ@update');
  Macaw::get('/judgeQ/del/(:id)','question\JudgeQ@del');

  //videoQ
  Macaw::get('/videoQ/list','question\VideoQ@index');
  Macaw::post('/videoQ/add','question\VideoQ@add');
  Macaw::post('/videoQ/update','question\VideoQ@update');
  Macaw::get('/videoQ/del/(:id)','question\VideoQ@del');

  //rankO
  Macaw::get('/rankQ/list','question\RankQ@index');
  Macaw::post('/rankQ/add','question\RankQ@add');
  Macaw::post('/rankQ/update','question\RankQ@update');
  Macaw::get('/rankQ/del/(:id)','question\RankQ@del');
  
  //rankO
  Macaw::get('/saQ/list','question\SaQ@index');
  Macaw::post('/saQ/add','question\SaQ@add');
  Macaw::post('/saQ/update','question\SaQ@update');
  Macaw::get('/saQ/del/(:id)','question\SaQ@del');

  //rankO
  Macaw::get('/gameQ/list','question\GameQ@index');
  Macaw::post('/gameQ/add','question\GameQ@add');
  Macaw::post('/gameQ/update','question\GameQ@update');
  Macaw::get('/gameQ/del/(:id)','question\GameQ@del');

  //users
  Macaw::get('users/list','admin\users@index');
  Macaw::get('users/add','admin\users@add');
  Macaw::get('users/update','admin\users@update');
  Macaw::get('users/del(:id)','admin\users@del');


  // 添加命名后 composer dump-autoload
  Macaw::dispatch();
