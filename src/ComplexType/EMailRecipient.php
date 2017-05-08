<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of EMailRecipient
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EMailRecipient extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'EMailRecipient';
    
    /**
     * @param string $emailAddress
     * @return EMailRecipient
     */
    public function setEmailAddress($emailAddress) {
        return $this->EmailAddress = $emailAddress;
    }
    
    /**
     * @param string $role
     * @return EMailRecipient
     */
    public function setRole($role) {
        return $this->Role = $role;
    }
    
    /**
     * @param EmailOptionsRequested $optionsRequested
     * @return EMailRecipient
     */
    public function setOptionsRequested($optionsRequested) {
        return $this->OptionsRequested = $optionsRequested;
    }
    
    /**
     * @param Localization $localization
     * @return EMailRecipient
     */
    public function setLocalization($localization) {
        return $this->Localization = $localization;
    }

}
