<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TransborderDistributionSummaryDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TransborderDistributionSummaryDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TransborderDistributionSummaryDetail';

    /**
     * @param integer $expressPackageCount
     * @return TransborderDistributionSummaryDetail
     */
    public function setExpressPackageCount($expressPackageCount) {
        return $this->ExpressPackageCount = $expressPackageCount;
    }

    /**
     * @param Weight $expressTotalPackageWeight
     * @return TransborderDistributionSummaryDetail
     */
    public function setExpressTotalPackageWeight($expressTotalPackageWeight) {
        return $this->ExpressTotalPackageWeight = $expressTotalPackageWeight;
    }

    /**
     * @param Weight $expressTotalPackageAdjustedWeight
     * @return TransborderDistributionSummaryDetail
     */
    public function setExpressTotalPackageAdjustedWeight($expressTotalPackageAdjustedWeight) {
        return $this->ExpressTotalPackageAdjustedWeight = $expressTotalPackageAdjustedWeight;
    }

    /**
     * @param integer $expressFreightPackageCount
     * @return TransborderDistributionSummaryDetail
     */
    public function setExpressFreightPackageCount($expressFreightPackageCount) {
        return $this->ExpressFreightPackageCount = $expressFreightPackageCount;
    }

    /**
     * @param Weight $expressTotalFreightWeight
     * @return TransborderDistributionSummaryDetail
     */
    public function setExpressTotalFreightWeight($expressTotalFreightWeight) {
        return $this->ExpressTotalFreightWeight = $expressTotalFreightWeight;
    }

    /**
     * @param Weight $expressTotalFreightAdjustedWeight
     * @return TransborderDistributionSummaryDetail
     */
    public function setExpressTotalFreightAdjustedWeight($expressTotalFreightAdjustedWeight) {
        return $this->ExpressTotalFreightAdjustedWeight = $expressTotalFreightAdjustedWeight;
    }

    /**
     * @param integer $groundPackageCount
     * @return TransborderDistributionSummaryDetail
     */
    public function setGroundPackageCount($groundPackageCount) {
        return $this->GroundPackageCount = $groundPackageCount;
    }

    /**
     * @param Weight $groundTotalPackageWeight
     * @return TransborderDistributionSummaryDetail
     */
    public function setGroundTotalPackageWeight($groundTotalPackageWeight) {
        return $this->GroundTotalPackageWeight = $groundTotalPackageWeight;
    }

    /**
     * @param Weight $groundTotalPackageAdjustedWeight
     * @return TransborderDistributionSummaryDetail
     */
    public function setGroundTotalPackageAdjustedWeight($groundTotalPackageAdjustedWeight) {
        return $this->GroundTotalPackageAdjustedWeight = $groundTotalPackageAdjustedWeight;
    }

    /**
     * @param integer $numberOfUnconsolidatedCommodities
     * @return TransborderDistributionSummaryDetail
     */
    public function setNumberOfUnconsolidatedCommodities($numberOfUnconsolidatedCommodities) {
        return $this->NumberOfUnconsolidatedCommodities = $numberOfUnconsolidatedCommodities;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\TransborderDistributionSummaryDetail
     */
    public function setTransborderDistributionSummaryDetail(array $param) {

        $weight = new Weight();

        $transborderDistributionSummaryDetail = new TransborderDistributionSummaryDetail();
        $transborderDistributionSummaryDetail->setExpressPackageCount($param[0]);
        $transborderDistributionSummaryDetail->setExpressTotalPackageWeight($weight->setWeight(array_slice($param, 1, 2)));
        $transborderDistributionSummaryDetail->setExpressTotalPackageAdjustedWeight($weight->setWeight(array_slice($param, 3, 2)));
        $transborderDistributionSummaryDetail->setExpressFreightPackageCount($param[5]);
        $transborderDistributionSummaryDetail->setExpressTotalFreightWeight($weight->setWeight(array_slice($param, 6, 2)));
        $transborderDistributionSummaryDetail->setExpressTotalFreightWeight($weight->setWeight(array_slice($param, 8, 2)));
        $transborderDistributionSummaryDetail->setGroundPackageCount($param[10]);
        $transborderDistributionSummaryDetail->setGroundTotalPackageWeight($weight->setWeight(array_slice($param, 11, 2)));
        $transborderDistributionSummaryDetail->setGroundTotalPackageAdjustedWeight($weight->setWeight(array_slice($param, 13, 2)));
        $transborderDistributionSummaryDetail->setNumberOfUnconsolidatedCommodities($param[15]);

        return $transborderDistributionSummaryDetail;
    }

}
