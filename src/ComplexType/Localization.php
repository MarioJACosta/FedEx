<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the representation of human-readable text.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Localization extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Localization';

    /**
     * @param string $languageCode
     * @return Localization
     */
    public function setLanguageCode($languageCode) {
        return $this->LanguageCode = $languageCode;
    }

    /**
     * @param string $localeCode
     * @return Localization
     */
    public function setLocaleCode($localeCode) {
        return $this->LocaleCode = $localeCode;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Localization
     */
    public function setLocalization(array $param) {
        $localization = new Localization();

        $localization->setLanguageCode($param[0]);
        $localization->setLocaleCode($param[1]);

        return $localization;
    }

}
