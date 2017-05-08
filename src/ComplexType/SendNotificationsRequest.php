<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SendNotificationsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SendNotificationsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SendNotificationsRequest';

    /**
     * @param string $trackingNumber
     * @return SendNotificationsRequest
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }

    /**
     * @param boolean $multiPiece
     * @return SendNotificationsRequest
     */
    public function setMultiPiece($multiPiece) {
        return $this->MultiPiece = $multiPiece;
    }

    /**
     * @param string $pagingToken
     * @return SendNotificationsRequest
     */
    public function setPagingToken($pagingToken) {
        return $this->PagingToken = $pagingToken;
    }

    /**
     * @param string $trackingNumberUniqueId
     * @return SendNotificationsRequest
     */
    public function setTrackingNumberUniqueId($trackingNumberUniqueId) {
        return $this->TrackingNumberUniqueId = $trackingNumberUniqueId;
    }

    /**
     * @param Datetime $shipDateRangeBegin
     * @return SendNotificationsRequest
     */
    public function setShipDateRangeBegin($shipDateRangeBegin) {
        return $this->ShipDateRangeBegin = $shipDateRangeBegin;
    }

    /**
     * @param Datetime $shipDateRangeEnd
     * @return SendNotificationsRequest
     */
    public function setShipDateRangeEnd($shipDateRangeEnd) {
        return $this->ShipDateRangeEnd = $shipDateRangeEnd;
    }

    /**
     * @param string $senderEMailAddress
     * @return SendNotificationsRequest
     */
    public function setSenderEMailAddress($senderEMailAddress) {
        return $this->SenderEMailAddress = $senderEMailAddress;
    }

    /**
     * @param string $senderContactName
     * @return SendNotificationsRequest
     */
    public function setSenderContactName($senderContactName) {
        return $this->SenderContactName = $senderContactName;
    }

    /**
     * @param EMailNotificationDetail $notificationDetail
     * @return SendNotificationsRequest
     */
    public function setNotificationDetail($notificationDetail) {
        return $this->NotificationDetail = $notificationDetail;
    }

}
