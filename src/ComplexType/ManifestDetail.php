<?php

namespace FedEx\ComplexType;

use FedEx\AbstractSimpleType;

/**
 * Description of ManifestDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ManifestDetail extends AbstractSimpleType {

    /**
     * @var string
     */
    protected $_name = 'ManifestDetail';

    /**
     * @param CloseDocumentFormat $format
     * @return ManifestDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

}
