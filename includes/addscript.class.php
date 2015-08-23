<?php

class clsAddScript {
    
    private static $objInstance;
    private $arJsFiles = [];
    private $arCssFiles = [];
    
    private static function initialize() {
        if(! isset(self::$objInstance)) {
            self::$objInstance = new clsAddScript();
        }
        
        return self::$objInstance;
    }
    
    private function addJSFilePath($strFileName) {
        global $arJsFilesPaths;
        if(isset($arJsFilesPaths[$strFileName])) {
            $this->arJsFiles[$strFileName]=$arJsFilesPaths[$strFileName];
        } else {
            throw new Exception("The path for JS file $strFileName does not exist.", 404);
        }
    }
    
    private function addCSSFilePath($strFileName) {
        global $arCssFilesPaths;
        if(isset($arCssFilesPaths[$strFileName])) {
            $this->arCssFiles[$strFileName]=$arCssFilesPaths[$strFileName];
        } else {
            throw new Exception("The path for CSS file $strFileName does not exist.", 404);
        }
    }
    

    public static function addJS($strFileName) {
        $obj = self::initialize();
        $obj->addJSFilePath($strFileName);
    }
    
    public static function addCSS($strFileName) {
        $obj = self::initialize();
        $obj->addCSSFilePath($strFileName);
    }
    
    public static function includeJSFiles() {
        $obj = self::initialize();
        
        foreach($obj->arJsFiles as $strJsFile) {
            echo '<script src="'.JS_DIR.$strJsFile.'" type="text/javascript"></script>';
        }
        
    }
    
    public static function includeCSSFiles() {
        $obj = self::initialize();

        foreach($obj->arCssFiles as $strCssFile) {
            echo '<link href="'.CSS_DIR.$strCssFile.'" rel="stylesheet" type="text/css">';
        }
    }
    
    
}
