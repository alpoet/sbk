<?php
class AdminAction extends Action {
	public function index(){
	$this->assign(array(
            'title'  => '邵阳市中心医院设备科网络平台管理',
        ));
    $this->display();
    }

    public function login(){//管理员登录
    	$id = $_POST["admin_id"];
        $password = $_POST["admin_password"];
    	$admin = M('admin');
    	$logincondition['admin_id'] = $id;
    	$logincondition['admin_password'] = $password;
    	$loginresult = $admin->where($logincondition)->find();
    	if (!$loginresult) {
    		$this->error('用户名或密码错误，登录失败！');
    		return false;
    	}else{
    		$_SESSION['admin_id']=$id;
    		$this->success('登录成功！','__APP__/Admin/view');
    	}   	
    }

    public function logout(){
        unset($_SESSION['admin_id']);
        $this->success('退出成功！','__APP__/Wx/index');
    }

    public function view(){
        $Bk = M('Bk');
        $this->bkdata = $Bk->where('')->select();

        $this->assign(array(
            'title'  => '邵阳市中心医院设备科网络平台管理', 
            'aid' => $_SESSION['admin_id'],    
        ));

        if (isset($_SESSION['admin_id'])) {        
            $this->display();       
        }else{
            $this->error('请您先登录！','__APP__/Admin/index');
        }
    }
}