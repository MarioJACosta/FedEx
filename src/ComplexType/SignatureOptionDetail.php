<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SignatureOptionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SignatureOptionDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SignatureOptionDetail';

    /**
     * @param string $optionType
     * @return SignatureOptionDetail
     */
    public function setOptionType($optionType) {
        return $this->OptionType = $optionType;
    }

    /**
     * @param string $signatureReleaseNumber
     * @return SignatureOptionDetail
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber) {
        return $this->SignatureReleaseNumber = $signatureReleaseNumber;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\SignatureOptionDetail
     */
    public function setSignatureOptionDetail(array $param) {

        $signatureOptionDetail = new SignatureOptionDetail();
        $signatureOptionDetail->setOptionType($param[0]);
        $signatureOptionDetail->setSignatureReleaseNumber($param[1]);

        return $signatureOptionDetail;
    }

}
