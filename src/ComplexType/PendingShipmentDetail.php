<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PendingShipmentDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PendingShipmentDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PendingShipmentDetail';

    /**
     * @param string $type
     * @return PendingShipmentDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param Datetime $expirationDate
     * @return PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate) {
        return $this->ExpirationDate = $expirationDate;
    }

    /**
     * @param EMailLabelDetail $emailLabelDetail
     * @return PendingShipmentDetail
     */
    public function setEmailLabelDetail($emailLabelDetail) {
        return $this->EmailLabelDetail = $emailLabelDetail;
    }

    /**
     * @param PendingShipmentProcessingOptionsRequested $processingOptions
     * @return PendingShipmentDetail
     */
    public function setProcessingOptions($processingOptions) {
        return $this->ProcessingOptions = $processingOptions;
    }

    /**
     * @param RecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return PendingShipmentDetail
     */
    public function setRecommendedDocumentSpecification($recommendedDocumentSpecification) {
        return $this->RecommendedDocumentSpecification = $recommendedDocumentSpecification;
    }

    /**
     * @param UploadDocumentReferenceDetail $documentReferences
     * @return PendingShipmentDetail
     */
    public function setDocumentReferences($documentReferences) {
        return $this->DocumentReferences = $documentReferences;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\PendingShipmentDetail
     */
    public function setPendingShipmentDetail(array $param) {

        $emailLabelDetail = new EMailLabelDetail();
        $pendingShipmentProcessingOptionsRequested = new PendingShipmentProcessingOptionsRequested();
        $recommendedDocumentSpecification = new RecommendedDocumentSpecification();
        $uploadDocumentReferenceDetail = new UploadDocumentReferenceDetail();

        $pendingShipmentDetail = new PendingShipmentDetail();
        $pendingShipmentDetail->setType($param[0]);
        $pendingShipmentDetail->setExpirationDate($param[1]);
        $pendingShipmentDetail->setEmailLabelDetail($emailLabelDetail->setEMailLabelDetail(array($param[2], $param[3])));
        $pendingShipmentDetail->setProcessingOptions($pendingShipmentProcessingOptionsRequested->setOptions($param[4]));
        $pendingShipmentDetail->setRecommendedDocumentSpecification($recommendedDocumentSpecification->setTypes($param[5]));
        $pendingShipmentDetail->setDocumentReferences($uploadDocumentReferenceDetail);

        return $pendingShipmentDetail;
    }

}
