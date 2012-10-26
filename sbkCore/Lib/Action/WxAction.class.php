<?php
class WxAction extends Action {
	public function index(){
		$this->assign(array(
            'title'  => '邵阳市中心医院设备科维修人员网上接修平台',       
        ));
    	$this->display();
    }

    public function view(){
        $ViewData = M('Bx');
        $this->bxdata = $ViewData->where('bx_status_code=1')->select();
        $require_count =count($ViewData->where('bx_status_code=1')->select());
        $takedatacondition['bx_member_id'] = $_SESSION['member_id'];
        $takedatacondition['bx_status_code'] = '2';
        $this->takedata = $ViewData->where($takedatacondition)->select();
        $take_count = count($ViewData->where($takedatacondition)->select());
        $donedatacondition['bx_member_id'] = $_SESSION['member_id'];
        $donedatacondition['bx_status_code'] = '3';
        $this->donedata = $ViewData->where($donedatacondition)->select();
        $done_count = count($ViewData->where($donedatacondition)->select());  

    	$this->assign(array(
            'title'  => '邵阳市中心医院设备科维修人员网上接修平台', 
            'mid' => $_SESSION['member_id'],
            'require_count' => $require_count,
            'take_count' => $take_count, 
            'done_count' => $done_count,     
        ));

    	if (isset($_SESSION['member_id'])) {   		
    		$this->display();		
    	}else{
    		$this->error('请您先登录！','__APP__/Wx/index');
    	}


    }

    public function login(){//维修人员登录
    	$id = $_POST["member_id"];
        $password = $_POST["member_password"];
    	$member = M('Member');
    	$logincondition['member_id'] = $id;
    	$logincondition['member_password'] = $password;
    	$loginresult = $member->where($logincondition)->find();
    	if (!$loginresult) {
    		$this->error('用户名或密码错误，登录失败！');
    		return false;
    	}else{
    		$_SESSION['member_id']=$id;
    		$this->success('登录成功！','__APP__/Wx/view');
    	}   	
    }

    public function logout(){
    	unset($_SESSION['member_id']);
    	$this->success('退出成功！','__APP__/Wx/index');
    }

    public function take(){
        $take = M('Bx');
        $takeid = $_POST["bx_id"];
        $takestatus = $_POST["bx_status"];

        //print_r($takeid);
        //print_r($takestatus);

        $takearray = array_combine($takeid, $takestatus);
        $takedelarray = array("x" => "等待接修");
        $takearraynow = array_diff($takearray, $takedelarray);
        $takeidnow = array_keys($takearraynow);

        //print_r($takearray);
        //print_r($takearraynow);
        //print_r($takeidnow);

        foreach ($takearraynow as $key => $value) {
            $takecondition['bx_id'] = $key;
            $takedata['bx_status'] = $value;
            $takedata['bx_status_code'] = '2';
            $takedata['bx_member_id'] = $_SESSION['member_id'];
            $takedata['bx_take_date_time'] = date("Y-m-d H:i:s",time());
            # code...
            $take->where($takecondition)->save($takedata);
        }

        $this->success('接修成功！','__APP__/Wx/view/');

        /*$takecondition['bx_id'] = $takeidnow;
        $takedata['bx_status'] = $takestatus;
        $takedata['bx_status_code'] = '2';
        $takeresult = $take->where($takecondition)->save($takedata);
        if (!$takeresult ) {
            $this->error('接修失败！请您联系管理员');
            return false;
        }else{
            $this->success('接修成功！','__APP__/Wx/view/');
        }*/
    }

    public function done(){
        $done = M('Bx');
        $doneid = $_POST["bx_id"];
        $donestatus = $_POST["bx_status"];

        //print_r($doneid);
        //print_r($donestatus);

        $donearray = array_combine($doneid, $donestatus);
        $donedelarray = array("y" => "正在维修");
        $donearraynow = array_diff($donearray, $donedelarray);
        $doneidnow = array_keys($donearraynow);

        //print_r($donearray);
        //print_r($donearraynow);
        //print_r($doneidnow);

        foreach ($donearraynow as $key => $value) {
            $donecondition['bx_id'] = $key;
            $donedata['bx_status'] = $value;
            $donedata['bx_status_code'] = '3';
            $donedata['bx_member_id'] = $_SESSION['member_id'];
            $donedata['bx_done_date_time'] = date("Y-m-d H:i:s",time());
            # code...
            $done->where($donecondition)->save($donedata);
        }

        $this->success('完成检修提交成功！','__APP__/Wx/view/');
    }
}