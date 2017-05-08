<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ExpressFreightDetailContact
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExpressFreightDetailContact extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ExpressFreightDetailContact';

    /**
     * @param string $name
     * @return ExpressFreightDetailContact
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param string $phone
     * @return ExpressFreightDetailContact
     */
    public function setPhone($phone) {
        return $this->Phone = $phone;
    }

}
