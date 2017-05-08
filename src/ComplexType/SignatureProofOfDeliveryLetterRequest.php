<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SignatureProofOfDeliveryFaxRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SignatureProofOfDeliveryLetterRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SignatureProofOfDeliveryLetterRequest';

    /**
     * @param QualifiedTrackingNumber $qualifiedTrackingNumber
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setQualifiedTrackingNumber($qualifiedTrackingNumber) {
        return $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
    }

    /**
     * @param string $additionalComments
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setAdditionalComments($additionalComments) {
        return $this->AdditionalComments = $additionalComments;
    }

    /**
     * @param string $letterFormat
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setLetterFormat($letterFormat) {
        return $this->LetterFormat = $letterFormat;
    }

    /**
     * @param ContactAndAddress $consignee
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setConsignee($consignee) {
        return $this->Consignee = $consignee;
    }

}
