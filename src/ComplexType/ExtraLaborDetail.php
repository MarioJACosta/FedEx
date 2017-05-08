<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ExtraLaborDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExtraLaborDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ExtraLaborDetail';

    /**
     * @param string $duration
     * @return ExtraLaborDetail
     */
    public function setDuration($duration) {
        return $this->Duration = $duration;
    }

}
