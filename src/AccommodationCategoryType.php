<?php

namespace Recranet\OTA;

/**
 * Class representing AccommodationCategoryType
 *
 * Accommodations and services offered on a train.
 * XSD Type: AccommodationCategoryType
 */
class AccommodationCategoryType
{
    /**
     * Type of accommodation, including classes of seat, berth and compartment on a train that's occupied by a rail passenger.
     *
     * @var \Recranet\OTA\AccommodationCategoryType\AccommodationAType[] $accommodation
     */
    private $accommodation = [
        
    ];

    /**
     * Any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @var \Recranet\OTA\AncillaryService[] $ancillaryService
     */
    private $ancillaryService = [
        
    ];

    /**
     * Adds as accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a train that's occupied by a rail passenger.
     *
     * @return self
     * @param \Recranet\OTA\AccommodationCategoryType\AccommodationAType $accommodation
     */
    public function addToAccommodation(\Recranet\OTA\AccommodationCategoryType\AccommodationAType $accommodation)
    {
        $this->accommodation[] = $accommodation;
        return $this;
    }

    /**
     * isset accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a train that's occupied by a rail passenger.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccommodation($index)
    {
        return isset($this->accommodation[$index]);
    }

    /**
     * unset accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a train that's occupied by a rail passenger.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccommodation($index)
    {
        unset($this->accommodation[$index]);
    }

    /**
     * Gets as accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a train that's occupied by a rail passenger.
     *
     * @return \Recranet\OTA\AccommodationCategoryType\AccommodationAType[]
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * Sets a new accommodation
     *
     * Type of accommodation, including classes of seat, berth and compartment on a train that's occupied by a rail passenger.
     *
     * @param \Recranet\OTA\AccommodationCategoryType\AccommodationAType[] $accommodation
     * @return self
     */
    public function setAccommodation(array $accommodation = null)
    {
        $this->accommodation = $accommodation;
        return $this;
    }

    /**
     * Adds as ancillaryService
     *
     * Any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @return self
     * @param \Recranet\OTA\AncillaryService $ancillaryService
     */
    public function addToAncillaryService(\Recranet\OTA\AncillaryService $ancillaryService)
    {
        $this->ancillaryService[] = $ancillaryService;
        return $this;
    }

    /**
     * isset ancillaryService
     *
     * Any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
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
     * Any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
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
     * Any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @return \Recranet\OTA\AncillaryService[]
     */
    public function getAncillaryService()
    {
        return $this->ancillaryService;
    }

    /**
     * Sets a new ancillaryService
     *
     * Any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @param \Recranet\OTA\AncillaryService[] $ancillaryService
     * @return self
     */
    public function setAncillaryService(array $ancillaryService = null)
    {
        $this->ancillaryService = $ancillaryService;
        return $this;
    }
}

