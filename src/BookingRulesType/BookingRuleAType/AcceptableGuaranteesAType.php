<?php

namespace Recranet\OTA\BookingRulesType\BookingRuleAType;

/**
 * Class representing AcceptableGuaranteesAType
 */
class AcceptableGuaranteesAType
{
    /**
     * The guarantee information.
     *
     * @var \Recranet\OTA\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[] $acceptableGuarantee
     */
    private $acceptableGuarantee = [
        
    ];

    /**
     * Adds as acceptableGuarantee
     *
     * The guarantee information.
     *
     * @return self
     * @param \Recranet\OTA\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType $acceptableGuarantee
     */
    public function addToAcceptableGuarantee(\Recranet\OTA\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType $acceptableGuarantee)
    {
        $this->acceptableGuarantee[] = $acceptableGuarantee;
        return $this;
    }

    /**
     * isset acceptableGuarantee
     *
     * The guarantee information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptableGuarantee($index)
    {
        return isset($this->acceptableGuarantee[$index]);
    }

    /**
     * unset acceptableGuarantee
     *
     * The guarantee information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptableGuarantee($index)
    {
        unset($this->acceptableGuarantee[$index]);
    }

    /**
     * Gets as acceptableGuarantee
     *
     * The guarantee information.
     *
     * @return \Recranet\OTA\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[]
     */
    public function getAcceptableGuarantee()
    {
        return $this->acceptableGuarantee;
    }

    /**
     * Sets a new acceptableGuarantee
     *
     * The guarantee information.
     *
     * @param \Recranet\OTA\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[] $acceptableGuarantee
     * @return self
     */
    public function setAcceptableGuarantee(array $acceptableGuarantee)
    {
        $this->acceptableGuarantee = $acceptableGuarantee;
        return $this;
    }
}

