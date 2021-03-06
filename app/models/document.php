<?php
class Document extends AppModel {
	var $name = 'Document';
	var $labels = array('src'=>'Archivo');
	var $actsAs = array(
		'File' => array(
			'portada'=>false,
			'fields'=>array(
				'src'=>array(
					'types'=>'docx|xlsx|ppt|pps|ppsx|pptx|doc|xls|pdf|jpg|gif|jpeg|png|zip|rar|txt',
					'maxsize'=>5120000,
					'dir'=>'docs'
				)
			)
		)
	);
	var $belongsTo = array(
		'Project' => array(
			'className' => 'Project',
			'counterCache' => true
		)
	);
	var $validate = array();
}
?>