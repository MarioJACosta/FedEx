<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class NaftaCertificateOfOriginDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'NaftaCertificateOfOriginDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return NaftaCertificateOfOriginDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param DateRange $blanketPeriod
     * @return NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod($blanketPeriod) {
        return $this->BlanketPeriod = $blanketPeriod;
    }

    /**
     * @param string $importerSpecification
     * @return NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification($importerSpecification) {
        return $this->ImporterSpecification = $importerSpecification;
    }

    /**
     * @param Contact $signatureContact
     * @return NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact($signatureContact) {
        return $this->SignatureContact = $signatureContact;
    }

    /**
     * @param string $producerSpecification
     * @return NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification($producerSpecification) {
        return $this->ProducerSpecification = $producerSpecification;
    }

    /**
     * @param NaftaProducer $producers
     * @return NaftaCertificateOfOriginDetail
     */
    public function setProducers($producers) {
        return $this->Producers = $producers;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\NaftaCertificateOfOriginDetail
     */
    public function setNaftaCertificateOfOriginDetail(array $param) {

        $format = new ShippingDocumentFormat();
        $dateRange = new DateRange();
        $contact = new Contact();
        $producers = new NaftaProducer();
        $customerImageUsages = new CustomerImageUsage();

        $naftaCertificateOfOriginDetail = new NaftaCertificateOfOriginDetail();
        $naftaCertificateOfOriginDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $naftaCertificateOfOriginDetail->setBlanketPeriod($dateRange->setDateRange(array($param[17], $param[18])));
        $naftaCertificateOfOriginDetail->setImporterSpecification($param[19]);
        $naftaCertificateOfOriginDetail->setSignatureContact($contact->setContact(array($param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29])));
        $naftaCertificateOfOriginDetail->setProducerSpecification($param[30]);
        $naftaCertificateOfOriginDetail->setProducers($producers->setNaftaProducer(array($param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58])));
        $naftaCertificateOfOriginDetail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[59], $param[60], $param[61], $param[62])));

        return $naftaCertificateOfOriginDetail;
    }

}
