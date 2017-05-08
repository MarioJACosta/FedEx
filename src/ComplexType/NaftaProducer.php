<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This element is currently not supported and is for the future use.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class NaftaProducer extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'NaftaProducer';

    /**
     * @param string $id
     * @return NaftaProducer
     */
    public function SetId($id) {
        return $this->Id = $id;
    }

    /**
     * @param Party $producer
     * @return NaftaProducer
     */
    public function setProducer($producer) {
        return $this->Producer = $producer;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\NaftaProducer
     */
    public function setNaftaProducer(array $param) {

        $party = new Party();

        $naftaProducer = new NaftaProducer();
        $naftaProducer->SetId($param[0]);
        $naftaProducer->setProducer($party->setParty(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27])));

        return $naftaProducer;
    }

}
