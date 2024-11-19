<?php

namespace Recranet\OTA\PoliciesType\PolicyAType\CommissionPolicyAType;

/**
 * Class representing PaymentCompanyAType
 */
class PaymentCompanyAType
{
    /**
     * The name of the company processing the commission payment for the property.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * The name of the company processing the commission payment for the property.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the company processing the commission payment for the property.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

