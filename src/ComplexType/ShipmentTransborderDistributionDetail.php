<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShipmentTransborderDistributionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentTransborderDistributionDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentTransborderDistributionDetail';

    /**
     * @param TransborderDistributionSpecialServicesRequested $specialServicesRequested
     * @return ShipmentTransborderDistributionDetail
     */
    public function setSpecialServicesRequested($specialServicesRequested) {
        return $this->SpecialServicesRequested = $specialServicesRequested;
    }

    /**
     * @param TransborderDistributionSummaryDetail $summaryDetail
     * @return ShipmentTransborderDistributionDetail
     */
    public function setSummaryDetail($summaryDetail) {
        return $this->SummaryDetail = $summaryDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShipmentTransborderDistributionDetail
     */
    public function setShipmentTransborderDistributionDetail(array $param) {

        $specialServicesRequested = new TransborderDistributionSpecialServicesRequested();
        $summaryDetail = new TransborderDistributionSummaryDetail();

        $shipmentTransborderDistributionDetail = new ShipmentTransborderDistributionDetail();
        $shipmentTransborderDistributionDetail->setSpecialServicesRequested($specialServicesRequested->setTransborderDistributionSpecialServicesRequested(array_slice($param, 0, 34)));
        $shipmentTransborderDistributionDetail->setSummaryDetail($summaryDetail->setTransborderDistributionSummaryDetail(array_slice($param, 34, 16)));

        return $shipmentTransborderDistributionDetail;
    }

}
