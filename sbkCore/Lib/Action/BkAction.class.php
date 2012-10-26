<?php
class BkAction extends Action {
	public function index(){
		$ViewData = M('Equipment');
		$this->equipmentsdata = $ViewData->where('')->select();

		$this->assign(array(
            'title'  => '邵阳市中心医院设备科网上报库',
        ));
    	$this->display();
    }

    public function preview(){
    	$preview_departments = $_POST["bk_hospital_departments"];
        $preview_id = $_POST["bk_equipment_id"];
        $preview_name = $_POST["bk_equipment_name"];
        $preview_specification = $_POST["bk_equipment_specification"];
        $preview_quantity = $_POST["bk_quantity"];

        //print_r($preview_departments);
        //print_r($preview_id);
        //print_r($preview_name);
        //print_r($preview_specification);
        //print_r($preview_quantity);

        $preview_check_id = array_combine($preview_id, $preview_quantity);
        $preview_check_name = array_combine($preview_name, $preview_quantity);
        $preview_check_specification = array_combine($preview_specification, $preview_quantity);

        $preview_del = array("z" => "0");

        $preview_checked_id_array = array_diff($preview_check_id, $preview_del);
        $preview_checked_name_array = array_diff($preview_check_name, $preview_del);
        $preview_checked_specification_array = array_diff($preview_check_specification, $preview_del);

        $preview_checked_id = array_keys($preview_checked_id_array);
        $preview_checked_name = array_keys($preview_checked_name_array);
        $preview_checked_specification = array_keys($preview_checked_specification_array);
        $preview_checked_quantity = array_values($preview_checked_id_array);

        $preview_checked_departments = array();
        $array_length = count($preview_checked_id);
        for ($i=0; $i < $array_length ; $i++) { 
            array_push($preview_checked_departments, $preview_departments);
        }

        $previewpost = array(
        	'id' => $preview_checked_id,
        	'name' => $preview_checked_name,
        	'specification' => $preview_checked_specification,
        	'quantity' => $preview_checked_quantity,
            'departments' => $preview_checked_departments
        	);

        //格式化$preview
        $keys = array('name' , 'specification', 'quantity','departments');
        function converts($post = array(), $keys = array()){
    		$data = array();
    		foreach( $post['id'] as $k => $v ){
        		$data[$k] = array(
            		'id' => $v,
        		);
        		foreach( $keys as $key ){
            		if ( $post[$key][$k] ){
                		$data[$k][$key] = $post[$key][$k];
            		}
        		}
    		}
    		return $data;
		}
		$preview = converts($previewpost,$keys);


        //print_r($previewpost);
        //print_r($preview_checked_id);
        //print_r($preview_checked_name);
        //print_r($preview_checked_specification);
        //print_r($preview_checked_quantity);
        //print_r($preview_checked_departments);
      
        $this->assign(array(
            'title'  => '邵阳市中心医院设备科网上报库',
            'previewdata' => $preview,
        ));
   	$this->display();
    }

    public function add(){
        $Bk   =   D('Bk');

        $Bk_departments = $_POST["bk_hospital_departments"];
        $Bk_id = $_POST["bk_equipment_id"];
        $Bk_name = $_POST["bk_equipment_name"];
        $Bk_specification = $_POST["bk_equipment_specification"];
        $Bk_quantity = $_POST["bk_quantity"];

        $Bk_data_array = array(
            'id' => $Bk_id,
            'name' => $Bk_name,
            'specification' => $Bk_specification,
            'quantity' => $Bk_quantity,
            'departments' => $Bk_departments
            );

        //print_r($Bk_id);
        //print_r($Bk_name);
        //print_r($Bk_specification);
        //print_r($Bk_quantity);
        //print_r($Bk_departments);
        //print_r($Bk_data);

        //格式化$BK_data
        $keys = array('name' , 'specification', 'quantity','departments');
        function converts($post = array(), $keys = array()){
            $data = array();
            foreach( $post['id'] as $k => $v ){
                $data[$k] = array(
                    'id' => $v,
                );
                foreach( $keys as $key ){
                    if ( $post[$key][$k] ){
                        $data[$k][$key] = $post[$key][$k];
                    }
                }
            }
            return $data;
        }
        $Bk_data = converts($Bk_data_array,$keys);
        $Bk_data_length = count($Bk_data);

        //$Bkdata = $Bk_data['0'];
        //print_r($Bkdata['id']);
        for ($i=0; $i <$Bk_data_length ; $i++) {
            $Bkdata = $Bk_data[$i]; 
            if($Bk->create()) {
                $data['bk_equipment_id'] = $Bkdata['id'];
                $data['bk_equipment_name'] = $Bkdata['name'];
                $data['bk_equipment_specification'] = $Bkdata['specification'];
                $data['bk_quantity'] = $Bkdata['quantity'];
                $data['bk_hospital_departments'] = $Bkdata['departments'];
                $Bk->add($data);
            }else{
                $this->error($Bk->getError());
            }
        }
        $this->success('报库单提交成功！','__APP__/Bk/index');

    }

}