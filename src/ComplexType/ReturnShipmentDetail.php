<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ReturnShipmentDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ReturnShipmentDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ReturnShipmentDetail';

    /**
     * @param string $returnType
     * @return ReturnShipmentDetail
     */
    public function setReturnType($returnType) {
        return $this->ReturnType = $returnType;
    }

    /**
     * @param Rma $rma
     * @return ReturnShipmentDetail
     */
    public function setRma($rma) {
        return $this->Rma = $rma;
    }

    /**
     * @param ReturnEMailDetail $returnEMailDetail
     * @return ReturnShipmentDetail
     */
    public function setReturnEMailDetail($returnEMailDetail) {
        return $this->ReturnEMailDetail = $returnEMailDetail;
    }

    /**
     * @param ReturnAssociationDetail $returnAssociation
     * @return ReturnShipmentDetail
     */
    public function setReturnAssociation($returnAssociation) {
        return $this->ReturnAssociation = $returnAssociation;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ReturnAssociationDetail
     */
    public function setReturnShipmentDetail(array $param) {

        $rma = new Rma();
        $returnEMailDetail = new ReturnEMailDetail();
        $returnAssociation = new ReturnAssociationDetail();

        $returnShipmentDetail = new ReturnShipmentDetail();
        $returnShipmentDetail->setReturnType($param[0]);
        $returnShipmentDetail->setRma($rma->setReason($param[1]));
        $returnShipmentDetail->setReturnEMailDetail($returnEMailDetail->setReturnEMailDetail(array($param[2], $param[3])));
        $returnShipmentDetail->setReturnAssociation($returnAssociation->setReturnAssociationDetail(array($param[4], $param[5])));

        return $returnAssociation;
    }

}
