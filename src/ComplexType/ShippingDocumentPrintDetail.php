<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShippingDocumentPrintDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShippingDocumentPrintDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShippingDocumentPrintDetail';

    /**
     * @param string $printerId
     * @return ShippingDocumentPrintDetail
     */
    public function setPrinterId($printerId) {
        return $this->PrinterId = $printerId;
    }
}
