<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PagingDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PagingDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PagingDetail';

    /**
     * @param string $pagingToken
     * @return PagingDetail
     */
    public function setPagingToken($pagingToken) {
        return $this->PagingToken = $pagingToken;
    }

    /**
     * @param integer $numberOfResultsPerPage
     * @return PagingDetail
     */
    public function setNumberOfResultsPerPage($numberOfResultsPerPage) {
        return $this->NumberOfResultsPerPage = $numberOfResultsPerPage;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\PagingDetail
     */
    public function setPagingDetail(array $param) {

        $pagingDetail = new PagingDetail();
        $pagingDetail->setPagingToken($param[0]);
        $pagingDetail->setNumberOfResultsPerPage($param[1]);

        return $pagingDetail;
    }

}
