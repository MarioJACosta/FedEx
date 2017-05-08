<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeliveryOnInvoiceAcceptanceDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeliveryOnInvoiceAcceptanceDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeliveryOnInvoiceAcceptanceDetail';

    /**
     * @param Party $recipient
     * @return DeliveryOnInvoiceAcceptanceDetail
     */
    public function setRecipient($recipient) {
        return $this->Recipient = $recipient;
    }

    /**
     * @param TrackingId $trackingId
     * @return DeliveryOnInvoiceAcceptanceDetail
     */
    public function setTrackingId($trackingId) {
        return $this->TrackingId = $trackingId;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(array $param) {

        $party = new Party();
        $trackingId = new TrackingId();

        $deliveryOnInvoiceAcceptanceDetail = new DeliveryOnInvoiceAcceptanceDetail();
        $deliveryOnInvoiceAcceptanceDetail->setRecipient($party->setParty(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26])));
        $deliveryOnInvoiceAcceptanceDetail->setTrackingId($trackingId->setTrackingId(array($param[27], $param[28], $param[29], $param[30])));

        return $deliveryOnInvoiceAcceptanceDetail;
    }

}
