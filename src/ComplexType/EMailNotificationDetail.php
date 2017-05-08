<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of EMailNotificationDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EMailNotificationDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'EMailNotificationDetail';

    /**
     * @param string $aggregationType
     * @return EMailNotificationDetail
     */
    public function setAggregationType($aggregationType) {
        return $this->AggregationType = $aggregationType;
    }

    /**
     * @param string $personalMessage
     * @return EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage) {
        return $this->PersonalMessage = $personalMessage;
    }

    /**
     * @param EMailNotificationRecipient $recipients
     * @return EMailNotificationDetail
     */
    public function setRecipients($recipients) {
        return $this->Recipients = $recipients;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\EMailNotificationDetail
     */
    public function setEMailNotificationDetail(array $param) {

        $eMailNotificationRecipient = new EMailNotificationRecipient();

        $eMailNotificationDetail = new EMailNotificationDetail();
        $eMailNotificationDetail->setAggregationType($param[0]);
        $eMailNotificationDetail->setPersonalMessage($param[1]);
        $eMailNotificationDetail->setRecipients($eMailNotificationRecipient->setEMailNotificationRecipient(array($param[2], $param[3], $param[4], $param[5], $param[6], $param[7])));

        return$eMailNotificationDetail;
    }

}
