<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShippingDocumentEMailRecipient
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShippingDocumentEMailRecipient extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShippingDocumentEMailRecipient';

    /**
     * @param string $recipientType
     * @return type
     */
    public function setRecipientType($recipientType) {
        return $this->RecipientType = $recipientType;
    }

    /**
     * @param string $address
     * @return type
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShippingDocumentEMailRecipient
     */
    public function setShippingDocumentEMailRecipient(array $param) {

        $shippingDocumentEMailRecipient = new ShippingDocumentEMailRecipient();

        $shippingDocumentEMailRecipient->setRecipientType($param[0]);
        $shippingDocumentEMailRecipient->setAddress($param[1]);

        return $shippingDocumentEMailRecipient;
    }

}
