<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightAddressLabelDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'FreightAddressLabelDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return FreightAddressLabelDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param integer $copies
     * @return FreightAddressLabelDetail
     */
    public function setCopies($copies) {
        return $this->Copies = $copies;
    }

    /**
     * @param string $startingPosition
     * @return FreightAddressLabelDetail
     */
    public function setStartingPosition($startingPosition) {
        return $this->StartingPosition = $startingPosition;
    }

    /**
     * @param DocTabContent $docTabContent
     * @return FreightAddressLabelDetail
     */
    public function setDocTabContent($docTabContent) {
        return $this->DocTabContent = $docTabContent;
    }

    /**
     * @param string $customContentPosition
     * @return FreightAddressLabelDetail
     */
    public function setCustomContentPosition($customContentPosition) {
        return $this->CustomContentPosition = $customContentPosition;
    }

    /**
     * @param CustomLabelDetail $customContent
     * @return FreightAddressLabelDetail
     */
    public function setCustomContent($customContent) {
        return $this->CustomContent = $customContent;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\FreightAddressLabelDetail
     */
    public function setFreightAddressLabelDetail(array $param) {

        $format = new ShippingDocumentFormat();
        $docTabContent = new DocTabContent();
        $customContent = new CustomLabelDetail();

        $freightAddressLabelDetail = new FreightAddressLabelDetail();
        $freightAddressLabelDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $freightAddressLabelDetail->setCopies($param[17]);
        $freightAddressLabelDetail->setStartingPosition($param[18]);
        $freightAddressLabelDetail->setDocTabContent($docTabContent->setDocTabContent(array($param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25])));
        $freightAddressLabelDetail->setCustomContentPosition($param[26]);
        $freightAddressLabelDetail->setCustomContent($customContent->setCustomLabelDetail(array($param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61])));

        return $freightAddressLabelDetail;
    }

}
