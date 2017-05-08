<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Validate recipient address information before you ship a package
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AddressValidationRequest extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'AddressValidationRequest';

    /**
     * @param DateTime $inEffectAsOfTimestamp
     * @return AddressValidationRequest
     */
    public function setInEffectAsOfTimestamp($inEffectAsOfTimestamp) {
        return $this->InEffectAsOfTimestamp = $inEffectAsOfTimestamp;
    }

    /**
     * @param AddressesToValidate $addressesToValidate
     * @return AddressValidationRequest
     */
    public function setAddressesToValidate($addressesToValidate) {
        return $this->AddressesToValidate = $addressesToValidate;
    }

}
