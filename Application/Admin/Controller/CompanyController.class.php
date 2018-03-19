<?php
namespace Admin\Controller;
use Think\Controller;
class CompanyController extends LockController {
    public function index(){

        $company = M('company')->select();
        $this->assign('company',$company);
        $this->display(); 
    }
    //添加新闻
    public function add(){
    	
        
        if($_POST){
            //表单数据插入数据库

            $article = M("company");
            $article->create();
            $res = $article->add();
            if($res){
                $this->success("添加成功",U("index"));
            }else{
                $this->error("添加失败");
            }
        }
       
    	$this->display();
    }
    public function delete(){
        $id = $_GET['id'];
        $res = M('company')->delete($id);
        if($res){
                $this->success("删除成功",U("index"));
            }else{
                $this->error("删除失败");
        }
    }

   public function updatefm(){

    
     $id = $_GET['id'];
     $company = M('company');
     $company->create();
     $new = $company->find($id);

     //print_r($new);exit;
     
     $this->assign('new',$new);
    
     $this->display();

   } 
   public function update(){
        
        $company = M("company");
        $company->create();
        $re=$company->save();
        // $sql =$company->getLastSql();
        // echo $sql;exit;

        if($re){
            $this->success("修改成功!",U("index"));
        }else{
            $this->error("修改失败!",U("index"));
        }
   }
    
}