<?php
namespace Home\Controller;
use Think\Controller;
class productController extends CommonController {
   
    function product(){
    	
    	//向模板页分配内容
    	$this->getContent();
    	$this->display();
    }

    function getContent(){
    	$product = M('product');
    	$productArr = $product->select();
    	// print_r($com);exit;
    	foreach($productArr as &$val){
    		$val['content'] = htmlspecialchars_decode($val['content']);
    	}
    	
    	$this->assign('productArr',$productArr);
    }
    
    function productlist(){
    	
    	//向模板页分配内容
    	$this->getOneproduct();
    	$this->display();
    }
    function getOneproduct(){
		$id = $_GET['id'];
		$productone = M('product')->find($id);  
		$productone['content'] = htmlspecialchars_decode($productone['content']);
		$this->assign('productone',$productone);
	}
   
}
