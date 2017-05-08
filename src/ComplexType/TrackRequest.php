<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TrackRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TrackRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TrackRequest';

    /**
     * @param TrackSelectionDetail $selectionDetails
     * @return TrackRequest
     */
    public function setSelectionDetails($selectionDetails) {
        return $this->SelectionDetails = $selectionDetails;
    }

    /**
     * @param integer $transactionTimeOutValueInMilliseconds
     * @return TrackRequest
     */
    public function setTransactionTimeOutValueInMilliseconds($transactionTimeOutValueInMilliseconds) {
        return $this->TransactionTimeOutValueInMilliseconds = $transactionTimeOutValueInMilliseconds;
    }

    /**
     * @param string $processingOptions
     * @return TrackRequest
     */
    public function setProcessingOptions($processingOptions) {
        return $this->ProcessingOptions = $processingOptions;
    }

}
