<?php
CModule::IncludeModule("dull");
global $DBType;

$arClasses=array(
    'cMainDull'=>'classes/general/cMainDull.php'
);

CModule::AddAutoloadClasses("dull",$arClasses);
