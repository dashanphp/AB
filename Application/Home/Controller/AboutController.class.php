<?php
namespace Home\Controller;
use Think\Controller;

class AboutController extends CommonController {
   
    function about(){
    	
    	$this->getContent();
    	$this->display();

    }

    function getContent(){
    	
    	$id = $_GET['id'];
    	$co = M('company')->find($id);
    	$co['content'] = htmlspecialchars_decode($co['content']);
    	$this->assign('co',$co);

    }

    function joinus(){
        
        if($_POST){

           $user = M('user');
           $user->create(); 
           $re = $user->add();
           if($re){
                $this->success("提交成功");
           }else{
                 $this->error("提交失败");
           }
        }
        $this->display();
    }

   function honor(){
     
        $id = 8;
        $honor = $company->find($id);
        $honor['content'] = htmlspecialchars_decode($honor['content']);
        $this->assign('honor',$honor);
        $this->display();

   } 
   
}