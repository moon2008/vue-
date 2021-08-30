<?php 
  namespace question;

  use models\BaseDao;

  class RankQ extends question {

    function index() {
      $db = new BaseDao();
      $where = [];
      if(!empty($_GET['id'])) {
        $where['id'] = $_GET['id'];
      }
      $data = $db->select('rankq', '*', $where);
      // dd($data);
      echo json_encode($data);
      // return $data;
    }
    function add() {
      if(isset($_POST['do_submit'])) {
        $db = new BaseDao();
        unset($_POST['do_submit']);
        if($db -> insert('rankq', $_POST)) {
          echo json_encode(['state'=>200, 'mess'=>'添加成功！']);
        }else{
          echo json_encode(['state'=>400,'mess'=>'添加失败']);
        }
      }else {
        echo json_encode(['state'=>500,'mess'=>'添加失败']);     
      }
    }
    function del($id) {
      if(isset($_POST['do_submit'])) {
        $db = new BaseDao();
        $where['id'] = $id;
        unset($_POST['do_submit']);
        if($db -> delete('rankq', '*', $where)) {
          echo json_encode(['state'=>200, 'mess'=>'删除成功！']);
        }else{
          echo json_encode(['state'=>400,'mess'=>'删除失败']);
        }
      }else {
        echo json_encode(['state'=>500,'mess'=>'删除失败']);     
      }
    }
    function update($id) {
      if(isset($_POST['do_submit'])) {
        $db = new BaseDao();
        $where['id'] = $id;
        unset($_POST['do_submit']);
        if($db -> update('rankq', '*', $where)) {
          echo json_encode(['state'=>200, 'mess'=>'更新成功！']);
        }else{
          echo json_encode(['state'=>400,'mess'=>'更新失败']);
        }
      }else {
        echo json_encode(['state'=>500,'mess'=>'更新失败']);     
      }
    }
  }