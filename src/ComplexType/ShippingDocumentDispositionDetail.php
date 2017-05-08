<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShippingDocumentDispositionDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ShippingDocumentDispositionDetail';

    /**
     * @param string $dispositionType
     * @return ShippingDocumentDispositionDetail
     */
    public function setDispositionType($dispositionType) {
        return $this->DispositionType = $dispositionType;
    }

    /**
     * @param string $grouping
     * @return ShippingDocumentDispositionDetail
     */
    public function setGrouping($grouping) {
        return $this->Grouping = $grouping;
    }

    /**
     * @param ShippingDocumentEMailDetail $eMailDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setEMailDetail($eMailDetail) {
        return $this->EMailDetail = $eMailDetail;
    }

    /**
     * @param ShippingDocumentPrintDetail $printDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setPrintDetail($printDetail) {
        return $this->PrintDetail = $printDetail;
    }

    /**
     * @param ShippingDocumentStorageDetail $storageDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setStorageDetail($storageDetail) {
        return $this->StorageDetail = $storageDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShippingDocumentDispositionDetail
     */
    public function setShippingDocumentDispositionDetail(array $param) {

        $eMailDetail = new ShippingDocumentEMailDetail();
        $printDetail = new ShippingDocumentPrintDetail();
        $storageDetail = new ShippingDocumentStorageDetail();

        $shippingDocumentDispositionDetail = new ShippingDocumentDispositionDetail();
        $shippingDocumentDispositionDetail->setDispositionType($param[0]);
        $shippingDocumentDispositionDetail->setGrouping($param[1]);
        $shippingDocumentDispositionDetail->setEMailDetail($eMailDetail->setShippingDocumentEMailDetail(array($param[2], $param[3], $param[4], $param[5], $param[6])));
        $shippingDocumentDispositionDetail->setPrintDetail($printDetail->setPrinterId($param[7]));
        $shippingDocumentDispositionDetail->setStorageDetail($storageDetail->setShippingDocumentStorageDetail(array($param[8], $param[9], $param[10])));

        return $shippingDocumentDispositionDetail;
    }

}
