<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a General Agency Agreement document. Remaining content (business data) to be defined once requirements have been completed
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class GeneralAgencyAgreementDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'GeneralAgencyAgreementDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return GeneralAgencyAgreementDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

}
