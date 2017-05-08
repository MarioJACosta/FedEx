<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RequestedConsolidation
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RequestedConsolidation extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RequestedConsolidation';

    /**
     * @param string $consolidationType
     * @return RequestedConsolidation
     */
    public function setConsolidationType($consolidationType) {
        return $this->ConsolidationType = $consolidationType;
    }

    /**
     * @param Datetime $shipDate
     * @return RequestedConsolidation
     */
    public function setShipDate($shipDate) {
        return $this->ShipDate = $shipDate;
    }

    /**
     * @param TrackingId $trackingIds
     * @return RequestedConsolidation
     */
    public function setTrackingIds($trackingIds) {
        return $this->TrackingIds = $trackingIds;
    }

    /**
     * @param string $description
     * @return RequestedConsolidation
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * @param Party $shipper
     * @return RequestedConsolidation
     */
    public function setShipper($shipper) {
        return $this->Shipper = $shipper;
    }

    /**
     * @param ContactAndAddress $origin
     * @return RequestedConsolidation
     */
    public function setOrigin($origin) {
        return $this->Origin = $origin;
    }

    /**
     * @param Party $soldTo
     * @return RequestedConsolidation
     */
    public function setSoldTo($soldTo) {
        return $this->SoldTo = $soldTo;
    }

    /**
     * @param string $bookingNumber
     * @return RequestedConsolidation
     */
    public function setBookingNumber($bookingNumber) {
        return $this->BookingNumber = $bookingNumber;
    }

    /**
     * @param ConsolidationDataSource $consolidationDataSources
     * @return RequestedConsolidation
     */
    public function setConsolidationDataSources($consolidationDataSources) {
        return $this->ConsolidationDataSources = $consolidationDataSources;
    }

    /**
     * @param ConsolidationSpecialServicesRequested $specialServicesRequested
     * @return RequestedConsolidation
     */
    public function setSpecialServicesRequested($specialServicesRequested) {
        return $this->SpecialServicesRequested = $specialServicesRequested;
    }

    /**
     * @param CustomerReference $customerReferences
     * @return RequestedConsolidation
     */
    public function setCustomerReferences($customerReferences) {
        return $this->CustomerReferences = $customerReferences;
    }

    /**
     * @param LabelSpecification $labelSpecification
     * @return RequestedConsolidation
     */
    public function setLabelSpecification($labelSpecification) {
        return $this->LabelSpecification = $labelSpecification;
    }

    /**
     * @param InternationalDistributionDetail $internationalDistributionDetail
     * @return RequestedConsolidation
     */
    public function setInternationalDistributionDetail($internationalDistributionDetail) {
        return $this->InternationalDistributionDetail = $internationalDistributionDetail;
    }

    /**
     * @param ConsolidationTransborderDistributionDetail $transborderDistributionDetail
     * @return RequestedConsolidation
     */
    public function setTransborderDistributionDetail($transborderDistributionDetail) {
        return $this->TransborderDistributionDetail = $transborderDistributionDetail;
    }

    /**
     * @param RequestedDistributionLocation $distributionLocations
     * @return RequestedConsolidation
     */
    public function setDistributionLocations($distributionLocations) {
        return $this->DistributionLocations = $distributionLocations;
    }

    /**
     * @param CustomsClearanceDetail $customsClearanceDetail
     * @return RequestedConsolidation
     */
    public function setCustomsClearanceDetail($customsClearanceDetail) {
        return $this->CustomsClearanceDetail = $customsClearanceDetail;
    }

    /**
     * @param Payment $shippingChargesPayment
     * @return RequestedConsolidation
     */
    public function setShippingChargesPayment($shippingChargesPayment) {
        return $this->ShippingChargesPayment = $shippingChargesPayment;
    }

    /**
     * @param ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @return RequestedConsolidation
     */
    public function setConsolidationDocumentSpecification($consolidationDocumentSpecification) {
        return $this->ConsolidationDocumentSpecification = $consolidationDocumentSpecification;
    }

    /**
     * @param string $crnShippingDocumentTypes
     * @return RequestedConsolidation
     */
    public function setCrnShippingDocumentTypes($crnShippingDocumentTypes) {
        return $this->CrnShippingDocumentTypes = $crnShippingDocumentTypes;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\RequestedConsolidation
     */
    public function setRequestedConsolidation(array $param) {

        $trackingIds = new TrackingId();
        $party = new Party();
        $contactAndAddress = new ContactAndAddress();
        $consolidationDataSources = new ConsolidationDataSource();
        $specialServicesRequested = new ConsolidationSpecialServicesRequested();
        $customerReferences = new CustomerReference();
        $labelSpecification = new LabelSpecification();
        $internationalDistributionDetail = new InternationalDistributionDetail();
        $transborderDistributionDetail = new ConsolidationTransborderDistributionDetail();
        $distributionLocations = new RequestedDistributionLocation();
        $customsClearanceDetail = new CustomsClearanceDetail();
        $payment = new Payment();
        $consolidationDocumentSpecification = new ConsolidationDocumentSpecification();

        $requestedConsolidation = new RequestedConsolidation();
        $requestedConsolidation->setConsolidationType($param[0]);
        $requestedConsolidation->setShipDate($param[1]);
        $requestedConsolidation->setTrackingIds($trackingIds->setTrackingId(array($param[2], $param[3], $param[4], $param[5])));
        $requestedConsolidation->setDescription($param[6]);
        $requestedConsolidation->setShipper($party->setParty(array($param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33])));
        $requestedConsolidation->setOrigin($contactAndAddress->setContactAndAddress(array($param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54])));
        $requestedConsolidation->setSoldTo($party->setParty(array($param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61], $param[62], $param[63], $param[64], $param[65], $param[66], $param[67], $param[68], $param[69], $param[70], $param[71], $param[72], $param[73], $param[74], $param[75], $param[76], $param[77], $param[78], $param[79], $param[80], $param[81])));
        $requestedConsolidation->setBookingNumber($param[82]);
        $requestedConsolidation->setConsolidationDataSources($consolidationDataSources->setConsolidationDataSource(array($param[83], $param[84])));
        $requestedConsolidation->setSpecialServicesRequested($specialServicesRequested->setConsolidationSpecialServicesRequested(array($param[85], $param[86], $param[87])));
        $requestedConsolidation->setCustomerReferences($customerReferences->setCustomerReference(array($param[88], $param[89])));
        $requestedConsolidation->setLabelSpecification($labelSpecification->setLabelSpecification(array($param[90], $param[91], $param[92], $param[93], $param[94], $param[95], $param[96], $param[97], $param[98], $param[99], $param[100], $param[101], $param[102], $param[103], $param[104], $param[105], $param[106], $param[107], $param[108], $param[109], $param[110], $param[111], $param[112], $param[113], $param[114], $param[115], $param[116], $param[117], $param[118], $param[119], $param[120], $param[121], $param[122], $param[123], $param[124], $param[125], $param[126], $param[127], $param[128], $param[129], $param[130], $param[131], $param[132], $param[133], $param[134], $param[135], $param[136], $param[137], $param[138], $param[139], $param[140], $param[141], $param[142], $param[143], $param[144], $param[145], $param[146], $param[147], $param[148], $param[149], $param[150], $param[151], $param[152], $param[153], $param[154], $param[155], $param[156], $param[157], $param[158], $param[159], $param[160], $param[161], $param[162], $param[163], $param[164], $param[165], $param[166], $param[167], $param[168], $param[169], $param[170], $param[171], $param[172], $param[173], $param[174], $param[175], $param[176], $param[177], $param[178], $param[179], $param[180], $param[181], $param[182])));
        $requestedConsolidation->setInternationalDistributionDetail($internationalDistributionDetail->setInternationalDistributionDetail(array($param[183], $param[184], $param[185], $param[186], $param[187], $param[188], $param[189], $param[190], $param[191], $param[192], $param[193])));
        $requestedConsolidation->setTransborderDistributionDetail($transborderDistributionDetail->setConsolidationTransborderDistributionDetail(array($param[194], $param[195], $param[196], $param[197], $param[198], $param[199], $param[200], $param[201], $param[202], $param[203], $param[204], $param[205], $param[206], $param[207], $param[208], $param[209], $param[210], $param[211], $param[212], $param[213], $param[214], $param[215], $param[216], $param[217], $param[218], $param[219], $param[220], $param[221], $param[222], $param[223], $param[224], $param[225], $param[226], $param[227], $param[228], $param[229])));
        $requestedConsolidation->setDistributionLocations($distributionLocations->setRequestedDistributionLocation(array($param[230], $param[231], $param[232], $param[233], $param[234], $param[235], $param[236], $param[237], $param[238], $param[239], $param[240], $param[241], $param[242], $param[243], $param[244], $param[245], $param[246], $param[247], $param[248], $param[249], $param[250], $param[251], $param[252], $param[253], $param[254], $param[255], $param[256], $param[257])));
        $requestedConsolidation->setCustomsClearanceDetail($customsClearanceDetail->setCustomsClearanceDetail(array($param[258], $param[259], $param[260], $param[261], $param[262], $param[263], $param[264], $param[265], $param[266], $param[267], $param[268], $param[269], $param[270], $param[271], $param[272], $param[273], $param[274], $param[275], $param[276], $param[277], $param[278], $param[279], $param[280], $param[281], $param[282], $param[283], $param[284], $param[285], $param[286], $param[287], $param[288], $param[289], $param[290], $param[291], $param[292], $param[293], $param[294], $param[295], $param[296], $param[297], $param[298], $param[299], $param[300], $param[301], $param[302], $param[303], $param[304], $param[305], $param[306], $param[307], $param[308], $param[309], $param[310], $param[311], $param[312], $param[313], $param[314], $param[315], $param[316], $param[317], $param[318], $param[319], $param[320], $param[321], $param[322], $param[323], $param[324], $param[325], $param[326], $param[327], $param[328], $param[329], $param[330], $param[331], $param[332], $param[333], $param[334], $param[335], $param[336], $param[337], $param[338], $param[339], $param[339], $param[340], $param[341], $param[342], $param[343], $param[344], $param[345], $param[346], $param[347], $param[348], $param[349], $param[350], $param[351], $param[352], $param[353], $param[354], $param[355], $param[356], $param[357], $param[358], $param[359], $param[360], $param[361], $param[362], $param[363], $param[364], $param[365], $param[366], $param[367], $param[368], $param[369], $param[370], $param[371], $param[372], $param[373], $param[374], $param[375], $param[376], $param[378], $param[379], $param[380], $param[381], $param[382], $param[383], $param[384], $param[385], $param[386], $param[387], $param[388], $param[389], $param[390], $param[391], $param[392], $param[393], $param[394], $param[395], $param[396], $param[397], $param[398], $param[399], $param[400], $param[401], $param[402], $param[403], $param[404], $param[405], $param[406])));
        $requestedConsolidation->setShippingChargesPayment($payment->setPayment(array($param[407], $param[408], $param[409], $param[410], $param[411], $param[412], $param[413], $param[414], $param[415], $param[416], $param[417], $param[418], $param[419], $param[420], $param[421], $param[422], $param[423], $param[424], $param[425], $param[426], $param[427], $param[428], $param[429], $param[430], $param[431], $param[432], $param[433], $param[434], $param[435], $param[436], $param[437], $param[438])));
        $requestedConsolidation->setConsolidationDocumentSpecification($consolidationDocumentSpecification->setConsolidationDocumentSpecification(array($param[439], $param[440], $param[441], $param[442], $param[443], $param[444], $param[445], $param[446], $param[447], $param[448], $param[449], $param[450], $param[451], $param[452], $param[453], $param[454], $param[455], $param[456], $param[457], $param[458], $param[459], $param[460], $param[461], $param[462], $param[463], $param[464], $param[465], $param[466], $param[467], $param[468])));
        $requestedConsolidation->setCrnShippingDocumentTypes($param[469]);

        return $requestedConsolidation;
    }

}
