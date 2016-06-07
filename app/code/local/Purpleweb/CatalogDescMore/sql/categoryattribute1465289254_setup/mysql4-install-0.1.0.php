<?php
$installer = $this;
$installer->startSetup();


$installer->addAttribute("catalog_category", "description_full",  array(
    "type"     => "text",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Description complète",
    "input"    => "textarea",
    "class"    => "",
    "source"   => "",
    "global"   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    "visible"  => true,
    "required" => false,
    "user_defined"  => false,
    "default" => "",
    "searchable" => false,
    "filterable" => false,
    "comparable" => false,
	"wysiwyg_enabled"   => 1,
"is_html_allowed_on_front" => true,
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => ""

	));
$installer->endSetup();
	 