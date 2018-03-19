<?php 
 namespace Admin\Controller;
use Think\Controller;
class LockController extends Controller {
   public function _initialize(){
   	if(!isset($_SESSION['id'])){
   		$this->error("请先登录",U("Login/index"));
   		exit;
   	}
   }
}