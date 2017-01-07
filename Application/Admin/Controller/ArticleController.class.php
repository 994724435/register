<?php
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class ArticleController extends CommonController {
	
    public function index(){
        $article = M('article');
        $result  = $article->select();
        $this->assign('article',$result);
        $this->display();
    }


    public function detail(){
        $article = M('article');
        if($_POST){
            $data['title'] =$_POST['title'];
            $data['content'] = $_POST['content1'];
            $data['addtime'] = date('Y-m-d H:i:s',time());
            $res = $article->where(array('id'=>$_GET['id']))->save($data);
            if($res){
                echo "<script>alert('修改成功');window.location.href='/register/index.php/Admin/Article/index';</script>";exit();
            }else{
                echo "<script>alert('修改失败');window.location.href='/register/index.php/Admin/Article/index';</script>";exit();
            }
        }

        $result  = $article->where(array('id'=>$_GET['id']))->select();
        $this->assign('article',$result[0]);
        $this->display();
    }

}