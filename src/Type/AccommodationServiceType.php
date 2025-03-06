<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AccommodationServiceType
 *
 * Types of accommodations and services available for passenger purchase on a train.
 * XSD Type: AccommodationServiceType
 */
class AccommodationServiceType
{
    /**
     * Detail about a space or place that is occupied by a passenger, such as seat, berth, and compartment, including specific information such as seat number, seat position, compartment number, seat direction, etc.
     *
     * @var \Recranet\OTA\Type\AccommodationServiceType\AccommodationDetailAType $accommodationDetail
     */
    private $accommodationDetail = null;

    /**
     * @var \Recranet\OTA\Type\AncillaryService[] $ancillaryService
     */
    private $ancillaryService = [
        
    ];

    /**
     * Gets as accommodationDetail
     *
     * Detail about a space or place that is occupied by a passenger, such as seat, berth, and compartment, including specific information such as seat number, seat position, compartment number, seat direction, etc.
     *
     * @return \Recranet\OTA\Type\AccommodationServiceType\AccommodationDetailAType
     */
    public function getAccommodationDetail()
    {
        return $this->accommodationDetail;
    }

    /**
     * Sets a new accommodationDetail
     *
     * Detail about a space or place that is occupied by a passenger, such as seat, berth, and compartment, including specific information such as seat number, seat position, compartment number, seat direction, etc.
     *
     * @param \Recranet\OTA\Type\AccommodationServiceType\AccommodationDetailAType $accommodationDetail
     * @return self
     */
    public function setAccommodationDetail(?\Recranet\OTA\Type\AccommodationServiceType\AccommodationDetailAType $accommodationDetail = null)
    {
        $this->accommodationDetail = $accommodationDetail;
        return $this;
    }

    /**
     * Adds as ancillaryService
     *
     * @return self
     * @param \Recranet\OTA\Type\AncillaryService $ancillaryService
     */
    public function addToAncillaryService(\Recranet\OTA\Type\AncillaryService $ancillaryService)
    {
        $this->ancillaryService[] = $ancillaryService;
        return $this;
    }

    /**
     * isset ancillaryService
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAncillaryService($index)
    {
        return isset($this->ancillaryService[$index]);
    }

    /**
     * unset ancillaryService
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAncillaryService($index)
    {
        unset($this->ancillaryService[$index]);
    }

    /**
     * Gets as ancillaryService
     *
     * @return \Recranet\OTA\Type\AncillaryService[]
     */
    public function getAncillaryService()
    {
        return $this->ancillaryService;
    }

    /**
     * Sets a new ancillaryService
     *
     * @param \Recranet\OTA\Type\AncillaryService[] $ancillaryService
     * @return self
     */
    public function setAncillaryService(array $ancillaryService = null)
    {
        $this->ancillaryService = $ancillaryService;
        return $this;
    }
}

