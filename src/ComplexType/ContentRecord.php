<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ContentRecord
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ContentRecord extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ContentRecord';

    /**
     * @param string $partNumber
     * @return ContentRecord
     */
    public function setPartNumber($partNumber) {
        return $this->PartNumber = $partNumber;
    }

    /**
     * @param string $itemNumber
     * @return ContentRecord
     */
    public function setItemNumber($itemNumber) {
        return $this->ItemNumber = $itemNumber;
    }

    /**
     * @param integer $receivedQuantity
     * @return ContentRecord
     */
    public function setReceivedQuantity($receivedQuantity) {
        return $this->ReceivedQuantity = $receivedQuantity;
    }

    /**
     * @param string $description
     * @return ContentRecord
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ContentRecord
     */
    public function setContentRecord(array $param) {
        
        $contentRecord = new ContentRecord();
        $contentRecord->setPartNumber($param[0]);
        $contentRecord->setItemNumber($param[1]);
        $contentRecord->setReceivedQuantity($param[2]);
        $contentRecord->setDescription($param[3]);

        return $contentRecord;
    }

}
