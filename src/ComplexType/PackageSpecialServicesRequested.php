<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PackageSpecialServicesRequested extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'PackageSpecialServicesRequested';

    /**
     * @param string $specialServiceTypes
     * @return PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes($specialServiceTypes) {
        return $this->SpecialServiceTypes = $specialServiceTypes;
    }

    /**
     * @param CodDetail $codDetail
     * @return PackageSpecialServicesRequested
     */
    public function setCodDetail($codDetail) {
        return $this->CodDetail = $codDetail;
    }

    /**
     * @param DangerousGoodsDetail $dangerousGoodsDetail
     * @return PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail($dangerousGoodsDetail) {
        return $this->DangerousGoodsDetail = $dangerousGoodsDetail;
    }

    /**
     * @param Weight $dryIceWeight
     * @return PackageSpecialServicesRequested
     */
    public function setDryIceWeight($dryIceWeight) {
        return $this->DryIceWeight = $dryIceWeight;
    }

    /**
     * @param SignatureOptionDetail $signatureOptionDetail
     * @return PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail($signatureOptionDetail) {
        return $this->SignatureOptionDetail = $signatureOptionDetail;
    }

    /**
     * @param integer $pieceCountVerificationBoxCount
     * @return PackageSpecialServicesRequested
     */
    public function setPieceCountVerificationBoxCount($pieceCountVerificationBoxCount) {
        return $this->PieceCountVerificationBoxCount = $pieceCountVerificationBoxCount;
    }

    /**
     * @param PriorityAlertDetail $priorityAlertDetail
     * @return PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail($priorityAlertDetail) {
        return $this->PriorityAlertDetail = $priorityAlertDetail;
    }

    /**
     * @param AlcoholDetail $alcoholDetail
     * @return PackageSpecialServicesRequested
     */
    public function setAlcoholDetail($alcoholDetail) {
        return $this->AlcoholDetail = $alcoholDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\PackageSpecialServicesRequested
     */
    public function setPackageSpecialServicesRequested(array $param) {

        $packageSpecialServicesRequested = new PackageSpecialServicesRequested();
        $packageSpecialServicesRequested->setSpecialServiceTypes($param[0]);
        $packageSpecialServicesRequested->setPieceCountVerificationBoxCount($param[1]);

        switch ($param[0]) {
            case 'ALCOHOL':
                $alcoholDetail = new AlcoholDetail();
                $packageSpecialServicesRequested->setAlcoholDetail($alcoholDetail->setRecipientType($param[2]));
                break;

            case 'COD':
                $codDetail = new CodDetail();
                $packageSpecialServicesRequested->setCodDetail($codDetail->setCodDetail(array($param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61], $param[62])));
                break;

            case 'DANGEROUS_GOODS':
                $dangerousGoodsDetail = new DangerousGoodsDetail();
                $packageSpecialServicesRequested->setDangerousGoodsDetail($dangerousGoodsDetail->setDangerousGoodsDetail(array($param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61], $param[62], $param[63], $param[64], $param[65], $param[66], $param[67], $param[68], $param[69], $param[70])));
                break;

            case 'DRY_ICE':
                $dryIceWeight = new Weight();
                $packageSpecialServicesRequested->setDryIceWeight($dryIceWeight->setWeight(array($param[2], $param[3])));
                break;

            case 'PRIORITY_ALERT':
                $priorityAlertDetail = new PriorityAlertDetail();
                $packageSpecialServicesRequested->setPriorityAlertDetail($priorityAlertDetail->setPriorityAlertDetail(array($param[2], $param[3])));
                break;

            case 'SIGNATURE_OPTION':
                $signatureOptionDetail = new SignatureOptionDetail();
                $packageSpecialServicesRequested->setSignatureOptionDetail($signatureOptionDetail->setSignatureOptionDetail(array($param[2], $param[3])));
                break;
        }

        return $packageSpecialServicesRequested;
    }

}
