<?php
/**
 * Check if the provided $url to check is the current url.
 * <br>
 * The url to check is only the filename inthe root directory.
 * This may not work for checking url inside the backend directory.
 */
function isUrlActive($urlToCheck = "/"){

    //get the hosting domain postfix
    $params = explode("/",$_SERVER["REQUEST_URI"]);
    //fix the complete url
    $theUrl = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/".$params[1]."/".$urlToCheck;
    //get the current url
    $currentUrl = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

    if($theUrl == $currentUrl){

        return true;
    }else{
        return false;
    }
}

/**
 * Uses js to redirect the page to the specific url
 *
 * @param string $url
 */
function redirectTo($url = ""){
    if($url == ""){
        // what! do nothing
    }
    else{
        //we redirect, should redirect with javascript and not header.
        $prefix = '<script type="text/javascript">window.location.href= "';
        $postFix = '"; </script>';
        echo $prefix.$url.$postFix;
    }
}

/**
 * Redirects the page to the specific url
 *
 * @param $url
 */
function redirect($url){
    header("location:".$url);
}

function getCurrentDate($format = "Y-m-d H:i:s"){
    date_default_timezone_set(TIME_ZONE);
    return date($format);
}

/**
 * @param $infected
 * @return string
 */
function sanitize($infected){
    $var = htmlspecialchars(trim(encodeString($infected)));
    return $var;
}

function sanitizeEditorContent($infected){
    $var = trim(encodeString($infected));
    return $var;
}

function encodeString($string) {
    $entities = array('\"',"\'","\;", "\:","\&", "\=","\/","\%",);
    $replacements = array('"',"'",";", ":","&", "=","/","%",);
    return str_replace($replacements, $entities, $string);
}

function getCurrentDateTime(){
    date_default_timezone_set(TIME_ZONE);
    return date("Y-m-d h:i:s");
}

/**
 * Prints data in pretty format.
 *
 * @param $dataToPrint , probably should be array to see the actual impact
 * @param bool $dumpType } | should we print the type of the variable
 */
function pretty($dataToPrint, $dumpType = false){

    echo "<pre>";
    if($dumpType){
        var_dump($dataToPrint);
    }else{
        print_r($dataToPrint);
    }
    echo "</pre>";

}

/**
 * Will include all the files and directory from the given directory path
 * @param $directoryPath
 */
function includeFiles($directoryPath){
    $files = scandir($directoryPath);
    foreach ($files as $key => $file){
        if($key > 1){
            $filePath = $directoryPath.$file;
            if(is_dir($filePath)){
                includeFiles($filePath."/");
            }
            else{
                include_once $filePath;
            }
        }
    }
}