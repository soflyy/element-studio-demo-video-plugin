<?php

namespace BreakdanceCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing(
    "BreakdanceCustomElements\\Mydemoelement", 
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class Mydemoelement extends \Breakdance\Elements\Element
{
    static function uiIcon() 
    {
        return 'SquareIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }
    
    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'MyDemoElement';
    }
    
    static function className()
    {
        return 'breakdance-custom-elements-mydemoelement';
    }

    static function category()
    {
        return 'other';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return false;
    }
    
    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [];
    }
    
    static function contentControls()
    {
        return [];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return false;
    }
    
    static function settings()
    {
        return false;
    }
    
    static function addPanelRules()
    {
        return false;
    }
    
    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return false;
    }
    
    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 0;
    }
    
    static function dynamicPropertyPaths()
    {
        return false;
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }
    
    static function propertyPathsToWhitelistInFlatProps()
    {
        return false;
    }    
    
    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
