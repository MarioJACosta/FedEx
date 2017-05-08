<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Address
 * 
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Address extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Address';

    /**
     * @param array[] $streetLines
     * @return Address
     */
    public function setStreetLines($streetLines) {
        return $this->StreetLines = $streetLines;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity($city) {
        return $this->City = $city;
    }

    /**
     * @param string $stateOrProvinceCode
     * @return Address
     */
    public function setStateOrProvinceCode($stateOrProvinceCode) {
        return $this->StateOrProvinceCode = $stateOrProvinceCode;
    }

    /**
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode) {
        return $this->PostalCode = $postalCode;
    }

    /**
     * @param string $urbanizationCode
     * @return Address
     */
    public function setUrbanizationCode($urbanizationCode) {
        return $this->UrbanizationCode = $urbanizationCode;
    }

    /**
     * @param string $countryCode
     * @return Address
     */
    public function setCountryCode($countryCode) {
        return $this->CountryCode = $countryCode;
    }

    /**
     * @param string $countryName
     * @return Address
     */
    public function setCountryName($countryName) {
        return $this->CountryName = $countryName;
    }

    /**
     * @param boolean $residential
     * @return Address
     */
    public function setResidential($residential) {
        return $this->Residential = $residential;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Address
     */
    public function setAddress(array $param) {

        $address = new Address();
        for ($i = 0; $i <= 3; $i++) {
            if ($param[$i] != null) {
                $addresses[$i] = $param[$i];
            }
        }
        $address->setStreetLines($addresses);
        $address->setCity($param[4]);
        $address->setStateOrProvinceCode($param[5]);
        $address->setPostalCode($param[6]);
        $address->setUrbanizationCode($param[7]);
        $address->setCountryCode($param[8]);
        $address->setCountryName($param[9]);
        $address->setResidential($param[10]);

        return $address;
    }

}
