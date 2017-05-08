<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies characteristics of a shipping document to be produced.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShippingDocumentFormat extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShippingDocumentFormat';

    /**
     * @param ShippingDocumentDispositionDetail $dispositions
     * @return ShippingDocumentFormat
     */
    public function setDispositions($dispositions) {
        return $this->Dispositions = $dispositions;
    }

    /**
     * @param LinearMeasure $topOfPageOffset
     * @return ShippingDocumentFormat
     */
    public function setTopOfPageOffset($topOfPageOffset) {
        return $this->TopOfPageOffset = $topOfPageOffset;
    }

    /**
     * @param string $imageType
     * @return ShippingDocumentFormat
     */
    public function setImageType($imageType) {
        return $this->ImageType = $imageType;
    }

    /**
     * @param string $StockType
     * @return ShippingDocumentFormat
     */
    public function setStockType($StockType) {
        return $this->StockType = $StockType;
    }

    /**
     * @param boolean $provideInstructions
     * @return ShippingDocumentFormat
     */
    public function setProvideInstructions($provideInstructions) {
        return $this->ProvideInstructions = $provideInstructions;
    }

    /**
     * @param DocumentFormatOptionsRequested $optionsRequested
     * @return ShippingDocumentFormat
     */
    public function setOptionsRequested($optionsRequested) {
        return $this->OptionsRequested = $optionsRequested;
    }

    /**
     * @param Localization $localization
     * @return ShippingDocumentFormat
     */
    public function setLocalization($localization) {
        return $this->Localization = $localization;
    }

    /**
     * @param string $customDocumentIdentifier
     * @return ShippingDocumentFormat
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier) {
        return $this->CustomDocumentIdentifier = $customDocumentIdentifier;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShippingDocumentFormat
     */
    public function setShippingDocumentFormat(array $param) {

        $eMailRecipients = new ShippingDocumentEMailRecipient();
        $eMailRecipients->setRecipientType($param[2]);
        $eMailRecipients->setAddress($param[3]);

        $localization = new Localization();
        $localization->setLanguageCode($param[5]);
        $localization->setLocaleCode($param[6]);

        $eMailDetail = new ShippingDocumentEMailDetail();
        $eMailDetail->setEMailRecipients($eMailRecipients);
        $eMailDetail->setGrouping($param[4]);
        $eMailDetail->setLocalization($localization);

        $printDetail = new ShippingDocumentPrintDetail();
        $printDetail->setPrinterId($param[7]);

        $dispositions = new ShippingDocumentDispositionDetail();
        $dispositions->setDispositionType($param[0]);
        $dispositions->setGrouping($param[1]);
        $dispositions->setEMailDetail($eMailDetail);
        $dispositions->setPrintDetail($printDetail);

        $topOfPageOffset = new LinearMeasure();
        $topOfPageOffset->setValue($param[8]);
        $topOfPageOffset->setUnits($param[9]);

        $optionsRequested = new DocumentFormatOptionsRequested();
        $optionsRequested->setOptions($param[13]);

        $localizationDocumentFormat = new Localization();
        $localizationDocumentFormat->setLanguageCode($param[14]);
        $localizationDocumentFormat->setLocaleCode($param[15]);

        $documentFormat = new ShippingDocumentFormat();
        $documentFormat->setDispositions($dispositions);
        $documentFormat->setTopOfPageOffset($topOfPageOffset);
        $documentFormat->setImageType($param[10]);
        $documentFormat->setStockType($param[11]);
        $documentFormat->setProvideInstructions($param[12]);
        $documentFormat->setOptionsRequested($optionsRequested);
        $documentFormat->setLocalization($localizationDocumentFormat);
        $documentFormat->setCustomDocumentIdentifier($param[16]);

        return $documentFormat;
    }

}
