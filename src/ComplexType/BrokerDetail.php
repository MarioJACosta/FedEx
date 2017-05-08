<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of BrokerDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class BrokerDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'BrokerDetail';

    /**
     * @param string $type
     * @return BrokerDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param Party $broker
     * @return BrokerDetail
     */
    public function setBroker($broker) {
        return $this->Broker = $broker;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\BrokerDetail
     */
    public function setBrokerDetail(array $param) {

        $party = new Party();

        $brokerDetail = new BrokerDetail();
        $brokerDetail->setType($param[0]);
        $brokerDetail->setBroker($party->setParty(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27])));

        return $brokerDetail;
    }

}
