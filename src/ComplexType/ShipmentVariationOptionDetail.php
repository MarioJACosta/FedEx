<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShipmentVariationOptionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentVariationOptionDetail extends AbstractComplexType {

    protected $_name = 'ShipmentVariationOptionDetail';

    /**
     * @param string $id
     * @return ShipmentVariationOptionDetail
     */
    public function setId($id) {
        return $this->Id = $id;
    }

    /**
     * @param string $values
     * @return ShipmentVariationOptionDetail
     */
    public function setValues($values) {
        return $this->Values = $values;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShipmentVariationOptionDetail
     */
    public function setShipmentVariationOptionDetail(array $param) {

        $shipmentVariationOptionDetail = new ShipmentVariationOptionDetail();
        $shipmentVariationOptionDetail->setId($param[0]);
        $shipmentVariationOptionDetail->setValues($param[1]);

        return $shipmentVariationOptionDetail;
    }

}
