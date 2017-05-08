<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of EMailNotificationRecipient
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EMailNotificationRecipient extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'EMailNotificationRecipient';

    /**
     * @param string $eMailNotificationRecipientType
     * @return EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType($eMailNotificationRecipientType) {
        return $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
    }

    /**
     * @param string $eMailAddress
     * @return EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }

    /**
     * @param string $notificationEventsRequested
     * @return EMailNotificationRecipient
     */
    public function setNotificationEventsRequested($notificationEventsRequested) {
        return $this->NotificationEventsRequested = $notificationEventsRequested;
    }

    /**
     * @param string $format
     * @return EMailNotificationRecipient
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param Localization $localization
     * @return EMailNotificationRecipient
     */
    public function setLocalization($localization) {
        return $this->Localization = $localization;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\EMailNotificationRecipient
     */
    public function setEMailNotificationRecipient(array $param) {

        $localization = new Localization();

        $eMailNotificationRecipient = new EMailNotificationRecipient();
        $eMailNotificationRecipient->setEMailNotificationRecipientType($param[0]);
        $eMailNotificationRecipient->setEMailAddress($param[1]);
        $eMailNotificationRecipient->setNotificationEventsRequested($param[2]);
        $eMailNotificationRecipient->setFormat($param[3]);
        $eMailNotificationRecipient->setLocalization($localization->setLocalization(array($param[4], $param[5])));

        return $eMailNotificationRecipient;
    }

}
