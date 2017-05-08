<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SmartPostShipmentDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'SmartPostShipmentDetail';

    /**
     * @param SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested
     * @return SmartPostShipmentDetail
     */
    public function setProcessingOptionsRequested($processingOptionsRequested) {
        return $this->ProcessingOptionsRequested = $processingOptionsRequested;
    }

    /**
     * @param string $indicia
     * @return SmartPostShipmentDetail
     */
    public function setIndicia($indicia) {
        return $this->Indicia = $indicia;
    }

    /**
     * @param string $ancillaryEndorsement
     * @return SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement($ancillaryEndorsement) {
        return $this->AncillaryEndorsement = $ancillaryEndorsement;
    }

    /**
     * @param string $hubId
     * @return SmartPostShipmentDetail
     */
    public function setHubId($hubId) {
        return $this->HubId = $hubId;
    }

    /**
     * @param string $customerManifestId
     * @return SmartPostShipmentDetail
     */
    public function setCustomerManifestId($customerManifestId) {
        return $this->CustomerManifestId = $customerManifestId;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\SmartPostShipmentDetail
     */
    public function setSmartPostShipmentDetail(array $param) {

        $processingOptionsRequested = new SmartPostShipmentProcessingOptionsRequested();

        $smartPostShipmentDetail = new SmartPostShipmentDetail();
        $smartPostShipmentDetail->setProcessingOptionsRequested($processingOptionsRequested->setOptions($param[0]));
        $smartPostShipmentDetail->setIndicia($param[1]);
        $smartPostShipmentDetail->setAncillaryEndorsement($param[2]);
        $smartPostShipmentDetail->setHubId($param[3]);
        $smartPostShipmentDetail->setCustomerManifestId($param[4]);

        return $smartPostShipmentDetail;
    }

}
