<?php

namespace Recranet\OTA\GDSInfoType;

/**
 * Class representing GDSCodesAType
 */
class GDSCodesAType
{
    /**
     * When true, this indicates rates will be loaded to specified GDSs. This attribute is also under GDS_Code to associate the rate load for an individual GDS. (This may also be used to idicate the willingness to upload rates to GDSs even if not specified in the request message.)
     *
     * @var bool $loadGDSIndicator
     */
    private $loadGDSIndicator = null;

    /**
     * Provides detailed information regarding the specified GDS.
     *
     * @var \Recranet\OTA\GDSInfoType\GDSCodesAType\GDSCodeAType[] $gDSCode
     */
    private $gDSCode = [
        
    ];

    /**
     * Gets as loadGDSIndicator
     *
     * When true, this indicates rates will be loaded to specified GDSs. This attribute is also under GDS_Code to associate the rate load for an individual GDS. (This may also be used to idicate the willingness to upload rates to GDSs even if not specified in the request message.)
     *
     * @return bool
     */
    public function getLoadGDSIndicator()
    {
        return $this->loadGDSIndicator;
    }

    /**
     * Sets a new loadGDSIndicator
     *
     * When true, this indicates rates will be loaded to specified GDSs. This attribute is also under GDS_Code to associate the rate load for an individual GDS. (This may also be used to idicate the willingness to upload rates to GDSs even if not specified in the request message.)
     *
     * @param bool $loadGDSIndicator
     * @return self
     */
    public function setLoadGDSIndicator($loadGDSIndicator)
    {
        $this->loadGDSIndicator = $loadGDSIndicator;
        return $this;
    }

    /**
     * Adds as gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @return self
     * @param \Recranet\OTA\GDSInfoType\GDSCodesAType\GDSCodeAType $gDSCode
     */
    public function addToGDSCode(\Recranet\OTA\GDSInfoType\GDSCodesAType\GDSCodeAType $gDSCode)
    {
        $this->gDSCode[] = $gDSCode;
        return $this;
    }

    /**
     * isset gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGDSCode($index)
    {
        return isset($this->gDSCode[$index]);
    }

    /**
     * unset gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGDSCode($index)
    {
        unset($this->gDSCode[$index]);
    }

    /**
     * Gets as gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @return \Recranet\OTA\GDSInfoType\GDSCodesAType\GDSCodeAType[]
     */
    public function getGDSCode()
    {
        return $this->gDSCode;
    }

    /**
     * Sets a new gDSCode
     *
     * Provides detailed information regarding the specified GDS.
     *
     * @param \Recranet\OTA\GDSInfoType\GDSCodesAType\GDSCodeAType[] $gDSCode
     * @return self
     */
    public function setGDSCode(array $gDSCode = null)
    {
        $this->gDSCode = $gDSCode;
        return $this;
    }
}

