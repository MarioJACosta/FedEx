<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CloseDocumentFormat
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CloseDocumentFormat extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CloseDocumentFormat';

    /**
     * @param ShippingDocumentDispositionDetail $dispositions
     * @return CloseDocumentFormat
     */
    public function setDispositions($dispositions) {
        return $this->Dispositions = $dispositions;
    }

    /**
     * @param LinearMeasure $topOfPageOffset
     * @return CloseDocumentFormat
     */
    public function setTopOfPageOffset($topOfPageOffset) {
        return $this->TopOfPageOffset = $topOfPageOffset;
    }

    /**
     * @param string $imageType
     * @return CloseDocumentFormat
     */
    public function setImageType($imageType) {
        return $this->ImageType = $imageType;
    }

    /**
     * @param string $stockType
     * @return CloseDocumentFormat
     */
    public function setStockType($stockType) {
        return $this->StockType = $stockType;
    }

    /**
     * @param boolean $provideInstructions
     * @return CloseDocumentFormat
     */
    public function setProvideInstructions($provideInstructions) {
        return $this->ProvideInstructions = $provideInstructions;
    }

    /**
     * @param Localization $localization
     * @return CloseDocumentFormat
     */
    public function setLocalization($localization) {
        return $this->Localization = $localization;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CloseDocumentFormat
     */
    public function setCloseDocumentFormat(array $param) {

        $dispositions = new ShippingDocumentDispositionDetail();
        $topOfPageOffset = new LinearMeasure();
        $localization = new Localization();

        $closeDocumentFormat = new CloseDocumentFormat();
        $closeDocumentFormat->setDispositions($dispositions->setShippingDocumentDispositionDetail(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10])));
        $closeDocumentFormat->setTopOfPageOffset($topOfPageOffset->setLinearMeasure(array($param[11], $param[12])));
        $closeDocumentFormat->setImageType($param[13]);
        $closeDocumentFormat->setStockType($param[14]);
        $closeDocumentFormat->setProvideInstructions($param[15]);
        $closeDocumentFormat->setLocalization($localization->setLocalization(array($param[16], $param[17])));

        return $closeDocumentFormat;
    }

}
