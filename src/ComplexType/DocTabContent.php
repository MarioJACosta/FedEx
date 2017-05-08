<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DocTabContent
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DocTabContent extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'DocTabContent';

    /**
     * @param string $docTabContentType
     * @return DocTabContent
     */
    public function setDocTabContentType($docTabContentType) {
        return $this->DocTabContentType = $docTabContentType;
    }

    /**
     * @param DocTabContentZone001 $zone001
     * @return DocTabContent
     */
    public function setZone001($zone001) {
        return $this->Zone001 = $zone001;
    }

    /**
     * @param DocTabContentBarcoded $barcoded
     * @return DocTabContent
     */
    public function setBarcoded($barcoded) {
        return $this->Barcoded = $barcoded;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DocTabContent
     */
    public function setDocTabContent(array $param) {

        $specifications = new DocTabZoneSpecification();

        $docTabContent = new DocTabContent();
        $docTabContent->setDocTabContentType($param[0]);

        if ($param[0] == 'ZONE001') {
            $zone001 = new DocTabContentZone001();
            $zone001->setDocTabZoneSpecifications($specifications->setDocTabZoneSpecification(array($param[1], $param[2], $param[3], $param[4], $param[5])));

            $docTabContent->setZone001($zone001);
        } else if ($param[0] == 'BARCODED') {
            $barcoded = new DocTabContentBarcoded();
            $barcoded->setSymbology($param[1]);
            $barcoded->setSpecification($specifications->setDocTabZoneSpecification(array($param[2], $param[3], $param[4], $param[5], $param[6])));

            $docTabContent->setBarcoded($barcoded);
        }

        return $docTabContent;
    }

}
