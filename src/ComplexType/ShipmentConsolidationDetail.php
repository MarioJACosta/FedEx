<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShipmentConsolidationDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentConsolidationDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentConsolidationDetail';

    /**
     * @param string $relationshipTimestamp
     * @return ShipmentConsolidationDetail
     */
    public function setRelationshipTimestamp($relationshipTimestamp) {
        return $this->RelationshipTimestamp = $relationshipTimestamp;
    }

    /**
     * @param string $type
     * @return ShipmentConsolidationDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $role
     * @return ShipmentConsolidationDetail
     */
    public function setRole($role) {
        return $this->Role = $role;
    }

    /**
     * @param AssociatedTrackingId $associatedTrackingIds
     * @return ShipmentConsolidationDetail
     */
    public function setAssociatedTrackingIds($associatedTrackingIds) {
        return $this->AssociatedTrackingIds = $associatedTrackingIds;
    }

    /**
     * @param ConsolidationSpecialServicesRequested $specialServicesRequested
     * @return ShipmentConsolidationDetail
     */
    public function setSpecialServicesRequested($specialServicesRequested) {
        return $this->SpecialServicesRequested = $specialServicesRequested;
    }

    /**
     * @param ShipmentInternationalDistributionDetail $internationalDistributionDetail
     * @return ShipmentConsolidationDetail
     */
    public function setInternationalDistributionDetail($internationalDistributionDetail) {
        return $this->InternationalDistributionDetail = $internationalDistributionDetail;
    }

    /**
     * @param ShipmentTransborderDistributionDetail $transborderDistributionDetail
     * @return ShipmentConsolidationDetail
     */
    public function setTransborderDistributionDetail($transborderDistributionDetail) {
        return $this->TransborderDistributionDetail = $transborderDistributionDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShipmentConsolidationDetail
     */
    public function setShipmentConsolidationDetail(array $param) {

        $associatedTrackingIds = new AssociatedTrackingId();
        $trackingId = new TrackingId();
        $specialServicesRequested = new ConsolidationSpecialServicesRequested();
        $internationalDistributionDetail = new ShipmentInternationalDistributionDetail();
        $transborderDistributionDetail = new ShipmentTransborderDistributionDetail();

        $shipmentConsolidationDetail = new ShipmentConsolidationDetail();
        $shipmentConsolidationDetail->setRelationshipTimestamp($param[0]);
        $shipmentConsolidationDetail->setType($param[1]);
        $shipmentConsolidationDetail->setRole($param[2]);
        $shipmentConsolidationDetail->setAssociatedTrackingIds($associatedTrackingIds->setTrackingId($trackingId->setTrackingId(array_slice($param, 3, 4))));
        $shipmentConsolidationDetail->setSpecialServicesRequested($specialServicesRequested->setConsolidationSpecialServicesRequested(array_slice($param, 7, 3)));
        $shipmentConsolidationDetail->setInternationalDistributionDetail($internationalDistributionDetail->setShipmentInternationalDistributionDetail(array_slice($param, 10, 66)));
        $shipmentConsolidationDetail->setTransborderDistributionDetail($transborderDistributionDetail->setShipmentTransborderDistributionDetail(array_slice($param, 76, 50)));

        return $shipmentConsolidationDetail;
    }

}
