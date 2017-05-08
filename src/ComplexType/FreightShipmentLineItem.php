<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of an individual commodity or class of content in a shipment.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightShipmentLineItem extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'FreightShipmentLineItem';

    /**
     * @param string $freightClass
     * @return FreightShipmentLineItem
     */
    public function setFreightClass($freightClass) {
        return $this->FreightClass = $freightClass;
    }

    /**
     * @param string $packaging
     * @return FreightShipmentLineItem
     */
    public function setPackaging($packaging) {
        return $this->Packaging = $packaging;
    }

    /**
     * @param string $description
     * @return FreightShipmentLineItem
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * @param Weight $weight
     * @return FreightShipmentLineItem
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }

    /**
     * @param Dimensions $dimensions
     * @return FreightShipmentLineItem
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }

    /**
     * @param Volume $volume
     * @return FreightShipmentLineItem
     */
    public function setVolume($volume) {
        return $this->Volume = $volume;
    }

    /**
     * @param boolean $classProvidedByCustomer
     * @return FreightShipmentLineItem
     */
    public function setClassProvidedByCustomer($classProvidedByCustomer) {
        return $this->ClassProvidedByCustomer = $classProvidedByCustomer;
    }

    /**
     * @param integer $handlingUnits
     * @return FreightShipmentLineItem
     */
    public function setHandlingUnits($handlingUnits) {
        return $this->HandlingUnits = $handlingUnits;
    }

    /**
     * @param integer $pieces
     * @return FreightShipmentLineItem
     */
    public function setPieces($pieces) {
        return $this->Pieces = $pieces;
    }

    /**
     * @param string $nmfcCode
     * @return FreightShipmentLineItem
     */
    public function setNmfcCode($nmfcCode) {
        return $this->NmfcCode = $nmfcCode;
    }

    /**
     * @param string $hazardousMaterials
     * @return FreightShipmentLineItem
     */
    public function setHazardousMaterials($hazardousMaterials) {
        return $this->HazardousMaterials = $hazardousMaterials;
    }

    /**
     * @param string $purchaseOrderNumber
     * @return FreightShipmentLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber) {
        return $this->PurchaseOrderNumber = $purchaseOrderNumber;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\FreightShipmentLineItem
     */
    public function setFreightShipmentLineItem(array $param) {

        $weight = new Weight();
        $dimensions = new Dimensions();
        $volume = new Volume();

        $freightShipmentLineItem = new FreightShipmentLineItem();
        $freightShipmentLineItem->setFreightClass($param[0]);
        $freightShipmentLineItem->setClassProvidedByCustomer($param[1]);
        $freightShipmentLineItem->setHandlingUnits($param[2]);
        $freightShipmentLineItem->setPackaging($param[3]);
        $freightShipmentLineItem->setPieces($param[4]);
        $freightShipmentLineItem->setNmfcCode($param[5]);
        $freightShipmentLineItem->setHazardousMaterials($param[6]);
        $freightShipmentLineItem->setPurchaseOrderNumber($param[7]);
        $freightShipmentLineItem->setDescription($param[8]);
        $freightShipmentLineItem->setWeight($weight->setWeight(array_slice($param, 9, 2)));
        $freightShipmentLineItem->setDimensions($dimensions->setDimensions(array_slice($param, 11, 4)));
        $freightShipmentLineItem->setVolume($volume->setVolume(array_slice($param, 15, 2)));

        return $freightShipmentLineItem;
    }

}
