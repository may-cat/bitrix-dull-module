<?php
class cMainDull {
    static $MODULE_ID="dull";

    /**
     * Хэндлер, отслеживающий изменения в инфоблоках
     * @param $arFields
     * @return bool
     */
    static function onBeforeElementUpdateHandler($arFields){
        // чтение параметров модуля
        // $iblock_id = COption::GetOptionString(self::$MODULE_ID, "iblock_id");

        // Активная деятельность

        // Результат
        return true;
    }
}