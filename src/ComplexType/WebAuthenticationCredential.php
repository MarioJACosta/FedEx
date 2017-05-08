<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of WebAuthenticationCredential
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class WebAuthenticationCredential extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'WebAuthenticationCredential';

    /**
     * @param string $key
     * @return WebAuthenticationCredential
     */
    public function setKey($key) {
        return $this->Key = $key;
    }

    /**
     * @param string $password
     * @return WebAuthenticationCredential
     */
    public function setPassword($password) {
        return $this->Password = $password;
    }

}
