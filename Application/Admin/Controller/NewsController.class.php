<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends LockController {
    public function index(){

        $news = M('news')->select();
        $this->assign('news',$news);
        $this->display(); 
    }
    //添加新闻
    public function add(){
    	 //导航显示
        $nav=M('newstype')->select();
        //var_dump($nav);exit;
        $this->assign('nav',$nav);
        if($_POST){
            //表单数据插入数据库

            $article = M("news");
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
        $res = M('news')->delete($id);
        if($res){
                $this->success("删除成功",U("index"));
            }else{
                $this->error("删除失败");
        }
    }

   public function updatefm(){

    //导航显示
        $nav=M('newstype')->select();
        //var_dump($nav);exit;
        $this->assign('nav',$nav);

     $id = $_GET['id'];
     $sql = "select * from news n inner join newstype t on n.tid=t.id where n.id=$id";
     $new = M('news n')->query($sql);
     //print_r($new);exit;
     
     $this->assign('new',$new);
     // $tid = $new['tid'];
     // $type = M('newstype')->find();
     // $typename = $type['typename'];
     // $this->assign();
     $this->display();

   } 
   public function update(){
        
        $news = M("news");
        $news->create();
        $re=$news->save();
        // $sql =$news->getLastSql();
        // echo $sql;exit;

        if($re){
            $this->success("修改成功!",U("index"));
        }else{
            $this->error("修改失败!",U("index"));
        }
   }
    
}