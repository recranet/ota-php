<?php

namespace Recranet\OTA\RuleInfoType;

/**
 * Class representing ResTicketingRulesAType
 */
class ResTicketingRulesAType
{
    /**
     * Container for holding rules regarding advance reservation or ticketing restrictions.
     *
     * @var \Recranet\OTA\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing
     */
    private $advResTicketing = null;

    /**
     * Gets as advResTicketing
     *
     * Container for holding rules regarding advance reservation or ticketing restrictions.
     *
     * @return \Recranet\OTA\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType
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
     * @param \Recranet\OTA\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing
     * @return self
     */
    public function setAdvResTicketing(?\Recranet\OTA\RuleInfoType\ResTicketingRulesAType\AdvResTicketingAType $advResTicketing = null)
    {
        $this->advResTicketing = $advResTicketing;
        return $this;
    }
}

