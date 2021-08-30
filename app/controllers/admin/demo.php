<?php
  namespace admin;
  use controllers\BaseControllers;

  class Demo extends BaseControllers {
    function index() {
      echo "index....";
      $this->success('/home', "成功");
    }
    function add() {
      echo "add.....";
      $this->assign("title", "######");
      $this->display("admin/index/index");
      $this->error('/home/add', "失败");
    }
  }