<?php

namespace Recranet\OTA\HotelProductType\PolicyInfoAType;

/**
 * Class representing BookingRulesAType
 */
class BookingRulesAType
{
    /**
     * The BookingRule element defines restrictions to rates and stays at the hotel for a given rate plan, room type or rate plan/room type combination.
     *
     * @var \Recranet\OTA\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[] $bookingRule
     */
    private $bookingRule = [
        
    ];

    /**
     * Adds as bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for a given rate plan, room type or rate plan/room type combination.
     *
     * @return self
     * @param \Recranet\OTA\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType $bookingRule
     */
    public function addToBookingRule(\Recranet\OTA\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType $bookingRule)
    {
        $this->bookingRule[] = $bookingRule;
        return $this;
    }

    /**
     * isset bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for a given rate plan, room type or rate plan/room type combination.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingRule($index)
    {
        return isset($this->bookingRule[$index]);
    }

    /**
     * unset bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for a given rate plan, room type or rate plan/room type combination.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingRule($index)
    {
        unset($this->bookingRule[$index]);
    }

    /**
     * Gets as bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for a given rate plan, room type or rate plan/room type combination.
     *
     * @return \Recranet\OTA\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[]
     */
    public function getBookingRule()
    {
        return $this->bookingRule;
    }

    /**
     * Sets a new bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for a given rate plan, room type or rate plan/room type combination.
     *
     * @param \Recranet\OTA\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[] $bookingRule
     * @return self
     */
    public function setBookingRule(array $bookingRule)
    {
        $this->bookingRule = $bookingRule;
        return $this;
    }
}

