<?php

namespace Recranet\OTA\Type\RuleInfoType;

/**
 * Class representing ResTicketingRulesAType
 */
class ResTicketingRulesAType
{
    /**
     * Container for holding rules regarding advance reservation or ticketing restrictions.
     *
     * @var \Recranet\OTA\Type\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing
     */
    private $advResTicketing = null;

    /**
     * Gets as advResTicketing
     *
     * Container for holding rules regarding advance reservation or ticketing restrictions.
     *
     * @return \Recranet\OTA\Type\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType
     */
    public function getAdvResTicketing()
    {
        return $this->advResTicketing;
    }

    /**
     * Sets a new advResTicketing
     *
     * Container for holding rules regarding advance reservation or ticketing restrictions.
     *
     * @param \Recranet\OTA\Type\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing
     * @return self
     */
    public function setAdvResTicketing(?\Recranet\OTA\Type\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing = null)
    {
        $this->advResTicketing = $advResTicketing;
        return $this;
    }
}

