<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DetailedDeliveryManifestDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DetailedDeliveryManifestDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DetailedDeliveryManifestDetail';

    /**
     * @param CloseDocumentFormat $format
     * @return DetailedDeliveryManifestDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param string $clientTimeZoneOffset
     * @return DetailedDeliveryManifestDetail
     */
    public function setClientTimeZoneOffset($clientTimeZoneOffset) {
        return $this->ClientTimeZoneOffset = $clientTimeZoneOffset;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DetailedDeliveryManifestDetail
     */
    public function setDetailedDeliveryManifestDetail(array $param) {

        $format = new CloseDocumentFormat();

        $detailedDeliveryManifestDetail = new DetailedDeliveryManifestDetail();
        $detailedDeliveryManifestDetail->setFormat($format->setCloseDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17])));
        $detailedDeliveryManifestDetail->setClientTimeZoneOffset($param[18]);

        return $detailedDeliveryManifestDetail;
    }

}
