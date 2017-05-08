<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeleteTagRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeleteTagRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeleteTagRequest';

    /**
     * @param string $dispatchLocationId
     * @return DeleteTagRequest
     */
    public function setDispatchLocationId($dispatchLocationId) {
        return $this->DispatchLocationId = $dispatchLocationId;
    }

    /**
     * @param Datetime $dispatchDate
     * @return DeleteTagRequest
     */
    public function setDispatchDate($dispatchDate) {
        return $this->DispatchDate = $dispatchDate;
    }

    /**
     * @param Payment $payment
     * @return DeleteTagRequest
     */
    public function setPayment($payment) {
        return $this->Payment = $payment;
    }

    /**
     * @param string $confirmationNumber
     * @return DeleteTagRequest
     */
    public function setConfirmationNumber($confirmationNumber) {
        return $this->ConfirmationNumber = $confirmationNumber;
    }

}
