<?php
include_once APPROOT . 'inc/subformats/subformats.php';

class Entities extends ADODB_Active_Record {
  function __construct(){
    parent::__construct('gacl_axo');
  }

  public function get_entities(){
    $sql = "SELECT * FROM `gacl_axo` WHERE `section_value` = 'entities' AND `value` != 'document'";
    return $this->Find("`section_value` = 'entities' AND `value` != 'document'");
  }

  public function get_subformats(){
    $sql = "SELECT * FROM `gacl_axo` WHERE `section_value` = 'subformat' AND `value` != 'document'";
    return $this->Find("`section_value` = 'subformat' AND `value` != 'document'");
  }

  public function get_list(){
    $subformats_helper = new Subformats();
    $options = array();
    $entities = $this->get_entities();

    foreach($entities as $entity) {
      $entity_name = $entity->value;
      $options[$entity_name] = _t(strtoupper($entity_name));
    }

    $subformats = $this->get_subformats();

    foreach ($subformats as $subformat) {
      $options[$subformat->value] = $subformats_helper->l10n($subformat->name);
    }

    return $options;
  }
}
