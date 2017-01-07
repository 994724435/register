<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class  ArticleController extends CommonController{

	public function index(){
//		print_r(session('email'));die;
		$this->display();
	}

	public function ci(){
		$article = M('article');
		$result  = $article->where(array('id'=>$_GET['id']))->select();
		$this->assign('article',$result[0]);

		$this->display();
	}

	public function tougao(){
		if($_POST){
			$Tg =M('Tg');
			$data=array(
			 'tg_unit'=>$_POST['unit'],
			 'tg_name'=>$_POST['name'],
			 'tg_theme'=>$_POST['theme'],
			 'tg_content'=>$_POST['content'],
			);
			$res=$Tg->add($data);
			if($res){
				echo "<script>alert('投稿成功');window.location.href='/index.php/Home/Article/tougao';</script>";exit;
			}else{
				echo "<script>alert('投稿失败');window.location.href='/index.php/Home/Article/tougao';</script>";exit;
			}
		}
		$this->display();
	}	
	
	public function Details(){
		$artid=$_GET['artid'];
		$article=M('article');
		$art_cate=M('artcate');
		$data= $article->where(array('art_id'=>$artid))->select();
		$num = $data[0]['art_num']+1;   //文章浏览数
        $arr=array('art_num'=>$num);		
		$result =$article->where(array('art_id'=>$artid))->save($arr);
		$re_name= $art_cate->where(array('cate_id'=>$data[0]['art_cateid']))->select();
		$this->assign('data',$data[0]);
//		print_r($data[0]);die;
		$this->assign('re_name',$re_name[0]);
		$this->display();
	}	
}