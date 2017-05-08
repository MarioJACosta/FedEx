<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomsDeclarationStatementDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomsDeclarationStatementDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CustomsDeclarationStatementDetail';

    /**
     * @param string $types
     * @return CustomsDeclarationStatementDetail
     */
    public function setTypes($types) {
        return $this->Types = $types;
    }

    /**
     * @param NaftaLowValueStatementDetail $naftaLowValueStatementDetail
     * @return CustomsDeclarationStatementDetail
     */
    public function setNaftaLowValueStatementDetail($naftaLowValueStatementDetail) {
        return $this->NaftaLowValueStatementDetail = $naftaLowValueStatementDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomsDeclarationStatementDetail
     */
    public function setCustomsDeclarationStatementDetail(array $param) {

        $naftaLowValueStatementDetail = new NaftaLowValueStatementDetail();
        $nafta = $naftaLowValueStatementDetail->setRole($param[1]);

        $customsDeclarationStatementDetail = new CustomsDeclarationStatementDetail();
        $customsDeclarationStatementDetail->setTypes($param[0]);
        $customsDeclarationStatementDetail->setNaftaLowValueStatementDetail($nafta);

        return $customsDeclarationStatementDetail;
    }

}
