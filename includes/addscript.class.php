<?php

/**
 * This class includes JS and CSS files 
 * 
 * You can configure JS, CSS file names in configure_static.php and add it at any
 * place in your php code, when the page is rendered the files will be included in the head section
 */
class clsAddScript {
    
    /**
     * @var Object maintain one single instance of the object - Singleton pattern
     */
    private static $objInstance;
    
    /**
     * @var array contains a list of all included js file names 
     */
    private $arIncludedJsFiles = [];
    
    /**
     * @var array contains a list of all included css file names 
     */
    private $arIncludedCssFiles = [];
    
    private static function initialize() {
        if(! isset(self::$objInstance)) {
            self::$objInstance = new clsAddScript();
        }
        
        return self::$objInstance;
    }
    
    /**
     * This functions takes the acronym of file, finds it filename in $arCssFilesNames
     * And add it to the arIncludedJSFiles
     * 
     * @global type $arJsFilesNames the acronym, pointing to js file name
     * @param string $strFileName
     * @throws Exception
     */
    private function addJSFileName($strFileName) {
        global $arJsFilesNames;
        if(isset($arJsFilesNames[$strFileName])) {
            $this->arIncludedJsFiles[$strFileName]=$arJsFilesNames[$strFileName];
        } else {
            throw new Exception("The path for JS file $strFileName does not exist, add it in configure_static.php.", 404);
        }
    }
    
    /**
     * This functions takes the acronym of file, finds it filename in $arCssFilesNames
     * And add it to the arIncludedCssFiles
     * 
     * @global array $arCssFilesNames the acronym, pointing to css file name
     * @param string $strFileName
     * @throws Exception
     */
    private function addCSSFileName($strFileName) {
        global $arCssFilesNames;
        if(isset($arCssFilesNames[$strFileName])) {
            // Add the css file name 
            $this->arIncludedCssFiles[$strFileName]=$arCssFilesNames[$strFileName];
        } else {
            throw new Exception("The path for CSS file $strFileName does not exist, add it in configure_static.php.", 404);
        }
    }
    

    /**
     * Adds the required js file corresponding to the acronym
     * 
     * @param string $strFileName e.g. bootstrap will add bootstrap.js (as per configure_static.php mapping)
     */
    public static function addJS($strFileName) {
        $obj = self::initialize();
        $obj->addJSFileName($strFileName);
    }
    
    /**
     * Adds the required css file corresponding to the acronym
     * 
     * @param string $strFileName e.g. bootstrap will add bootstrap.css (as per configure_static.php mapping)
     */
    public static function addCSS($strFileName) {
        $obj = self::initialize();
        $obj->addCSSFileName($strFileName);
    }
    
    /**
     * It includes all the JS files in the header section of the html page
     * Uses constant JS_DIR for files path
     */
    public static function includeJSFiles() {
        $obj = self::initialize();
        
        foreach($obj->arIncludedJsFiles as $strJsFile) {
            echo '<script src="'.JS_DIR.$strJsFile.'" type="text/javascript"></script>';
        }
        
    }
    
    /**
     * It includes all the css files in the header section of html page
     * Uses constant CSS_DIR for files path
     */
    public static function includeCSSFiles() {
        $obj = self::initialize();

        foreach($obj->arIncludedCssFiles as $strCssFile) {
            echo '<link href="'.CSS_DIR.$strCssFile.'" rel="stylesheet" type="text/css">';
        }
    }
    
    
}
