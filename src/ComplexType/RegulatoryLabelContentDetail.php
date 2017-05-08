<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RegulatoryLabelContentDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RegulatoryLabelContentDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RegulatoryLabelContentDetail';

    /**
     * @param string $type
     * @return RegulatoryLabelContentDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $generationOptions
     * @return RegulatoryLabelContentDetail
     */
    public function setGenerationOptions($generationOptions) {
        return $this->GenerationOptions = $generationOptions;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\RegulatoryLabelContentDetail
     */
    public function setRegulatoryLabelContentDetail(array $param) {

        $regulatoryLabelContentDetail = new RegulatoryLabelContentDetail();

        $regulatoryLabelContentDetail->setType($param[0]);
        $regulatoryLabelContentDetail->setGenerationOptions($param[1]);

        return $regulatoryLabelContentDetail;
    }

}
