<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends LockController {
    public function index(){
    	
       $this->display(); 
    }
}