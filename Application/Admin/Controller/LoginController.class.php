<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    
    function index(){
        $this->display();
    }
    function checkForm(){
        $admin = M('admin');
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from admin where username='$username' and password='$password'";
        $re = $admin->query($sql);
        if($re){
            //用户的信息存入session
            $_SESSION['username']=$re[0]['username'];
            $_SESSION['id']=$re[0]['id'];
            

            $this->success('登录成功',U('Index/index'));
        }else{
            $this->error('登录失败',U('Login/index'));
        }
    }

    function logout(){
       $_SESSION = array(); //清除SESSION值.  
          if(isset($_COOKIE[session_name()])){  //判断客户端的cookie文件是否存在,存在的话将其设置为过期.  
                setcookie(session_name(),'',time()-1,'/');  
            }  
         session_destroy();  //清除服务器的sesion文件  
         $this->success('退出成功',U('Login/index'));

    }

}