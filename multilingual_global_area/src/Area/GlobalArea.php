<?php
namespace Concrete\Package\MultilingualGlobalArea\Src\Area;

use Concrete\Core\Area\GlobalArea as CoreGlobalArea;
use Concrete\Core\Multilingual\Page\Section\Section as MultilingualSection;
use Localization;
use Punic\Language;
use Punic\Data;

class GlobalArea extends CoreGlobalArea
{
    public function __construct($arHandle)
    {
        $ms = MultilingualSection::getCurrentSection();
        if (is_object($ms)) {
            $locale = $ms->getLocale();
        } else {
            $locale = Localization::activeLocale();
        }
        $fallBackLocale = Data::getFallbackLocale();
        if ($locale != $fallBackLocale) {
            $locName = Language::getName($locale, $fallBackLocale);
            $arHandle = $arHandle . ' ' . $locName;
        }
        $this->arHandle = $arHandle;
    }
}