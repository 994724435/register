<?php

namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class IndexController extends CommonController {
	
    public function main(){
        $this->display();
    }

    public function userdetail(){
        $user = M('user');
        if ($_POST) {
            $data['email'] = $_POST['email'];
            $data['password'] =$_POST['psd1'];
            $data['name']   = $_POST['name'];
            $data['pingyin']  = $_POST['pingyin'];
            $data['danwei']   = $_POST['danwei'];
            $data['job']      = $_POST['job'];
            $data['address']  = $_POST['address'];
            $data['youbian']  = $_POST['youbian'];
            $data['phone']    = $_POST['phone'];
            $data['xuefen']   = $_POST['xuefen'];
            $data['zhusu']    = $_POST['zhusu'];
            $user_res= $user->where(array('email'=>$_POST['email']))->select();
            if($user_res[0]['id']){
 echo "<script>alert('用户名已存在');window.location.href='/register/index.php/Admin/Index/userlist';</script>";exit();
            }
           $res= $user->where(array('id'=>$_GET['id']))->save($data);
            if ($res) {
        echo "<script>alert('修改成功');window.location.href='/register/index.php/Admin/Index/userlist';</script>";
            }else{
        echo "<script>alert('修改失败');window.location.href='/register/index.php/Admin/Index/userlist';</script>";
            }
        }
        
        $result = $user->where(array('id'=>$_GET['id']))->select();
        $this->assign('user',$result[0]);
        $this->display();
    }

    public function userdelete(){
        $user = M('user');
        $result = $user->where(array('id'=>$_GET['id']))->delete();
        if ($result) {
        echo "<script>alert('删除成功');window.location.href='/register/index.php/Admin/Index/userlist';</script>";
        }else{
        echo "<script>alert('删除失败');window.location.href='/register/index.php/Admin/Index/userlist';</script>";
        }
    }

    public function userlist(){
        $user = M('user');
        $result = $user->select();
        $this->assign('user',$result);
        $this->display(); 

    }

    public function useradd(){
          if ($_POST) {
            $user = M('user');
            $data['email'] = $_POST['email'];
            $data['password'] =$_POST['psd1'];
            $data['name']   = $_POST['name'];
            $data['pingyin']  = $_POST['pingyin'];
            $data['danwei']   = $_POST['danwei'];
            $data['job']      = $_POST['job'];
            $data['address']  = $_POST['address'];
            $data['youbian']  = $_POST['youbian'];
            $data['phone']    = $_POST['phone'];
            $data['xuefen']   = $_POST['xuefen'];
            $data['zhusu']    = $_POST['zhusu'];
            $data['addtime']  = date('Y-m-d H:i:s',time());
            $user_res= $user->where(array('email'=>$_POST['email']))->select();
            if($user_res[0]['id']){
 echo "<script>alert('用户名已存在');window.location.href='/register/index.php/Admin/Index/userlist';</script>";exit();
            }
            $res= $user->add($data);
            if ($res) {
        echo "<script>alert('添加成功');window.location.href='/register/index.php/Admin/Index/userlist';</script>";
            }else{
        echo "<script>alert('添加失败');window.location.href='/register/index.php/Admin/Index/userlist';</script>";
            }
            
        }
        $this->display();
      
    }

  public function out(){
//        $data=array(
//            array('username'=>'zhangsan','password'=>"123456"),
//            array('username'=>'lisi','password'=>"abcdefg"),
//            array('username'=>'wangwu','password'=>"111111"),
//            );
        $user = M('user');
      $data = $user->select();
        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
        import("Org.Util.PHPExcel");
        import("Org.Util.PHPExcel.Writer.Excel5");
        import("Org.Util.PHPExcel.IOFactory.php");

        $filename="test_excel";
//        $headArr=array("用户名","密码");
      $headArr=array("ID","邮箱","密码","姓名","拼音","单位","职称","地址","邮编","电话","学分","住宿","注册时间","支付");
        $this->getExcel($filename,$headArr,$data);
    }

    private function getExcel($fileName,$headArr,$data){
            //对数据进行检验
            if(empty($data) || !is_array($data)){
                die("data must be a array");
            }
            //检查文件名
            if(empty($fileName)){
                exit;
            }

            $date = date("Y_m_d",time());
            $fileName .= "_{$date}.xls";

            //创建PHPExcel对象，注意，不能少了\
            $objPHPExcel = new \PHPExcel();
            $objProps = $objPHPExcel->getProperties();
            
            //设置表头
            $key = ord("A");
            foreach($headArr as $v){
                $colum = chr($key);
                $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
                $key += 1;
            }
            
            $column = 2;
            $objActSheet = $objPHPExcel->getActiveSheet();
            foreach($data as $key => $rows){ //行写入
                $span = ord("A");
                foreach($rows as $keyName=>$value){// 列写入
                    $j = chr($span);
                    $objActSheet->setCellValue($j.$column, $value);
                    $span++;
                }
                $column++;
        }

            $fileName = iconv("utf-8", "gb2312", $fileName);
            //重命名表
            // $objPHPExcel->getActiveSheet()->setTitle('test');
            //设置活动单指数到第一个表,所以Excel打开这是第一个表
            $objPHPExcel->setActiveSheetIndex(0);
            header('Content-Type: application/vnd.ms-excel');
            header("Content-Disposition: attachment;filename=\"$fileName\"");
            header('Cache-Control: max-age=0');

            $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
            $objWriter->save('php://output'); //文件通过浏览器下载
            exit;
        }    
}