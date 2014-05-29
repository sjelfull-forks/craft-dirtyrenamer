<?php
namespace Craft;

class DirtyrenamerPlugin extends BasePlugin
{
    function init(){
        // $config = include
        if (craft()->request->isCpRequest())
        {
            $vars = include_once('config.php');
            $js = "";
            
            foreach($vars as $key => $value){
            $js .= <<<EOT
$("{$key}").html("{$value}");
EOT;
            }
            craft()->templates->includeJs($js);

        }
    }

    function getName()
    {
         return Craft::t('Dirty Renamer');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Holpac';
    }

    function getDeveloperUrl()
    {
        return 'http://holpac.com';
    }
}