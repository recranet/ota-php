<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RateType
 *
 * Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
 * XSD Type: RateType
 */
class RateType
{
    /**
     * The Rate contains a collection of elements that define the amount of the rate, associated fees, additional occupant amounts as well as payment and cancellation policies. Taxes can be broken out or included within the various amounts. A currency can be associated to each amount The applicable period of the the rate are indicated by the effective dates. Restrictions that may apply to that rate, such as the minimum or maximum length of stay, stay-over dates (such as a Saturday night), min/max guests applicable for the rate, and age group (ex Adult) are attributes of Rate. It indicates the number of units that the quoted rate is based upon, as well as the TimeUnits type used that the rate is based upon, e.g.: 3days at $100.00 per day.
     *
     * @var \Recranet\OTA\Type\RateType\RateAType[] $rate
     */
    private $rate = [
        
    ];

    /**
     * Adds as rate
     *
     * The Rate contains a collection of elements that define the amount of the rate, associated fees, additional occupant amounts as well as payment and cancellation policies. Taxes can be broken out or included within the various amounts. A currency can be associated to each amount The applicable period of the the rate are indicated by the effective dates. Restrictions that may apply to that rate, such as the minimum or maximum length of stay, stay-over dates (such as a Saturday night), min/max guests applicable for the rate, and age group (ex Adult) are attributes of Rate. It indicates the number of units that the quoted rate is based upon, as well as the TimeUnits type used that the rate is based upon, e.g.: 3days at $100.00 per day.
     *
     * @return self
     * @param \Recranet\OTA\Type\RateType\RateAType $rate
     */
    public function addToRate(\Recranet\OTA\Type\RateType\RateAType $rate)
    {
        $this->rate[] = $rate;
        return $this;
    }

    /**
     * isset rate
     *
     * The Rate contains a collection of elements that define the amount of the rate, associated fees, additional occupant amounts as well as payment and cancellation policies. Taxes can be broken out or included within the various amounts. A currency can be associated to each amount The applicable period of the the rate are indicated by the effective dates. Restrictions that may apply to that rate, such as the minimum or maximum length of stay, stay-over dates (such as a Saturday night), min/max guests applicable for the rate, and age group (ex Adult) are attributes of Rate. It indicates the number of units that the quoted rate is based upon, as well as the TimeUnits type used that the rate is based upon, e.g.: 3days at $100.00 per day.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRate($index)
    {
        return isset($this->rate[$index]);
    }

    /**
     * unset rate
     *
     * The Rate contains a collection of elements that define the amount of the rate, associated fees, additional occupant amounts as well as payment and cancellation policies. Taxes can be broken out or included within the various amounts. A currency can be associated to each amount The applicable period of the the rate are indicated by the effective dates. Restrictions that may apply to that rate, such as the minimum or maximum length of stay, stay-over dates (such as a Saturday night), min/max guests applicable for the rate, and age group (ex Adult) are attributes of Rate. It indicates the number of units that the quoted rate is based upon, as well as the TimeUnits type used that the rate is based upon, e.g.: 3days at $100.00 per day.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRate($index)
    {
        unset($this->rate[$index]);
    }

    /**
     * Gets as rate
     *
     * The Rate contains a collection of elements that define the amount of the rate, associated fees, additional occupant amounts as well as payment and cancellation policies. Taxes can be broken out or included within the various amounts. A currency can be associated to each amount The applicable period of the the rate are indicated by the effective dates. Restrictions that may apply to that rate, such as the minimum or maximum length of stay, stay-over dates (such as a Saturday night), min/max guests applicable for the rate, and age group (ex Adult) are attributes of Rate. It indicates the number of units that the quoted rate is based upon, as well as the TimeUnits type used that the rate is based upon, e.g.: 3days at $100.00 per day.
     *
     * @return \Recranet\OTA\Type\RateType\RateAType[]
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * The Rate contains a collection of elements that define the amount of the rate, associated fees, additional occupant amounts as well as payment and cancellation policies. Taxes can be broken out or included within the various amounts. A currency can be associated to each amount The applicable period of the the rate are indicated by the effective dates. Restrictions that may apply to that rate, such as the minimum or maximum length of stay, stay-over dates (such as a Saturday night), min/max guests applicable for the rate, and age group (ex Adult) are attributes of Rate. It indicates the number of units that the quoted rate is based upon, as well as the TimeUnits type used that the rate is based upon, e.g.: 3days at $100.00 per day.
     *
     * @param \Recranet\OTA\Type\RateType\RateAType[] $rate
     * @return self
     */
    public function setRate(array $rate)
    {
        $this->rate = $rate;
        return $this;
    }
}

