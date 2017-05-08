<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TrackSelectionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TrackSelectionDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TrackSelectionDetail';

    /**
     * @param string $carrierCode
     * @return TrackSelectionDetail
     */
    public function setCarrierCode($carrierCode) {
        return $this->CarrierCode = $carrierCode;
    }

    /**
     * @param string $operatingCompany
     * @return TrackSelectionDetail
     */
    public function setOperatingCompany($operatingCompany) {
        return $this->OperatingCompany = $operatingCompany;
    }

    /**
     * @param TrackPackageIdentifier $packageIdentifier
     * @return TrackSelectionDetail
     */
    public function setPackageIdentifier($packageIdentifier) {
        return $this->PackageIdentifier = $packageIdentifier;
    }

    /**
     * @param string $trackingNumberUniqueIdentifier
     * @return TrackSelectionDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier) {
        return $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
    }

    /**
     * @param Datetime $shipDateRangeBegin
     * @return TrackSelectionDetail
     */
    public function setShipDateRangeBegin($shipDateRangeBegin) {
        return $this->ShipDateRangeBegin = $shipDateRangeBegin;
    }

    /**
     * @param Datetime $shipDateRangeEnd
     * @return TrackSelectionDetail
     */
    public function setShipDateRangeEnd($shipDateRangeEnd) {
        return $this->ShipDateRangeEnd = $shipDateRangeEnd;
    }

    /**
     * @param string $shipmentAccountNumber
     * @return TrackSelectionDetail
     */
    public function setShipmentAccountNumber($shipmentAccountNumber) {
        return $this->ShipmentAccountNumber = $shipmentAccountNumber;
    }

    /**
     * @param string $secureSpodAccount
     * @return TrackSelectionDetail
     */
    public function setSecureSpodAccount($secureSpodAccount) {
        return $this->SecureSpodAccount = $secureSpodAccount;
    }

    /**
     * @param Address $destination
     * @return TrackSelectionDetail
     */
    public function setDestination($destination) {
        return $this->Destination = $destination;
    }

    /**
     * @param PagingDetail $pagingDetail
     * @return TrackSelectionDetail
     */
    public function setPagingDetail($pagingDetail) {
        return $this->PagingDetail = $pagingDetail;
    }

    /**
     * @param integer $customerSpecifiedTimeOutValueInMilliseconds
     * @return TrackSelectionDetail
     */
    public function setCustomerSpecifiedTimeOutValueInMilliseconds($customerSpecifiedTimeOutValueInMilliseconds) {
        return $this->PagingDetail = $customerSpecifiedTimeOutValueInMilliseconds;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\TrackSelectionDetail
     */
    public function setTrackSelectionDetail(array $param) {

        $packageIdentifier = new TrackPackageIdentifier();
        $address = new Address();
        $pagingDetail = new PagingDetail();

        $trackSelectionDetail = new TrackSelectionDetail();
        $trackSelectionDetail->setCarrierCode($param[0]);
        $trackSelectionDetail->setOperatingCompany($param[1]);
        $trackSelectionDetail->setPackageIdentifier($packageIdentifier->setTrackPackageIdentifier(array($param[2], $param[3])));
        $trackSelectionDetail->setTrackingNumberUniqueIdentifier($param[4]);
        $trackSelectionDetail->setShipDateRangeBegin($param[5]);
        $trackSelectionDetail->setShipDateRangeEnd($param[6]);
        $trackSelectionDetail->setShipmentAccountNumber($param[7]);
        $trackSelectionDetail->setSecureSpodAccount($param[8]);
        $trackSelectionDetail->setDestination($address->setAddress(array($param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19])));
        $trackSelectionDetail->setPagingDetail($pagingDetail->setPagingDetail(array($param[20], $param[21])));
        $trackSelectionDetail->setCustomerSpecifiedTimeOutValueInMilliseconds($param[22]);

        return $trackSelectionDetail;
    }

}
