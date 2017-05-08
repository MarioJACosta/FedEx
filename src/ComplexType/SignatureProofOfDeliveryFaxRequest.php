<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SignatureProofOfDeliveryFaxRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SignatureProofOfDeliveryFaxRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SignatureProofOfDeliveryFaxRequest';

    /**
     * @param QualifiedTrackingNumber $qualifiedTrackingNumber
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setQualifiedTrackingNumber($qualifiedTrackingNumber) {
        return $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
    }

    /**
     * @param string $additionalComments
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setAdditionalComments($additionalComments) {
        return $this->AdditionalComments = $additionalComments;
    }

    /**
     * @param ContactAndAddress $faxSender
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxSender($faxSender) {
        return $this->FaxSender = $faxSender;
    }

    /**
     * @param ContactAndAddress $faxRecipient
     * @return SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxRecipient($faxRecipient) {
        return $this->FaxRecipient = $faxRecipient;
    }

}
