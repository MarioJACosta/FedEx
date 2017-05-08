<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadDocumentReferenceDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadDocumentReferenceDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadDocumentReferenceDetail';

    /**
     * @param integer $lineNumber
     * @return UploadDocumentReferenceDetail
     */
    public function setLineNumber($lineNumber) {
        return $this->LineNumber = $lineNumber;
    }

    /**
     * @param string $customerReference
     * @return UploadDocumentReferenceDetail
     */
    public function setCustomerReference($customerReference) {
        return $this->CustomerReference = $customerReference;
    }

    /**
     * @param string $description
     * @return UploadDocumentReferenceDetail
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * @param string $documentProducer
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentProducer($documentProducer) {
        return $this->DocumentProducer = $documentProducer;
    }

    /**
     * @param string $documentType
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentType($documentType) {
        return $this->DocumentType = $documentType;
    }

    /**
     * @param string $documentId
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentId($documentId) {
        return $this->DocumentId = $documentId;
    }

    /**
     * @param string $documentIdProducer
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentIdProducer($documentIdProducer) {
        return $this->DocumentIdProducer = $documentIdProducer;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadDocumentReferenceDetail
     */
    public function setUploadDocumentReferenceDetail(array $param) {
        $uploadDocumentReferenceDetail = new UploadDocumentReferenceDetail();

        $uploadDocumentReferenceDetail->setLineNumber($param[0]);
        $uploadDocumentReferenceDetail->setCustomerReference($param[1]);
        $uploadDocumentReferenceDetail->setDescription($param[2]);
        $uploadDocumentReferenceDetail->setDocumentProducer($param[3]);
        $uploadDocumentReferenceDetail->setDocumentType($param[4]);
        $uploadDocumentReferenceDetail->setDocumentId($param[5]);
        $uploadDocumentReferenceDetail->setDocumentIdProducer($param[6]);

        return $uploadDocumentReferenceDetail;
    }

}
