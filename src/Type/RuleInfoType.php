<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RuleInfoType
 *
 * Contains summary fare rule information as well as detailed Rule Information for Fare Basis Codes. Information may be actual rules data or the results returned from a rules-based inquiry.
 * XSD Type: RuleInfoType
 */
class RuleInfoType
{
    /**
     * General container for rules regarding fare reservation, ticketing and sale restrictions
     *
     * @var \Recranet\OTA\Type\RuleInfoType\ResTicketingRulesAType $resTicketingRules
     */
    private $resTicketingRules = null;

    /**
     * Rules providing minimum or maximum stay restrictions.
     *
     * @var \Recranet\OTA\Type\StayRestrictionsType $lengthOfStayRules
     */
    private $lengthOfStayRules = null;

    /**
     * General container for rules specifying amounts for such things as: surcharges, deposits, change penalties, cancellation penalties, etc.
     *
     * @var \Recranet\OTA\Type\RuleInfoType\ChargesRulesAType $chargesRules
     */
    private $chargesRules = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as resTicketingRules
     *
     * General container for rules regarding fare reservation, ticketing and sale restrictions
     *
     * @return \Recranet\OTA\Type\RuleInfoType\ResTicketingRulesAType
     */
    public function getResTicketingRules()
    {
        return $this->resTicketingRules;
    }

    /**
     * Sets a new resTicketingRules
     *
     * General container for rules regarding fare reservation, ticketing and sale restrictions
     *
     * @param \Recranet\OTA\Type\RuleInfoType\ResTicketingRulesAType $resTicketingRules
     * @return self
     */
    public function setResTicketingRules(?\Recranet\OTA\Type\RuleInfoType\ResTicketingRulesAType $resTicketingRules = null)
    {
        $this->resTicketingRules = $resTicketingRules;
        return $this;
    }

    /**
     * Gets as lengthOfStayRules
     *
     * Rules providing minimum or maximum stay restrictions.
     *
     * @return \Recranet\OTA\Type\StayRestrictionsType
     */
    public function getLengthOfStayRules()
    {
        return $this->lengthOfStayRules;
    }

    /**
     * Sets a new lengthOfStayRules
     *
     * Rules providing minimum or maximum stay restrictions.
     *
     * @param \Recranet\OTA\Type\StayRestrictionsType $lengthOfStayRules
     * @return self
     */
    public function setLengthOfStayRules(?\Recranet\OTA\Type\StayRestrictionsType $lengthOfStayRules = null)
    {
        $this->lengthOfStayRules = $lengthOfStayRules;
        return $this;
    }

    /**
     * Gets as chargesRules
     *
     * General container for rules specifying amounts for such things as: surcharges, deposits, change penalties, cancellation penalties, etc.
     *
     * @return \Recranet\OTA\Type\RuleInfoType\ChargesRulesAType
     */
    public function getChargesRules()
    {
        return $this->chargesRules;
    }

    /**
     * Sets a new chargesRules
     *
     * General container for rules specifying amounts for such things as: surcharges, deposits, change penalties, cancellation penalties, etc.
     *
     * @param \Recranet\OTA\Type\RuleInfoType\ChargesRulesAType $chargesRules
     * @return self
     */
    public function setChargesRules(?\Recranet\OTA\Type\RuleInfoType\ChargesRulesAType $chargesRules = null)
    {
        $this->chargesRules = $chargesRules;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

