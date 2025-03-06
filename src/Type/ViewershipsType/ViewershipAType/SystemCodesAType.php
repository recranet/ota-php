<?php

namespace Recranet\OTA\Type\ViewershipsType\ViewershipAType;

/**
 * Class representing SystemCodesAType
 */
class SystemCodesAType
{
    /**
     * Indicates whether the collection of System Codes is inclusive or exclusive. Values: false=Exclusive, true=Inclusive.
     *
     * @var bool $systemCodesInclusive
     */
    private $systemCodesInclusive = null;

    /**
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @var \Recranet\OTA\Type\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType[] $systemCode
     */
    private $systemCode = [
        
    ];

    /**
     * Gets as systemCodesInclusive
     *
     * Indicates whether the collection of System Codes is inclusive or exclusive. Values: false=Exclusive, true=Inclusive.
     *
     * @return bool
     */
    public function getSystemCodesInclusive()
    {
        return $this->systemCodesInclusive;
    }

    /**
     * Sets a new systemCodesInclusive
     *
     * Indicates whether the collection of System Codes is inclusive or exclusive. Values: false=Exclusive, true=Inclusive.
     *
     * @param bool $systemCodesInclusive
     * @return self
     */
    public function setSystemCodesInclusive($systemCodesInclusive)
    {
        $this->systemCodesInclusive = $systemCodesInclusive;
        return $this;
    }

    /**
     * Adds as systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @return self
     * @param \Recranet\OTA\Type\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType $systemCode
     */
    public function addToSystemCode(\Recranet\OTA\Type\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType $systemCode)
    {
        $this->systemCode[] = $systemCode;
        return $this;
    }

    /**
     * isset systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSystemCode($index)
    {
        return isset($this->systemCode[$index]);
    }

    /**
     * unset systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSystemCode($index)
    {
        unset($this->systemCode[$index]);
    }

    /**
     * Gets as systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @return \Recranet\OTA\Type\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType[]
     */
    public function getSystemCode()
    {
        return $this->systemCode;
    }

    /**
     * Sets a new systemCode
     *
     * The system code (e.g., AA, 1P, 1G, 1A) associated with this viewership record.
     *
     * @param \Recranet\OTA\Type\ViewershipsType\ViewershipAType\SystemCodesAType\SystemCodeAType[] $systemCode
     * @return self
     */
    public function setSystemCode(array $systemCode)
    {
        $this->systemCode = $systemCode;
        return $this;
    }
}

