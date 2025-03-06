<?php

namespace Recranet\OTA\Type\FulfillmentType;

/**
 * Class representing ReceiptAType
 */
class ReceiptAType
{
    /**
     * Refer to OpenTravel Code List Distribution Type List (DTB).
     *
     * @var string $distribType
     */
    private $distribType = null;

    /**
     * Gets as distribType
     *
     * Refer to OpenTravel Code List Distribution Type List (DTB).
     *
     * @return string
     */
    public function getDistribType()
    {
        return $this->distribType;
    }

    /**
     * Sets a new distribType
     *
     * Refer to OpenTravel Code List Distribution Type List (DTB).
     *
     * @param string $distribType
     * @return self
     */
    public function setDistribType($distribType)
    {
        $this->distribType = $distribType;
        return $this;
    }
}

