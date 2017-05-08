<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of QualifiedTrackingNumber
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class QualifiedTrackingNumber extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'QualifiedTrackingNumber';

    /**
     * @param string $trackingNumber
     * @return QualifiedTrackingNumber
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }

    /**
     * @param Datetime $shipDate
     * @return QualifiedTrackingNumber
     */
    public function setShipDate($shipDate) {
        return $this->ShipDate = $shipDate;
    }

    /**
     * @param string $accountNumber
     * @return QualifiedTrackingNumber
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }

    /**
     * @param string $carrier
     * @return QualifiedTrackingNumber
     */
    public function setCarrier($carrier) {
        return $this->Carrier = $carrier;
    }

    /**
     * @param Address $destination
     * @return QualifiedTrackingNumber
     */
    public function setDestination($destination) {
        return $this->Destination = $destination;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\QualifiedTrackingNumber
     */
    public function setQualifiedTrackingNumber(array $param) {

        $address = new Address();

        $qualifiedTrackingNumber = new QualifiedTrackingNumber();
        $qualifiedTrackingNumber->setTrackingNumber($param[0]);
        $qualifiedTrackingNumber->setShipDate($param[1]);
        $qualifiedTrackingNumber->setAccountNumber($param[2]);
        $qualifiedTrackingNumber->setCarrier($param[3]);
        $qualifiedTrackingNumber->setDestination($address->setAddress(array($param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14])));
        
        return $qualifiedTrackingNumber;
    }

}
