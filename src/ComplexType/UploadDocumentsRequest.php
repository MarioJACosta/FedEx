<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadDocumentsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadDocumentsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadDocumentsRequest';

    /**
     * @param string $originCountryCode
     * @return UploadDocumentsRequest
     */
    public function setOriginCountryCode($originCountryCode) {
        return $this->OriginCountryCode = $originCountryCode;
    }

    /**
     * @param string $destinationCountryCode
     * @return UploadDocumentsRequest
     */
    public function setDestinationCountryCode($destinationCountryCode) {
        return $this->DestinationCountryCode = $destinationCountryCode;
    }

    /**
     * @param string $usage
     * @return UploadDocumentsRequest
     */
    public function setUsage($usage) {
        return $this->Usage = $usage;
    }

    /**
     * @param UploadDocumentDetail $documents
     * @return UploadDocumentsRequest
     */
    public function setDocuments($documents) {
        return $this->Documents = $documents;
    }

}
