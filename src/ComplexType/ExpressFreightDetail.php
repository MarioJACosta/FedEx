<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ExpressFreightDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExpressFreightDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ExpressFreightDetail';

    /**
     * @param boolean $packingListEnclosed
     * @return ExpressFreightDetail
     */
    public function setPackingListEnclosed($packingListEnclosed) {
        return $this->PackingListEnclosed = $packingListEnclosed;
    }

    /**
     * @param integer $shippersLoadAndCount
     * @return ExpressFreightDetail
     */
    public function setShippersLoadAndCount($shippersLoadAndCount) {
        return $this->ShippersLoadAndCount = $shippersLoadAndCount;
    }

    /**
     * @param string $bookingConfirmationNumber
     * @return ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber) {
        return $this->BookingConfirmationNumber = $bookingConfirmationNumber;
    }

    /**
     * @param boolean $referenceLabelRequested
     * @return ExpressFreightDetail
     */
    public function setReferenceLabelRequested($referenceLabelRequested) {
        return $this->ReferenceLabelRequested = $referenceLabelRequested;
    }

    /**
     * @param ExpressFreightDetailContact $beforeDeliveryContact
     * @return ExpressFreightDetail
     */
    public function setBeforeDeliveryContact($beforeDeliveryContact) {
        return $this->BeforeDeliveryContact = $beforeDeliveryContact;
    }

    /**
     * @param ExpressFreightDetailContact $undeliverableContact
     * @return ExpressFreightDetail
     */
    public function setUndeliverableContact($undeliverableContact) {
        return $this->UndeliverableContact = $undeliverableContact;
    }

}
