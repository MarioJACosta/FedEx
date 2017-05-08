<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of StorageDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class StorageDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'StorageDetail';

    /**
     * @param string $duration
     * @return StorageDetail
     */
    public function setDuration($duration) {
        return $this->Duration = $duration;
    }

}
