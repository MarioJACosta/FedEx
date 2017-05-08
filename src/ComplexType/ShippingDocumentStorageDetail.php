<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShippingDocumentStorageDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShippingDocumentStorageDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShippingDocumentStorageDetail';

    /**
     * @param string $filePath
     * @return ShippingDocumentStorageDetail
     */
    public function setFilePath($filePath) {
        return $this->FilePath = $filePath;
    }

    /**
     * @param string $fileNaming
     * @return ShippingDocumentStorageDetail
     */
    public function setFileNaming($fileNaming) {
        return $this->FileNaming = $fileNaming;
    }

    /**
     * @param string $fileSuffix
     * @return ShippingDocumentStorageDetail
     */
    public function setFileSuffix($fileSuffix) {
        return $this->FileSuffix = $fileSuffix;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShippingDocumentStorageDetail
     */
    public function setShippingDocumentStorageDetail(array $param) {

        $shippingDocumentStorageDetail = new ShippingDocumentStorageDetail();

        $shippingDocumentStorageDetail->setFilePath($param[0]);
        $shippingDocumentStorageDetail->setFileNaming($param[1]);
        $shippingDocumentStorageDetail->setFileSuffix($param[2]);

        return $shippingDocumentStorageDetail;
    }

}
