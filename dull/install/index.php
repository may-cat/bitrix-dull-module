<?
Class dull extends CModule
{
    var $MODULE_ID = "dull";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;

    function dull()
    {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path."/version.php");
        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }
        $this->MODULE_NAME = "Пустой модуль";
        $this->MODULE_DESCRIPTION = "Это пустышка модуля";
    }

    function DoInstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        // Install events
        RegisterModuleDependences("iblock","OnAfterIBlockElementUpdate","dull","cMainDull","onBeforeElementUpdateHandler");
        RegisterModule($this->MODULE_ID);
        $APPLICATION->IncludeAdminFile("Установка модуля dull", $DOCUMENT_ROOT."/bitrix/modules/dull/install/step.php");
        return true;
    }

    function DoUninstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        UnRegisterModuleDependences("iblock","OnAfterIBlockElementUpdate","dull","cMainDull","onBeforeElementUpdateHandler");
        UnRegisterModule($this->MODULE_ID);
        $APPLICATION->IncludeAdminFile("Деинсталляция модуля dull", $DOCUMENT_ROOT."/bitrix/modules/dull/install/unstep.php");
        return true;
    }
}