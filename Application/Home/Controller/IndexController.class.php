<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
   
    function index(){
    	// $company = M('company');
    	// $com = $company->limit(6)->select();
     //  $this->assign('com',$com);
    	// print_r($com);exit;
    	// 显示内衣城堡nav
    	 //$this->neiyi();
      //图片新闻
      $this->newspic();
      //新闻中心
      $this->newscenter();
    	
    	$this->display();
    }
   
   //图片新闻
   function newspic(){
      $np = M("news");
      $newspic = $np->where("imgshow=1")->order("id desc")->limit(4)->select();
      foreach($newspic as &$val){
        //内容实体标签解码成html
        $val['content'] = htmlspecialchars_decode($val['content']);
         //匹配出内容中的图片地址
        $pr='/src\s*=\s*["|\'](.*?)["|\']/';
        preg_match($pr,$val['content'],$ms);
        $val['img'] = $ms[1];
      }
      // print_r($newspic);exit;
     
      $this->assign('newspic',$newspic);
   }
   //新闻中心
   function newscenter(){
      $n = M('news');
      $newscenter = $n->order("id desc")->limit(6)->select();
      $this->assign('newscenter',$newscenter);
   }
   
}