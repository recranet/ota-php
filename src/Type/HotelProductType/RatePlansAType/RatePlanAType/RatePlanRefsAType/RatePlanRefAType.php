<?php

namespace Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType;

/**
 * Class representing RatePlanRefAType
 */
class RatePlanRefAType
{
    /**
     * A code that uniquely identifes the rate plan.
     *
     * @var string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the RatePlanCode.
     *
     * @var string $ratePlanCodeContext
     */
    private $ratePlanCodeContext = null;

    /**
     * Description information related the rate plan.
     *
     * @var \Recranet\OTA\Type\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as ratePlanCode
     *
     * A code that uniquely identifes the rate plan.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * A code that uniquely identifes the rate plan.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as ratePlanCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the RatePlanCode.
     *
     * @return string
     */
    public function getRatePlanCodeContext()
    {
        return $this->ratePlanCodeContext;
    }

    /**
     * Sets a new ratePlanCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the RatePlanCode.
     *
     * @param string $ratePlanCodeContext
     * @return self
     */
    public function setRatePlanCodeContext($ratePlanCodeContext)
    {
        $this->ratePlanCodeContext = $ratePlanCodeContext;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description information related the rate plan.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description information related the rate plan.
     *
     * @param \Recranet\OTA\Type\ParagraphType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\ParagraphType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

