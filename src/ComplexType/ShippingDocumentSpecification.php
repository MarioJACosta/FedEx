<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShippingDocumentSpecification extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShippingDocumentSpecification';

    /**
     * @param string $shippingDocumentTypes
     * @return ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes($shippingDocumentTypes) {
        return $this->ShippingDocumentTypes = $shippingDocumentTypes;
    }

    /**
     * @param CertificateOfOriginDetail $certificateOfOrigin
     * @return ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin($certificateOfOrigin) {
        return $this->CertificateOfOrigin = $certificateOfOrigin;
    }

    /**
     * @param CommercialInvoiceDetail $commercialInvoiceDetail
     * @return ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail($commercialInvoiceDetail) {
        return $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
    }

    /**
     * @param CustomDocumentDetail $customPackageDocumentDetail
     * @return ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail($customPackageDocumentDetail) {
        return $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
    }

    /**
     * @param CustomDocumentDetail $customShipmentDocumentDetail
     * @return ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail($customShipmentDocumentDetail) {
        return $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
    }

    /**
     * @param ExportDeclarationDetail $exportDeclarationDetail
     * @return ShippingDocumentSpecification
     */
    public function setExportDeclarationDetail($exportDeclarationDetail) {
        return $this->ExportDeclarationDetail = $exportDeclarationDetail;
    }

    /**
     * @param GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @return ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail($generalAgencyAgreementDetail) {
        return $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
    }

    /**
     * @param NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * @return ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail($naftaCertificateOfOriginDetail) {
        return $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
    }

    /**
     * @param Op900Detail $op900Detail
     * @return ShippingDocumentSpecification
     */
    public function setOp900Detail($op900Detail) {
        return $this->Op900Detail = $op900Detail;
    }

    /**
     * @param DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * @return ShippingDocumentSpecification
     */
    public function setDangerousGoodsShippersDeclarationDetail($dangerousGoodsShippersDeclarationDetail) {
        return $this->DangerousGoodsShippersDeclarationDetail = $dangerousGoodsShippersDeclarationDetail;
    }

    /**
     * @param FreightAddressLabelDetail $freightAddressLabelDetail
     * @return ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail($freightAddressLabelDetail) {
        return $this->FreightAddressLabelDetail = $freightAddressLabelDetail;
    }

    /**
     * @param ReturnInstructionsDetail $returnInstructionsDetail
     * @return ShippingDocumentSpecification
     */
    public function setReturnInstructionsDetail($returnInstructionsDetail) {
        return $this->ReturnInstructionsDetail = $returnInstructionsDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShippingDocumentSpecification
     */
    public function setShippingDocumentSpecification(array $param) {

        $shippingDocumentSpecification = new ShippingDocumentSpecification();
        $shippingDocumentSpecification->setShippingDocumentTypes($param[0]);

        switch ($param[0]) {
            case 'CERTIFICATE_OF_ORIGIN':
                $certificateOfOrigin = new CertificateOfOriginDetail();
                $shippingDocumentSpecification->setCertificateOfOrigin($certificateOfOrigin->setCertificateOfOriginDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21])));
                break;

            case 'COMMERCIAL_INVOICE':
                $commercialInvoiceDetail = new CommercialInvoiceDetail();
                $shippingDocumentSpecification->setCommercialInvoiceDetail($commercialInvoiceDetail->setCommercialInvoiceDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21])));
                break;

            case 'CUSTOM_PACKAGE_DOCUMENT':
                $customPackageDocumentDetail = new CustomDocumentDetail();
                $shippingDocumentSpecification->setCustomPackageDocumentDetail($customPackageDocumentDetail->setCustomDocumentDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61], $param[62], $param[63])));
                break;

            case 'CUSTOM_SHIPMENT_DOCUMENT':
                $customShipmentDocumentDetail = new CustomDocumentDetail();
                $shippingDocumentSpecification->setCustomShipmentDocumentDetail($customShipmentDocumentDetail->setCustomDocumentDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61], $param[62], $param[63])));
                break;

            case 'DANGEROUS_GOODS_SHIPPERS_DECLARATION':
                $dangerousGoodsShippersDeclarationDetail = new DangerousGoodsShippersDeclarationDetail();
                $shippingDocumentSpecification->setDangerousGoodsShippersDeclarationDetail($dangerousGoodsShippersDeclarationDetail->setDangerousGoodsShippersDeclarationDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21])));
                break;

            case 'EXPORT_DECLARATION':
                $exportDeclarationDetail = new ExportDeclarationDetail();
                $shippingDocumentSpecification->setExportDeclarationDetail($exportDeclarationDetail->setExportDeclarationDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21])));
                break;

            case 'FREIGHT_ADDRESS_LABEL':
                $freightAddressLabelDetail = new FreightAddressLabelDetail();
                $shippingDocumentSpecification->setFreightAddressLabelDetail($freightAddressLabelDetail->setFreightAddressLabelDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61], $param[62])));
                break;

            case 'GENERAL_AGENCY_AGREEMENT':
                $generalAgencyAgreementDetail = new GeneralAgencyAgreementDetail();
                $format = new ShippingDocumentFormat();
                $shippingDocumentSpecification->setGeneralAgencyAgreementDetail($generalAgencyAgreementDetail->setFormat($format->setShippingDocumentFormat(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18]))));
                break;

            case 'NAFTA_CERTIFICATE_OF_ORIGIN':
                $naftaCertificateOfOriginDetail = new NaftaCertificateOfOriginDetail();
                $shippingDocumentSpecification->setNaftaCertificateOfOriginDetail($naftaCertificateOfOriginDetail->setNaftaCertificateOfOriginDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61], $param[62], $param[63], $param[64])));
                break;

            case 'OP_900':
                $op900Detail = new Op900Detail();
                $shippingDocumentSpecification->setOp900Detail($op900Detail->setOp900Detail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23])));
                break;

            case 'RETURN_INSTRUCTIONS':
                $returnInstructionsDetail = new ReturnInstructionsDetail();
                $shippingDocumentSpecification->setReturnInstructionsDetail($returnInstructionsDetail->setReturnInstructionsDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18])));
                break;
        }

        return $shippingDocumentSpecification;
    }

}
