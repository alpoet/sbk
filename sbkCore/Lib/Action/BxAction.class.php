<?php
class BxAction extends Action {
	public function index(){
	$this->assign(array(
            'title'  => '邵阳市中心医院设备科网上报修',
        ));
    $this->display();
    }

    public function insert(){
        $Bx   =   D('Bx');
        if($Bx->create()) {
            $result =   $Bx->add();
            if($result) {
                $this->success('报修请求操作成功！','__APP__/Bx/view');
            }else{
                $this->error('报修请求操作失败！');
            }
        }else{
            $this->error($Bx->getError());
        }
    }

    public function view(){
        $ViewData = M('Bx'); // 实例化ViewData数据模型
        $this->waitdata = array_reverse($ViewData->where('bx_status_code=1')->select());
        $wait_count = count($ViewData->where('bx_status_code=1')->select());
        $this->workdata = array_reverse($ViewData->where('bx_status_code=2')->select());
        $work_count = count($ViewData->where('bx_status_code=2')->select());
        $this->assign(array(
            'title'  => '邵阳市中心医院设备科网上报修',
            'wait_count' => $wait_count,
            'work_count' => $work_count,
        ));
        $this->display();
    }
}