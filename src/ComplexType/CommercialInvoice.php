<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CommercialInvoice
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CommercialInvoice extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CommercialInvoice';

    /**
     * @param string $comments
     * @return CommercialInvoice
     */
    public function setComments($comments) {
        return $this->Comments = $comments;
    }

    /**
     * @param Money $freightCharge
     * @return CommercialInvoice
     */
    public function setFreightCharge($freightCharge) {
        return $this->FreightCharge = $freightCharge;
    }

    /**
     * @param Money $taxesOrMiscellaneousCharge
     * @return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousCharge($taxesOrMiscellaneousCharge) {
        return $this->TaxesOrMiscellaneousCharge = $taxesOrMiscellaneousCharge;
    }

    /**
     * @param string $taxesOrMiscellaneousChargeType
     * @return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousChargeType($taxesOrMiscellaneousChargeType) {
        return $this->TaxesOrMiscellaneousChargeType = $taxesOrMiscellaneousChargeType;
    }

    /**
     * @param Money $packingCosts
     * @return CommercialInvoice
     */
    public function setPackingCosts($packingCosts) {
        return $this->PackingCosts = $packingCosts;
    }

    /**
     * @param Money $handlingCosts
     * @return CommercialInvoice
     */
    public function setHandlingCosts($handlingCosts) {
        return $this->HandlingCosts = $handlingCosts;
    }

    /**
     * @param string $specialInstructions
     * @return CommercialInvoice
     */
    public function setSpecialInstructions($specialInstructions) {
        return $this->SpecialInstructions = $specialInstructions;
    }

    /**
     * @param string $declarationStatement
     * @return CommercialInvoice
     */
    public function setDeclarationStatement($declarationStatement) {
        return $this->DeclarationStatement = $declarationStatement;
    }

    /**
     * @param string $paymentTerms
     * @return CommercialInvoice
     */
    public function setPaymentTerms($paymentTerms) {
        return $this->PaymentTerms = $paymentTerms;
    }

    /**
     * @param string $purpose
     * @return CommercialInvoice
     */
    public function setPurpose($purpose) {
        return $this->Purpose = $purpose;
    }

    /**
     * @param CustomerReference $customerReferences
     * @return CommercialInvoice
     */
    public function setCustomerReferences($customerReferences) {
        return $this->CustomerReferences = $customerReferences;
    }

    /**
     * @param string $originatorName
     * @return CommercialInvoice
     */
    public function setOriginatorName($originatorName) {
        return $this->OriginatorName = $originatorName;
    }

    /**
     * @param string $termsOfSale
     * @return CommercialInvoice
     */
    public function setTermsOfSale($termsOfSale) {
        return $this->TermsOfSale = $termsOfSale;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CommercialInvoice
     */
    public function setCommercialInvoice(array $param) {

        $money = new Money();
        $customerReferences = new CustomerReference();

        $commercialInvoice = new CommercialInvoice();
        $commercialInvoice->setComments($param[0]);
        $commercialInvoice->setFreightCharge($money->setMoney(array($param[1], $param[2])));
        $commercialInvoice->setTaxesOrMiscellaneousCharge($money->setMoney(array($param[3], $param[4])));
        $commercialInvoice->setTaxesOrMiscellaneousChargeType($param[5]);
        $commercialInvoice->setPackingCosts($money->setMoney(array($param[6], $param[7])));
        $commercialInvoice->setHandlingCosts($money->setMoney(array($param[8], $param[9])));
        $commercialInvoice->setSpecialInstructions($param[10]);
        $commercialInvoice->setDeclarationStatement($param[11]);
        $commercialInvoice->setPaymentTerms($param[12]);
        $commercialInvoice->setPurpose($param[13]);
        $commercialInvoice->setCustomerReferences($customerReferences->setCustomerReference(array($param[14], $param[15])));
        $commercialInvoice->setOriginatorName($param[16]);
        $commercialInvoice->setTermsOfSale($param[17]);

        return $commercialInvoice;
    }

}
