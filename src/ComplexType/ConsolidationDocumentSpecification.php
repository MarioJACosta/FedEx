<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ConsolidationDocumentSpecification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConsolidationDocumentSpecification extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ConsolidationDocumentSpecification';

    /**
     * @param string $consolidationDocumentTypes
     * @return ConsolidationDocumentSpecification
     */
    public function setConsolidationDocumentTypes($consolidationDocumentTypes) {
        return $this->ConsolidationDocumentTypes = $consolidationDocumentTypes;
    }

    /**
     * @param CondensedCrnReportDetail $condensedCrnReportDetail
     * @return ConsolidationDocumentSpecification
     */
    public function setCondensedCrnReportDetail($condensedCrnReportDetail) {
        return $this->CondensedCrnReportDetail = $condensedCrnReportDetail;
    }

    /**
     * @param ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail
     * @return ConsolidationDocumentSpecification
     */
    public function setConsolidatedCommercialInvoiceDetail($consolidatedCommercialInvoiceDetail) {
        return $this->ConsolidatedCommercialInvoiceDetail = $consolidatedCommercialInvoiceDetail;
    }

    /**
     * @param CustomConsolidationDocumentDetail $customDocumentDetails
     * @return ConsolidationDocumentSpecification
     */
    public function setCustomDocumentDetails($customDocumentDetails) {
        return $this->CustomDocumentDetails = $customDocumentDetails;
    }

    /**
     * @param ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail
     * @return ConsolidationDocumentSpecification
     */
    public function setConsolidatedCustomsLinehaulReportDetail($consolidatedCustomsLinehaulReportDetail) {
        return $this->ConsolidatedCustomsLinehaulReportDetail = $consolidatedCustomsLinehaulReportDetail;
    }

    /**
     * @param ConsolidatedPartyReportDetail $consolidatedPartyReportDetail
     * @return ConsolidationDocumentSpecification
     */
    public function setConsolidatedPartyReportDetail($consolidatedPartyReportDetail) {
        return $this->ConsolidatedPartyReportDetail = $consolidatedPartyReportDetail;
    }

    /**
     * @param ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail
     * @return ConsolidationDocumentSpecification
     */
    public function setConsolidatedSoldToSummaryReportDetail($consolidatedSoldToSummaryReportDetail) {
        return $this->ConsolidatedSoldToSummaryReportDetail = $consolidatedSoldToSummaryReportDetail;
    }

    /**
     * @param CrnReportDetail $CrnReportDetail
     * @return ConsolidationDocumentSpecification
     */
    public function setCrnReportDetail($CrnReportDetail) {
        return $this->CrnReportDetail = $CrnReportDetail;
    }

    /**
     * @param CustomsPackingListDetail $customsPackingListDetail
     * @return ConsolidationDocumentSpecification
     */
    public function setCustomsPackingListDetail($customsPackingListDetail) {
        return $this->CustomsPackingListDetail = $customsPackingListDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ConsolidationDocumentSpecification
     */
    public function setConsolidationDocumentSpecification(array $param) {

        $consolidationDocumentSpecification = new ConsolidationDocumentSpecification();
        $consolidationDocumentSpecification->setConsolidationDocumentTypes($param[0]);

        switch ($param[0]) {
            case 'CONDENSED_CRN_REPORT':
                $condensedCrnReportDetail = new CondensedCrnReportDetail();
                $consolidationDocumentSpecification->setCondensedCrnReportDetail($condensedCrnReportDetail->setCondensedCrnReportDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22])));
                break;

            case 'CONSOLIDATED_COMMERCIAL_INVOICE':
                $consolidatedCommercialInvoiceDetail = new ConsolidatedCommercialInvoiceDetail();
                $consolidationDocumentSpecification->setConsolidatedCommercialInvoiceDetail($consolidatedCommercialInvoiceDetail->setConsolidatedCommercialInvoiceDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22])));
                break;

            case 'CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT':
                $consolidatedCustomsLinehaulReportDetail = new ConsolidationCustomsLinehaulReportDetail();
                $consolidationDocumentSpecification->setConsolidatedCustomsLinehaulReportDetail($consolidatedCustomsLinehaulReportDetail->setConsolidationCustomsLinehaulReportDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22])));
                break;

            case 'CONSOLIDATED_PARTY_REPORT':
                $consolidatedPartyReportDetail = new ConsolidatedPartyReportDetail();
                $consolidationDocumentSpecification->setConsolidatedPartyReportDetail($consolidatedPartyReportDetail->setConsolidatedPartyReportDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22])));
                break;

            case 'CONSOLIDATED_SOLD_TO_SUMMARY_REPORT':
                $consolidatedSoldToSummaryReportDetail = new ConsolidatedSoldToSummaryReportDetail();
                $consolidationDocumentSpecification->setConsolidatedSoldToSummaryReportDetail($consolidatedSoldToSummaryReportDetail->setConsolidatedSoldToSummaryReportDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22])));
                break;

            case 'CRN_REPORT':
                $CrnReportDetail = new CrnReportDetail();
                $consolidationDocumentSpecification->setCrnReportDetail($CrnReportDetail->setCrnReportDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22])));
                break;

            case 'CUSTOMS_PACKING_LIST':
                $customsPackingListDetail = new CustomsPackingListDetail();
                $consolidationDocumentSpecification->setCustomsPackingListDetail($customsPackingListDetail->setCustomsPackingListDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22])));
                break;

            case 'CUSTOM_CONSOLIDATION_DOCUMENT':
                $customDocumentDetails = new CustomConsolidationDocumentDetail();
                $consolidationDocumentSpecification->setCustomDocumentDetails($customDocumentDetails->setCustomConsolidationDocumentDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29])));
                break;
        }

        return $consolidationDocumentSpecification;
    }

}
