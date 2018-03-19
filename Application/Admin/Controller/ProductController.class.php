<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends LockController {
    public function index(){

        $product = M('product')->select();
        $this->assign('product',$product);
        $this->display(); 
    }
    //添加
    public function add(){
    	 //导航显示
        $nav=M('protype')->select();
        //var_dump($nav);exit;
        $this->assign('nav',$nav);
        if($_POST){
            //表单数据插入数据库
             
            $article = M("product");
            $article->create();
            $res = $article->add();
             // $sql = $article->getLastSql();
             // echo $sql;exit;
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
        $res = M('product')->delete($id);
        if($res){
                $this->success("删除成功",U("index"));
            }else{
                $this->error("删除失败");
        }
    }

   public function updatefm(){

    //导航显示
        $nav=M('protype')->select();
        //var_dump($nav);exit;
        $this->assign('nav',$nav);

     $id = $_GET['id'];
     $sql = "select * from product n inner join protype t on n.tid=t.id where n.id=$id";
     $new = M('product n')->query($sql);
     //print_r($new);exit;
     
     $this->assign('new',$new);
     // $tid = $new['tid'];
     // $type = M('producttype')->find();
     // $typename = $type['typename'];
     // $this->assign();
     $this->display();

   } 
   public function update(){
        
        $product = M("product");
        $product->create();
        $re=$product->save();
        // $sql =$product->getLastSql();
        // echo $sql;exit;

        if($re){
            $this->success("修改成功!",U("index"));
        }else{
            $this->error("修改失败!",U("index"));
        }
   }
    
}