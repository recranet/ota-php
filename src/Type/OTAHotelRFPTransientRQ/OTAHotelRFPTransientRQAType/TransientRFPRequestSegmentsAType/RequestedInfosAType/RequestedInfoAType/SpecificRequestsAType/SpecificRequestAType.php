<?php

namespace Recranet\OTA\Type\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType;

use Recranet\OTA\Type\ParagraphType;

/**
 * Class representing SpecificRequestAType
 */
class SpecificRequestAType extends ParagraphType
{
    /**
     * When true, indicates the data requested by the Name attribute or Text element is mandatory.
     *
     * @var bool $mandatoryIndicator
     */
    private $mandatoryIndicator = null;

    /**
     * Gets as mandatoryIndicator
     *
     * When true, indicates the data requested by the Name attribute or Text element is mandatory.
     *
     * @return bool
     */
    public function getMandatoryIndicator()
    {
        return $this->mandatoryIndicator;
    }

    /**
     * Sets a new mandatoryIndicator
     *
     * When true, indicates the data requested by the Name attribute or Text element is mandatory.
     *
     * @param bool $mandatoryIndicator
     * @return self
     */
    public function setMandatoryIndicator($mandatoryIndicator)
    {
        $this->mandatoryIndicator = $mandatoryIndicator;
        return $this;
    }
}

