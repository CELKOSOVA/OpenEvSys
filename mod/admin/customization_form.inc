<?php
global $conf;
$entity_select_options = array_merge(array('' => ''),getActiveFormats());

$customization_form = array(
    'entity_select'=>array(
         'type'      =>'select',
         'label'     =>_t('SELECT_A_FORMAT') ,
         'extra_opts'=>array(
               'options' =>$entity_select_options ,
                'value'=>$_REQUEST['entity_select']
                )
         ),
    'change_entity' => array('type'=>'submit','label'=>_t('SELECT'))
);
