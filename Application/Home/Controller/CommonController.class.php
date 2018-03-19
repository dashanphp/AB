<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
   
    function _initialize(){
      //公共头部导航
    	$company = M('company');
    	$com = $company->limit(6)->select();
      $this->assign('com',$com);
    //内衣城堡
       $product = M();
       $sql = "select p.id,p.title,t.typename from product p inner join protype t on p.tid=t.id ";
       $pr = $product->query($sql);
   		
   	  $this->assign('pr',$pr);	
    }
   
   
}