<?php
namespace app\index\controller;
use think\Controller;
use app\common\model\Teacher;
use think\Request;

class TeacherController extends Controller{
	public function index(){
		$Teacher=new Teacher();
		$teachers=$Teacher->select();
		$this->assign('teachers',$teachers);
		return $this->fetch();
	}
	public function add(){
		return $this->fetch();
	}
	public function insert(){
		$postData=Request::instance()->post();
		$Teacher=new Teacher();
		$Teacher->name = $postData['name'];
        $Teacher->username = $postData['username'];
        $Teacher->sex = $postData['sex'];
        $Teacher->email = $postData['email'];
		$Teacher->create_time=$postData['create_time'];
		$result=$Teacher->validate(true)->save($Teacher->getData());
		if (false === $result)
        {
            return '新增失败:' . $Teacher->getError();
        } else {
            return  '新增成功。新增ID为:' . $Teacher->id;
        }
	}
}
