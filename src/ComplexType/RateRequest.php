<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RateRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RateRequest extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'RateRequest';
    
    /**
     * @param boolean $returnTransitAndCommit
     * @return RateRequest
     */
    public function setReturnTransitAndCommit ($returnTransitAndCommit ) {
        return $this->ReturnTransitAndCommit = $returnTransitAndCommit;
    }
    
    /**
     * @param string $carrierCodes
     * @return RateRequest
     */
    public function setCarrierCodes($carrierCodes) {
        return $this->CarrierCodes = $carrierCodes;
    }
    
    /**
     * @param string $variableOptions
     * @return RateRequest
     */
    public function setVariableOptions($variableOptions) {
        return $this->VariableOptions = $variableOptions;
    }
    
    /** 
     * @param ConsolidationKey $consolidationKey
     * @return type
     */
    public function setConsolidationKey($consolidationKey) {
        return $this->ConsolidationKey = $consolidationKey;
    }
    
    
    /**
     * @param RequestedShipment $requestedShipment
     * @return RateRequest
     */
    public function setRequestedShipment($requestedShipment) {
        return $this->RequestedShipment = $requestedShipment;
    }

    /**
     * @param \FedEx\Rate\ComplexType\Address $address
     * @return RateRequest
     */
    public function setAddress(Address $address) {
        return $this->Address = $address;
    }

    /**
     * @param \FedEx\Rate\ComplexType\AdditionalLabelsDetail $additionalLabelsDetail
     * @return RateRequest
     */
    public function setAdditionalLabelsDetail(AdditionalLabelsDetail $additionalLabelsDetail) {
        return $this->AdditionalLabelsDetail = $additionalLabelsDetail;
    }

    /**
     * @param \FedEx\Rate\ComplexType\AlcoholDetail $alcoholDetail
     * @return RateRequest
     */
    public function setAlcoholDetail(AlcoholDetail $alcoholDetail) {
        return $this->AlcoholDetail = $alcoholDetail;
    }

    /**
     * @param \FedEx\Rate\ComplexType\BrokerDetail $broker
     * @return RateRequest
     */
    public function setBrokerDetail(BrokerDetail $broker) {
        return $this->BrokerDetail = $broker;
    }

    /**
     * @param \FedEx\Rate\ComplexType\CertificateOfOriginDetail $certificateOfOriginDetail
     * @return RateRequest
     */
    public function setCertificateOfOriginDetail(CertificateOfOriginDetail $certificateOfOriginDetail) {
        return $this->CertificateOfOriginDetail = $certificateOfOriginDetail;
    }

}
