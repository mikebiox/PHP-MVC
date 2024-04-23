<?php

class Home extends Controller {

    public function index() {
      $user = $this->model('User');
      $data = $user->test();

      print_r ($data);
      die;
      
	    $this->view('home/index');
	    die;
    }

}
