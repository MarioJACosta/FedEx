<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of EMailLabelDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EMailLabelDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'EMailLabelDetail';

    /**
     * @param string $message
     * @return EMailLabelDetail
     */
    public function setMessage($message) {
        return $this->Message = $message;
    }

    /**
     * @param string $recipients
     * @return EMailLabelDetail
     */
    public function setRecipients($recipients) {
        return $this->Recipients = $recipients;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\EMailLabelDetail
     */
    public function setEMailLabelDetail(array $param) {

        $eMailLabelDetail = new EMailLabelDetail();
        $eMailLabelDetail->setMessage($param[0]);
        $eMailLabelDetail->setRecipients($param[1]);

        return $eMailLabelDetail;
    }

}
