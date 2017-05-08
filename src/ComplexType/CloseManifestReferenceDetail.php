<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CloseManifestReferenceDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CloseManifestReferenceDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CloseManifestReferenceDetail';

    /**
     * @param string $type
     * @return CloseManifestReferenceDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $value
     * @return CloseManifestReferenceDetail
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CloseManifestReferenceDetail
     */
    public function setCloseManifestReferenceDetail(array $param) {

        $closeManifestReferenceDetail = new CloseManifestReferenceDetail();
        $closeManifestReferenceDetail->setType($param[0]);
        $closeManifestReferenceDetail->setValue($param[1]);

        return $closeManifestReferenceDetail;
    }

}
