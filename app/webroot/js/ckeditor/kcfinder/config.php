<?php

/** This file is part of KCFinder project
  *
  *      @desc Base configuration file
  *   @package KCFinder
  *   @version 2.21
  *    @author Pavel Tzonkov <pavelc@users.sourceforge.net>
  * @copyright 2010 KCFinder Project
  *   @license http://www.opensource.org/licenses/gpl-2.0.php GPLv2
  *   @license http://www.opensource.org/licenses/lgpl-2.1.php LGPLv2
  *      @link http://kcfinder.sunhater.com
  */

// IMPORTANT!!! Do not remove uncommented settings in this file even if
// you are using session configuration.
// See http://kcfinder.sunhater.com/install for setting descriptions  
include('../../../../Config/my_configs.php');
    if($_SERVER['HTTP_HOST']=='localhost'){
        $site='/LibraryManagement/';
    }
    else{
        $site='/'.$config['base']['sitename'].'/';    
    }

$_CONFIG = array(

    'disabled' => false,
    'readonly' => false,
    'denyZipDownload' => false,

    'theme' => "oxygen",

    'uploadURL' => $site."app/webroot/files",
    //'uploadDir' => "D:/VIET HUNG/PHP/xampp/htdocs/cake/app/webroot/img",
    'uploadDir' =>"",
    
    'dirPerms' => 0755,
    'filePerms' => 0644,

    'deniedExts' => "exe com msi bat php cgi pl",

    'types' => array(

        // CKEditor & FCKEditor types
        'files'   =>  "",
        'flash'   =>  "swf",
        'images'  =>  "*img",

        // TinyMCE types
        'file'    =>  "rar zip doc docx xls xlsx",
        'media'   =>  "swf flv avi mpg mpeg qt mov wmv asf rm",
        'image'   =>  "*img",
    ),

    'mime_magic' => "",

    'maxImageWidth' => 1200,
    'maxImageHeight' => 1200,

    'thumbWidth' => 100,
    'thumbHeight' => 100,

    'thumbsDir' => "thumbs_",

    'jpegQuality' => 100,

    'cookieDomain' => "",
    'cookiePath' => "",
    'cookiePrefix' => 'KCFINDER_',

    // THE FOLLOWING SETTINGS CANNOT BE OVERRIDED WITH SESSION CONFIGURATION

    '_check4htaccess' => true,
    //'_tinyMCEPath' => "/tiny_mce",

    '_sessionVar' => &$_SESSION['KCFINDER'],
    //'_sessionLifetime' => 30,
    //'_sessionDir' => "/full/directory/path",

    //'_sessionDomain' => ".mysite.com",
    //'_sessionPath' => "/my/path",
);

?>