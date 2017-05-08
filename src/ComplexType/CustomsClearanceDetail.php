<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomsClearanceDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomsClearanceDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'CustomsClearanceDetail';

    /**
     * @param BrokerDetail $brokers
     * @return CustomsClearanceDetail
     */
    public function setBrokers($brokers) {
        return $this->Brokers = $brokers;
    }

    /**
     * @param CustomsOptionDetail $customsOptions
     * @return CustomsClearanceDetail
     */
    public function setCustomsOptions($customsOptions) {
        return $this->CustomsOptions = $customsOptions;
    }

    /**
     * @param Payment $dutiesPayment
     * @return CustomsClearanceDetail
     */
    public function setDutiesPayment($dutiesPayment) {
        return $this->DutiesPayment = $dutiesPayment;
    }

    /**
     * @param string $documentContent
     * @return CustomsClearanceDetail
     */
    public function setDocumentContent($documentContent) {
        return $this->DocumentContent = $documentContent;
    }

    /**
     * @param Money $customsValue
     * @return CustomsClearanceDetail
     */
    public function setCustomsValue($customsValue) {
        return $this->CustomsValue = $customsValue;
    }

    /**
     * @param Commodity $commodities
     * @return CustomsClearanceDetail
     */
    public function setCommodities($commodities) {
        return $this->Commodities = $commodities;
    }

    /**
     * @param ExportDetail $exportDetail
     * @return CustomsClearanceDetail
     */
    public function setExportDetail($exportDetail) {
        return $this->ExportDetail = $exportDetail;
    }

    /**
     * @param string $clearanceBrokerage
     * @return CustomsClearanceDetail
     */
    public function setClearanceBrokerage($clearanceBrokerage) {
        return $this->ClearanceBrokerage = $clearanceBrokerage;
    }

    /**
     * @param Party $importerOfRecord
     * @return CustomsClearanceDetail
     */
    public function setImporterOfRecord($importerOfRecord) {
        return $this->ImporterOfRecord = $importerOfRecord;
    }

    /**
     * @param RecipientCustomsId $recipientCustomsId
     * @return CustomsClearanceDetail
     */
    public function setRecipientCustomsId($recipientCustomsId) {
        return $this->RecipientCustomsId = $recipientCustomsId;
    }

    /**
     * @param string $freightOnValue
     * @return CustomsClearanceDetail
     */
    public function setFreightOnValue($freightOnValue) {
        return $this->FreightOnValue = $freightOnValue;
    }

    /**
     * @param Money $insuranceCharges
     * @return CustomsClearanceDetail
     */
    public function setInsuranceCharges($insuranceCharges) {
        return $this->InsuranceCharges = $insuranceCharges;
    }

    /**
     * @param boolean $partiesToTransactionAreRelated
     * @return CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated) {
        return $this->PartiesToTransactionAreRelated = $partiesToTransactionAreRelated;
    }

    /**
     * @param CommercialInvoice $commercialInvoice
     * @return CustomsClearanceDetail
     */
    public function setCommercialInvoice($commercialInvoice) {
        return $this->CommercialInvoice = $commercialInvoice;
    }

    /**
     * @param string $regulatoryControls
     * @return CustomsClearanceDetail
     */
    public function setRegulatoryControls($regulatoryControls) {
        return $this->RegulatoryControls = $regulatoryControls;
    }

    /**
     * @param CustomsDeclarationStatementDetail $declarationStatementDetail
     * @return CustomsClearanceDetail
     */
    public function setDeclarationStatementDetail($declarationStatementDetail) {
        return $this->DeclarationStatementDetail = $declarationStatementDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomsClearanceDetail
     */
    public function setCustomsClearanceDetail(array $param) {

        $brokers = new BrokerDetail();
        $customsOptions = new CustomsOptionDetail();
        $party = new Party();
        $recipientCustomsId = new RecipientCustomsId();
        $payment = new Payment();
        $money = new Money();
        $commercialInvoice = new CommercialInvoice();
        $commodities = new Commodity();
        $exportDetail = new ExportDetail();
        $declarationStatementDetail = new CustomsDeclarationStatementDetail();

        $customsClearanceDetail = new CustomsClearanceDetail();
        $customsClearanceDetail->setBrokers($brokers->setBrokerDetail(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27])));
        $customsClearanceDetail->setClearanceBrokerage($param[28]);
        $customsClearanceDetail->setCustomsOptions($customsOptions->setCustomsOptionDetail(array($param[29], $param[30])));
        $customsClearanceDetail->setImporterOfRecord($party->setParty(array($param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57])));
        $customsClearanceDetail->setRecipientCustomsId($recipientCustomsId->setRecipientCustomsId(array($param[58], $param[59])));
        $customsClearanceDetail->setDutiesPayment($payment->setPayment(array($param[60], $param[61], $param[62], $param[63], $param[64], $param[65], $param[66], $param[67], $param[68], $param[69], $param[70], $param[71], $param[72], $param[73], $param[74], $param[75], $param[76], $param[77], $param[78], $param[79], $param[80], $param[81], $param[82], $param[83], $param[84], $param[85], $param[86], $param[87], $param[88], $param[89], $param[90], $param[91])));
        $customsClearanceDetail->setDocumentContent($param[92]);
        $customsClearanceDetail->setCustomsValue($money->setMoney(array($param[93], $param[94])));
        $customsClearanceDetail->setFreightOnValue($param[95]);
        $customsClearanceDetail->setInsuranceCharges($money->setMoney(array($param[96], $param[97])));
        $customsClearanceDetail->setPartiesToTransactionAreRelated($param[98]);
        $customsClearanceDetail->setCommercialInvoice($commercialInvoice->setCommercialInvoice(array($param[99], $param[100], $param[101], $param[102], $param[103], $param[104], $param[105], $param[106], $param[107], $param[108], $param[109], $param[110], $param[111], $param[112], $param[113], $param[114], $param[115], $param[116])));
        $customsClearanceDetail->setCommodities($commodities->setCommodity(array($param[117], $param[118], $param[119], $param[120], $param[121], $param[122], $param[123], $param[124], $param[125], $param[126], $param[127], $param[128], $param[129], $param[130], $param[131], $param[132], $param[133], $param[134], $param[135], $param[136], $param[137], $param[138], $param[139], $param[140], $param[141])));
        $customsClearanceDetail->setExportDetail($exportDetail->setExportDetail(array($param[142], $param[143], $param[144], $param[145], $param[146], $param[147])));
        $customsClearanceDetail->setDeclarationStatementDetail($declarationStatementDetail->setCustomsDeclarationStatementDetail(array($param[148], $param[149])));

        return $customsClearanceDetail;
    }

}
