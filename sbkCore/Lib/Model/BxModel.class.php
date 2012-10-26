<?php
class BxModel extends Model {
	// 定义自动完成
    protected $_auto    =   array(
        array('bx_status','等待接修',1),
        array('bx_status_code','1',1),
        );
}