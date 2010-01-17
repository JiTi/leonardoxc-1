<?
// opMode 
// 1 = PHPnuke module
// 2 = phbb2 module only phpBB2 NOT phpBB3
// 3 = standalone -- still work in progress
// 4 = discuz
// 5 = joomla  1.0 and 1.5
// 6 = phpbb3
$opMode= 2; 

// these are needed for joomla  
if ($opMode==5) {
	$CONF_use_own_template=1;
	define( 'JPATH_BASE', realpath(dirname(__FILE__).'/../..') );
}

// the method to use for links in the menu and other parts of leonardo
// 1 -> current old way, using &name=value args + session variables
// 2 -> same as 1 but all sessions vars are in the url, this means that the url 
// 3 -> SEO urls

//  NOTE , THESE ARE THE DEFAULT VALUES , DONT CHANGE THEM ,
//  INSTEAD EDIT THE FILE config_mod_rewrite.php either manually
//  or from "admin"->"SEO Urls"
$CONF['links']['type']=1;
$CONF['links']['baseURL']='/leonardo';
if ( in_array($opMode,array(2,6,3,5)) ) { 
        //  NOTE !!!!!! SEO URLS are only compatible with opmodes 2 6  (phpbb) 3 (standalone) and 5 (joomla , but not inside the joomla template)
        @include dirname(__FILE__).'/config_mod_rewrite.php';
}


// override 
if ( defined('Leonardo_op_mode') ) $opMode= Leonardo_op_mode; 

$CONF_isMasterServer=0; 
?>