<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadDocumentDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadDocumentDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadDocumentDetail';

    /**
     * @param integer $lineNumber
     * @return UploadDocumentDetail
     */
    public function setLineNumber($lineNumber) {
        return $this->LineNumber = $lineNumber;
    }

    /**
     * @param string $customerReference
     * @return UploadDocumentDetail
     */
    public function setCustomerReference($customerReference) {
        return $this->CustomerReference = $customerReference;
    }

    /**
     * @param string $documentProducer
     * @return UploadDocumentDetail
     */
    public function setDocumentProducer($documentProducer) {
        return $this->DocumentProducer = $documentProducer;
    }

    /**
     * @param string $documentType
     * @return UploadDocumentDetail
     */
    public function setDocumentType($documentType) {
        return $this->DocumentType = $documentType;
    }

    /**
     * @param string $fileName
     * @return UploadDocumentDetail
     */
    public function setFileName($fileName) {
        return $this->FileName = $fileName;
    }

    /**
     * @param base64Binary $documentContent
     * @return UploadDocumentDetail
     */
    public function setDocumentContent($documentContent) {
        return $this->DocumentContent = $documentContent;
    }

    /**
     * @param Datetime $expirationDate
     * @return UploadDocumentDetail
     */
    public function setExpirationDate($expirationDate) {
        return $this->ExpirationDate = $expirationDate;
    }

    /**
     * @param string $documentId
     * @return UploadDocumentDetail
     */
    public function setDocumentId($documentId) {
        return $this->DocumentId = $documentId;
    }

    /**
     * @param string $documentIdProducer
     * @return UploadDocumentDetail
     */
    public function setDocumentIdProducer($documentIdProducer) {
        return $this->DocumentIdProducer = $documentIdProducer;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadDocumentDetail
     */
    public function setUploadDocumentDetail(array $param) {

        $uploadDocumentDetail = new UploadDocumentDetail();
        $uploadDocumentDetail->setLineNumber($param[0]);
        $uploadDocumentDetail->setCustomerReference($param[1]);
        $uploadDocumentDetail->setDocumentProducer($param[2]);
        $uploadDocumentDetail->setDocumentType($param[3]);
        $uploadDocumentDetail->setFileName($param[4]);
        $uploadDocumentDetail->setDocumentContent($param[5]);
        $uploadDocumentDetail->setExpirationDate($param[6]);

        return $uploadDocumentDetail;
    }

}
