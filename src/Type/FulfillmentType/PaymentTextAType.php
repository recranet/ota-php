<?php

namespace Recranet\OTA\Type\FulfillmentType;

use Recranet\OTA\Type\FormattedTextTextType;

/**
 * Class representing PaymentTextAType
 */
class PaymentTextAType extends FormattedTextTextType
{
    /**
     * Used to specify the type of information.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * Used to specify the type of information.
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
     * Used to specify the type of information.
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

