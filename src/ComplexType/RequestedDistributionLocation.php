<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RequestedDistributionLocation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RequestedDistributionLocation extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RequestedDistributionLocation';

    /**
     * @param string $id
     * @return RequestedDistributionLocation
     */
    public function setId($id) {
        return $this->Id = $id;
    }

    /**
     * @param string $type
     * @return RequestedDistributionLocation
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $locationId
     * @return RequestedDistributionLocation
     */
    public function setLocationId($locationId) {
        return $this->LocationId = $locationId;
    }

    /**
     * @param integer $locationNumber
     * @return RequestedDistributionLocation
     */
    public function setLocationNumber($locationNumber) {
        return $this->LocationNumber = $locationNumber;
    }

    /**
     * @param ContactAndAddress $locationContactAndAddress
     * @return RequestedDistributionLocation
     */
    public function setLocationContactAndAddress($locationContactAndAddress) {
        return $this->LocationContactAndAddress = $locationContactAndAddress;
    }

    /**
     * @param string $clearanceNumber
     * @return RequestedDistributionLocation
     */
    public function setClearanceNumber($clearanceNumber) {
        return $this->ClearanceNumber = $clearanceNumber;
    }

    /**
     * @param ShipmentInclusionSpecification $inclusionSpecifications
     * @return RequestedDistributionLocation
     */
    public function setInclusionSpecifications($inclusionSpecifications) {
        return $this->InclusionSpecifications = $inclusionSpecifications;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\RequestedDistributionLocation
     */
    public function setRequestedDistributionLocation(array $param) {

        $contactAndAddress = new ContactAndAddress();
        $inclusionSpecifications = new ShipmentInclusionSpecification();

        $requestedDistributionLocation = new RequestedDistributionLocation();

        $requestedDistributionLocation->setId($param[0]);
        $requestedDistributionLocation->setType($param[1]);
        $requestedDistributionLocation->setLocationId($param[2]);
        $requestedDistributionLocation->setLocationNumber($param[3]);
        $requestedDistributionLocation->setLocationContactAndAddress($contactAndAddress->setContactAndAddress(array($param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24])));
        $requestedDistributionLocation->setClearanceNumber($param[25]);
        $requestedDistributionLocation->setInclusionSpecifications($inclusionSpecifications->setShipmentInclusionSpecification(array($param[26], $param[27])));

        return $requestedDistributionLocation;
    }

}
