<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ReturnAssociationDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ReturnAssociationDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ReturnAssociationDetail';

    /**
     * @param string $trackingNumber
     * @return ReturnAssociationDetail
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }

    /**
     * @param Datetime $shipDate
     * @return ReturnAssociationDetail
     */
    public function setShipDate($shipDate) {
        return $this->ShipDate = $shipDate;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ReturnAssociationDetail
     */
    public function setReturnAssociationDetail(array $param) {
        $returnAssociationDetail = new ReturnAssociationDetail();
        $returnAssociationDetail->setTrackingNumber($param[0]);
        $returnAssociationDetail->setShipDate($param[1]);

        return $returnAssociationDetail;
    }

}
