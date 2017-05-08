<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ConsolidationTransborderDistributionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConsolidationTransborderDistributionDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ConsolidationTransborderDistributionDetail';

    /**
     * @param TransborderDistributionSpecialServicesRequested $specialServicesRequested
     * @return ConsolidationTransborderDistributionDetail
     */
    public function setSpecialServicesRequested($specialServicesRequested) {
        return $this->SpecialServicesRequested = $specialServicesRequested;
    }

    /**
     * @param string $routing
     * @return ConsolidationTransborderDistributionDetail
     */
    public function setRouting($routing) {
        return $this->Routing = $routing;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ConsolidationTransborderDistributionDetail
     */
    public function setConsolidationTransborderDistributionDetail(array $param) {

        $specialServicesRequested = new TransborderDistributionSpecialServicesRequested();

        $consolidationTransborderDistributionDetail = new ConsolidationTransborderDistributionDetail();
        $consolidationTransborderDistributionDetail->setSpecialServicesRequested($specialServicesRequested->setTransborderDistributionSpecialServicesRequested(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34])));
        $consolidationTransborderDistributionDetail->setRouting($param[35]);
        
        return $consolidationTransborderDistributionDetail;
    }

}
