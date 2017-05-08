<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShippingDocumentEMailDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShippingDocumentEMailDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShippingDocumentEMailDetail';

    /**
     * @param ShippingDocumentEMailRecipient $eMailRecipients
     * @return ShippingDocumentEMailDetail
     */
    public function setEMailRecipients($eMailRecipients) {
        return $this->EMailRecipients = $eMailRecipients;
    }

    /**
     * @param string $grouping
     * @return ShippingDocumentEMailDetail
     */
    public function setGrouping($grouping) {
        return $this->Grouping = $grouping;
    }

    /**
     * @param Localization $localization
     * @return ShippingDocumentEMailDetail
     */
    public function setLocalization($localization) {
        return $this->Localization = $localization;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShippingDocumentEMailDetail
     */
    public function setShippingDocumentEMailDetail(array $param) {

        $eMailRecipients = new ShippingDocumentEMailRecipient();
        $localization = new Localization();

        $shippingDocumentEMailDetail = new ShippingDocumentEMailDetail();
        $shippingDocumentEMailDetail->setEMailRecipients($eMailRecipients->setShippingDocumentEMailRecipient(array($param[0], $param[1])));
        $shippingDocumentEMailDetail->setGrouping($param[2]);
        $shippingDocumentEMailDetail->setLocalization($localization->setLocalization(array($param[3], $param[4])));

        return $shippingDocumentEMailDetail;
    }

}
