<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends CommonController {
   
    function news(){
    	
    	//向模板页分配内容
    	$this->getContent();
    	$this->display();
    }

    function getContent(){
    	$news = M('news');
    	$newsArr = $news->select();
    	// print_r($com);exit;
    	foreach($newsArr as &$val){
    		$val['content'] = htmlspecialchars_decode($val['content']);
    	}
    	
    	$this->assign('newsArr',$newsArr);
    }
    
    function newslist(){
    	
    	//向模板页分配内容
    	$this->getOneNews();
    	$this->display();
    }
    function getOneNews(){
		$id = $_GET['id'];
		$newsone = M('news')->find($id);  
		$newsone['content'] = htmlspecialchars_decode($newsone['content']);
		$this->assign('newsone',$newsone);
	}
   
}
