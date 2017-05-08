<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CloseDocumentSpecification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CloseDocumentSpecification extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CloseDocumentSpecification';

    /**
     * @param string $closeDocumentTypes
     * @return CloseDocumentSpecification
     */
    public function setCloseDocumentTypes($closeDocumentTypes) {
        return $this->CloseDocumentTypes = $closeDocumentTypes;
    }

    /**
     * @param DetailedDeliveryManifestDetail $detailedDeliveryManifestDetail
     * @return CloseDocumentSpecification
     */
    public function setDetailedDeliveryManifestDetail($detailedDeliveryManifestDetail) {
        return $this->DetailedDeliveryManifestDetail = $detailedDeliveryManifestDetail;
    }

    /**
     * @param ManifestDetail $manifestDetail
     * @return CloseDocumentSpecification
     */
    public function setManifestDetail($manifestDetail) {
        return $this->ManifestDetail = $manifestDetail;
    }

    /**
     * @param Op950Detail $Op950Detail
     * @return CloseDocumentSpecification
     */
    public function setOp950Detail($Op950Detail) {
        return $this->Op950Detail = $Op950Detail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CloseDocumentSpecification
     */
    public function setCloseDocumentSpecification(array $param) {

        $closeDocumentSpecification = new CloseDocumentSpecification();
        $closeDocumentSpecification->setCloseDocumentTypes($param[0]);

        switch ($param[0]) {
            case 'DETAILED_DELIVERY_MANIFEST':
                $detailedDeliveryManifestDetail = new DetailedDeliveryManifestDetail();
                $closeDocumentSpecification->setDetailedDeliveryManifestDetail($detailedDeliveryManifestDetail->setDetailedDeliveryManifestDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19])));
                break;

            case 'OP_950':
                $Op950Detail = new Op950Detail();
                $closeDocumentSpecification->setOp950Detail($Op950Detail->setOp950Detail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22])));
                break;
        }

        return $closeDocumentSpecification;
    }

}
