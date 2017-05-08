<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RecommendedDocumentSpecification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RecommendedDocumentSpecification extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RecommendedDocumentSpecification';

    /**
     * @param string $types
     * @return RecommendedDocumentSpecification
     */
    public function setTypes($types) {
        return $typesTypes = $types;
    }

}
