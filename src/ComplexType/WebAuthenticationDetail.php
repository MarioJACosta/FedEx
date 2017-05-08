<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Web authentication 
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class WebAuthenticationDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'WebAuthenticationDetail';

    /**
     * @param WebAuthenticationCredential $parentCredential
     * @return WebAuthenticationDetail
     */
    public function setParentCredential($parentCredential) {
        return $this->ParentCredential = $parentCredential;
    }

    /**
     * @param WebAuthenticationCredential $userCredential
     * @return WebAuthenticationDetail
     */
    public function setUserCredential($userCredential) {
        return $this->UserCredential = $userCredential;
    }

}
