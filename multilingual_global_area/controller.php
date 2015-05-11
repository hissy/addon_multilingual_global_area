<?php
namespace Concrete\Package\MultilingualGlobalArea;

use Concrete\Core\Foundation\ClassAliasList;

class Controller extends \Concrete\Core\Package\Package
{
    protected $pkgHandle = 'multilingual_global_area';
    protected $appVersionRequired = '5.7.4';
    protected $pkgVersion = '0.2';
    protected $pkgAutoloaderMapCoreExtensions = true;

    public function getPackageDescription()
    {
        return t("Generate Global Areas for each language section on a multilingual site.");
    }

    public function getPackageName()
    {
        return t("Multilingual Global Area");
    }

    public function on_start()
    {
        $list = ClassAliasList::getInstance();
        $list->register('GlobalArea', '\Concrete\Package\MultilingualGlobalArea\Area\GlobalArea');
    }

}