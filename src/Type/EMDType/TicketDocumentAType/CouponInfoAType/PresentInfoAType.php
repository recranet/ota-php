<?php

namespace Recranet\OTA\Type\EMDType\TicketDocumentAType\CouponInfoAType;

/**
 * Class representing PresentInfoAType
 */
class PresentInfoAType
{
    /**
     * Name of service provider.
     *
     * @var string $to
     */
    private $to = null;

    /**
     * The location of the service provider.
     *
     * @var string $at
     */
    private $at = null;

    /**
     * Gets as to
     *
     * Name of service provider.
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * Name of service provider.
     *
     * @param string $to
     * @return self
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Gets as at
     *
     * The location of the service provider.
     *
     * @return string
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * Sets a new at
     *
     * The location of the service provider.
     *
     * @param string $at
     * @return self
     */
    public function setAt($at)
    {
        $this->at = $at;
        return $this;
    }
}

