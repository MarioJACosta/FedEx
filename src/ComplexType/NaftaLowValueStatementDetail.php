<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of NaftaLowValueStatementDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class NaftaLowValueStatementDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'NaftaLowValueStatementDetail';

    /**
     * @param string $role
     * @return NaftaLowValueStatementDetail
     */
    public function setRole($role) {
        return $this->Role = $role;
    }

}
