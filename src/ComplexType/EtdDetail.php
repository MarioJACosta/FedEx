<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of EtdDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EtdDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'EtdDetail';

    /**
     * @param string $confirmation
     * @return EtdDetail
     */
    public function setConfirmation($confirmation) {
        return $this->Confirmation = $confirmation;
    }

    /**
     * @param string $requestedDocumentCopies
     * @return EtdDetail
     */
    public function setRequestedDocumentCopies($requestedDocumentCopies) {
        return $this->RequestedDocumentCopies = $requestedDocumentCopies;
    }

    /**
     * @param UploadDocumentDetail $documents
     * @return EtdDetail
     */
    public function setDocuments($documents) {
        return $this->Documents = $documents;
    }

    /**
     * @param UploadDocumentDetail $documentReferences
     * @return EtdDetail
     */
    public function setDocumentReferences($documentReferences) {
        return $this->DocumentReferences = $documentReferences;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\EtdDetail
     */
    public function setEtdDetail(array $param) {

        $uploadDocumentDetail = new UploadDocumentDetail();
        $uploadDocumentReferenceDetail = new UploadDocumentReferenceDetail();

        $etdDetail = new EtdDetail();
        $etdDetail->setConfirmation($param[0]);
        $etdDetail->setRequestedDocumentCopies($param[1]);
        $etdDetail->setDocuments($uploadDocumentDetail->setUploadDocumentDetail(array($param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8])));
        $etdDetail->setDocumentReferences($uploadDocumentReferenceDetail->setUploadDocumentReferenceDetail(array($param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15])));

        return $etdDetail;
    }

}
