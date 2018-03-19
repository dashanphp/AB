<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends CommonController {
   
    function search(){
    	
    	//向模板页分配内容
    	$this->getContent();
    	$this->display();
    }

    function getContent(){
    	$news = M('news');
        $product = M('product');
        $keyword = $_POST['keyword'];
        if($keyword){
            $searchArr1 = $news->where("title like '%$keyword%' or content like '%$keyword%'")->select(); 
                foreach($searchArr1 as &$val){
                    $val['table'] = 'news';
                }

            $searchArr2 = $product->where("title like '%$keyword%' or content like '%$keyword%'")->select();  
                foreach($searchArr2 as &$val){
                    $val['table'] = 'product';
                }
            $searchArr = array_merge($searchArr1,$searchArr2);

           
            foreach($searchArr as &$val){
                $val['content'] = htmlspecialchars_decode($val['content']);
            }
             
              // print_r($searchArr);exit;
            $this->assign('searchArr',$searchArr);
        }
    	
    }
    
    
   
}
