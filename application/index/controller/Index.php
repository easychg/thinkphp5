<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index($name='world')
    {
		$this->assign('name',$name);
        return $this->fetch();
    }
	public function index2(){
		var_dump(Db::name('teacher')->find());
	}
}
