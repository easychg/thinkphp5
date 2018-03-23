<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\common\model\Teacher;      // 引入教师

class IndexController extends Controller
{
	public function __construct()
    {
        // 调用父类构造函数(必须)
        parent::__construct();
        
        // 验证用户是否登陆
        if (!Teacher::isLogin()) {
            return $this->error('plz login first', url('Login/index'));
        }
    }
    public function index()
    {
		$this->assign('name',$name);
        return $this->fetch();
    }
	public function index2(){
		var_dump(Db::name('teacher')->find());
	}
}
