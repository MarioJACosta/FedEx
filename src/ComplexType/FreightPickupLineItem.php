<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of FreightPickupLineItem
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightPickupLineItem extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FreightPickupLineItem';

    /**
     * @param string $service
     * @return FreightPickupLineItem
     */
    public function setService($service) {
        return $this->Service = $service;
    }

    /**
     * @param integer $sequenceNumber
     * @return FreightPickupLineItem
     */
    public function setSequenceNumber($sequenceNumber) {
        return $this->SequenceNumber = $sequenceNumber;
    }

    /**
     * @param Address $destination
     * @return FreightPickupLineItem
     */
    public function setDestination($destination) {
        return $this->Destination = $destination;
    }

    /**
     * @param string $packaging
     * @return FreightPickupLineItem
     */
    public function setPackaging($packaging) {
        return $this->Packaging = $packaging;
    }

    /**
     * @param integer $pieces
     * @return FreightPickupLineItem
     */
    public function setPieces($pieces) {
        return $this->Pieces = $pieces;
    }

    /**
     * @param Weight $weight
     * @return FreightPickupLineItem
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }

    /**
     * @param integer $totalHandlingUnits
     * @return FreightPickupLineItem
     */
    public function setTotalHandlingUnits($totalHandlingUnits) {
        return $this->TotalHandlingUnits = $totalHandlingUnits;
    }

    /**
     * @param string $purchaseOrderNumber
     * @return FreightPickupLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber) {
        return $this->PurchaseOrderNumber = $purchaseOrderNumber;
    }

    /**
     * @param boolean $justOneMore
     * @return FreightPickupLineItem
     */
    public function setJustOneMore($justOneMore) {
        return $this->JustOneMore = $justOneMore;
    }

    /**
     * @param ShipmentSpecialServicesRequested $specialServicesRequested
     * @return FreightPickupLineItem
     */
    public function setSpecialServicesRequested($specialServicesRequested) {
        return $this->SpecialServicesRequested = $specialServicesRequested;
    }

    /**
     * @param string $description
     * @return FreightPickupLineItem
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

}
