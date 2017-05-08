<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DestinationControlDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DestinationControlDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DestinationControlDetail';

    /**
     * @param string $statementTypes
     * @return DestinationControlDetail
     */
    public function setStatementTypes($statementTypes) {
        return $this->StatementTypes = $statementTypes;
    }

    /**
     * @param string $destinationCountries
     * @return DestinationControlDetail
     */
    public function setDestinationCountries($destinationCountries) {
        return $this->DestinationCountries = $destinationCountries;
    }

    /**
     * @param string $endUser
     * @return DestinationControlDetail
     */
    public function setEndUser($endUser) {
        return $this->EndUser = $endUser;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DestinationControlDetail
     */
    public function setDestinationControlDetail(array $param) {

        $destinationControlDetail = new DestinationControlDetail();
        $destinationControlDetail->setStatementTypes($param[0]);
        $destinationControlDetail->setDestinationCountries($param[1]);
        $destinationControlDetail->setEndUser($param[2]);

        return $destinationControlDetail;
    }

}
