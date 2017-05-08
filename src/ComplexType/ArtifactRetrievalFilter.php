<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ArtifactRetrievalFilter
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ArtifactRetrievalFilter extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ArtifactRetrievalFilter';

    /**
     * @param string $accessReference
     * @return ArtifactRetrievalFilter
     */
    public function setAccessReference($accessReference) {
        return $this->AccessReference = $accessReference;
    }

    /**
     * @param string $type
     * @return ArtifactRetrievalFilter
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $referenceId
     * @return ArtifactRetrievalFilter
     */
    public function setReferenceId($referenceId) {
        return $this->ReferenceId = $referenceId;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ArtifactRetrievalFilter
     */
    public function setArtifactRetrievalFilter(array $param) {

        $artifactRetrievalFilter = new ArtifactRetrievalFilter();
        $artifactRetrievalFilter->setAccessReference($param[0]);
        $artifactRetrievalFilter->setType($param[1]);
        $artifactRetrievalFilter->setReferenceId($param[2]);

        return $artifactRetrievalFilter;
    }

}
