<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * For international multiple piece shipments, commodity information must be passed in the Master and on each child transaction.
 * If this shipment cotains more than four commodities line items, the four highest valued should be included in the first 4 occurances for this request
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Commodity extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Commodity';

    /**
     * @param string $name
     * @return Commodity
     */
    public function setName($name) {
        return $this->Name = $name;
    }

    /**
     * @param integer $numberOfPieces
     * @return Commodity
     */
    public function setNumberOfPieces($numberOfPieces) {
        return $this->NumberOfPieces = $numberOfPieces;
    }

    /**
     * @param string $description
     * @return Commodity
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * @param string $countryOfManufacture
     * @return Commodity
     */
    public function setCountryOfManufacture($countryOfManufacture) {
        return $this->CountryOfManufacture = $countryOfManufacture;
    }

    /**
     * @param string $harmonizedCode
     * @return Commodity
     */
    public function setHarmonizedCode($harmonizedCode) {
        return $this->HarmonizedCode = $harmonizedCode;
    }

    /**
     * @param Weight $weight
     * @return Commodity
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }

    /**
     * @param integer $quantity
     * @return Commodity
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }

    /**
     * @param string $quantityUnits
     * @return Commodity
     */
    public function setQuantityUnits($quantityUnits) {
        return $this->QuantityUnits = $quantityUnits;
    }

    /**
     * @param Money $unitPrice
     * @return Commodity
     */
    public function setUnitPrice($unitPrice) {
        return $this->UnitPrice = $unitPrice;
    }

    /**
     * @param Money $customsValue
     * @return Commodity
     */
    public function setCustomsValue($customsValue) {
        return $this->CustomsValue = $customsValue;
    }

    /**
     * @param Measure $additionalMeasures
     * @return Commodity
     */
    public function setAdditionalMeasures($additionalMeasures) {
        return $this->AdditionalMeasures = $additionalMeasures;
    }

    /**
     * @param EdtExciseCondition $exciseConditions
     * @return Commodity
     */
    public function setExciseConditions($exciseConditions) {
        return $this->ExciseConditions = $exciseConditions;
    }

    /**
     * @param string $exportLicenseNumber
     * @return Commodity
     */
    public function setExportLicenseNumber($exportLicenseNumber) {
        return $this->ExportLicenseNumber = $exportLicenseNumber;
    }

    /**
     * @param Datetime $exportLicenseExpirationDate
     * @return Commodity
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate) {
        return $this->ExportLicenseExpirationDate = $exportLicenseExpirationDate;
    }

    /**
     * @param string $CIMarksAndNumbers
     * @return Commodity
     */
    public function setCIMarksAndNumbers($CIMarksAndNumbers) {
        return $this->CIMarksAndNumbers = $CIMarksAndNumbers;
    }

    /**
     * @param string $partNumber
     * @return Commodity
     */
    public function setPartNumber($partNumber) {
        return $this->PartNumber = $partNumber;
    }

    /**
     * @param NaftaCommodityDetail $naftaDetail
     * @return Commodity
     */
    public function setNaftaDetail($naftaDetail) {
        return $this->NaftaDetail = $naftaDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Commodity
     */
    public function setCommodity(array $param) {
        
        $measures = new Measure();
        $money = new Money();
        $exciseConditions = new EdtExciseCondition();
        $naftaDetail = new NaftaCommodityDetail();
        
        $commodity = new Commodity();
        $commodity->setName($param[0]);
        $commodity->setNumberOfPieces($param[1]);
        $commodity->setDescription($param[2]);
        $commodity->setCountryOfManufacture($param[3]);
        $commodity->setHarmonizedCode($param[4]);
        $commodity->setQuantity($param[5]);
        $commodity->setQuantityUnits($param[6]);
        $commodity->setAdditionalMeasures($measures->setMeasure(array($param[7], $param[8])));
        $commodity->setUnitPrice($money->setMoney(array($param[9], $param[10])));
        $commodity->setCustomsValue($money->setMoney(array($param[11], $param[12])));
        $commodity->setExciseConditions($exciseConditions->setEdtExciseCondition(array($param[13], $param[14])));
        $commodity->setExportLicenseNumber($param[15]);
        $commodity->setExportLicenseExpirationDate($param[16]);
        $commodity->setCIMarksAndNumbers($param[17]);
        $commodity->setPartNumber($param[18]);
        $commodity->setNaftaDetail($naftaDetail->setNaftaCommodityDetail(array($param[19], $param[20], $param[21], $param[22], $param[23], $param[24])));
        
        return $commodity;
    }

}
