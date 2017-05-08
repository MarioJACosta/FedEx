<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CodDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CodDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CodDetail';

    /**
     * @param Money $codCollectionAmount
     * @return CodDetail
     */
    public function setCodCollectionAmount($codCollectionAmount) {
        return $this->CodCollectionAmount = $codCollectionAmount;
    }

    /**
     * @param CodAddTransportationChargesDetail $addTransportationChargesDetail
     * @return CodDetail
     */
    public function setAddTransportationChargesDetail($addTransportationChargesDetail) {
        return $this->AddTransportationChargesDetail = $addTransportationChargesDetail;
    }

    /**
     * @param string $collectionType
     * @return CodDetail
     */
    public function setCollectionType($collectionType) {
        return $this->CollectionType = $collectionType;
    }

    /**
     * @param Party $codRecipient
     * @return CodDetail
     */
    public function setCodRecipient($codRecipient) {
        return $this->CodRecipient = $codRecipient;
    }

    /**
     * @param ContactAndAddress $financialInstitutionContactAndAddress
     * @return CodDetail
     */
    public function setFinancialInstitutionContactAndAddress($financialInstitutionContactAndAddress) {
        return $this->FinancialInstitutionContactAndAddress = $financialInstitutionContactAndAddress;
    }

    /**
     * @param string $remitToName
     * @return CodDetail
     */
    public function setRemitToName($remitToName) {
        return $this->RemitToName = $remitToName;
    }

    /**
     * @param string $referenceIndicator
     * @return CodDetail
     */
    public function setReferenceIndicator($referenceIndicator) {
        return $this->ReferenceIndicator = $referenceIndicator;
    }

    /**
     * @param TrackingId $returnTrackingId
     * @return CodDetail
     */
    public function setReturnTrackingId($returnTrackingId) {
        return $this->ReturnTrackingId = $returnTrackingId;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CodDetail
     */
    public function setCodDetail(array $param) {

        $money = new Money();
        $codAddTransportationChargesDetail = new CodAddTransportationChargesDetail();
        $party = new Party();
        $contactAndAddress = new ContactAndAddress();
        $trackingId = new TrackingId();


        $codDetail = new CodDetail();
        $codDetail->setCodCollectionAmount($money->setMoney(array($param[0], $param[1])));
        $codDetail->setAddTransportationChargesDetail($codAddTransportationChargesDetail->setCodAddTransportationChargesDetail(array($param[2], $param[3], $param[4], $param[5])));
        $codDetail->setCollectionType($param[6]);
        $codDetail->setCodRecipient($party->setParty(array($param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33])));
        $codDetail->setFinancialInstitutionContactAndAddress($contactAndAddress->setContactAndAddress(array($param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54])));
        $codDetail->setRemitToName($param[55]);
        $codDetail->setReferenceIndicator($param[56]);
        $codDetail->setReturnTrackingId($trackingId->setTrackingId(array($param[57], $param[58], $param[59], $param[60])));

        return $codDetail;
    }

}
