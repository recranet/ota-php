<?php

namespace Recranet\OTA\Type\CategoryCodesType;

/**
 * Class representing GuestRoomInfoAType
 */
class GuestRoomInfoAType
{
    /**
     * Refer to OpenTravel Code List Guest Room Info (GRI).
     *
     * @var string $code
     */
    private $code = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @var bool $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @var string $codeDetail
     */
    private $codeDetail = null;

    /**
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * This attribute is used to explicitly define whether the Code applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Code.
     *
     * @var string $existsCode
     */
    private $existsCode = null;

    /**
     * A collection of rate range information.
     *
     * @var \Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[] $rateRanges
     */
    private $rateRanges = null;

    /**
     * Multimedia information about the guest room.
     *
     * @var \Recranet\OTA\Type\MultimediaDescriptionsType $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Descriptive text that describes the guest room.
     *
     * @var string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Guest Room Info (GRI).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Refer to OpenTravel Code List Guest Room Info (GRI).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @return bool
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @param bool $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;
        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether the Code applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Code.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether the Code applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with Code.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;
        return $this;
    }

    /**
     * Adds as rateRange
     *
     * A collection of rate range information.
     *
     * @return self
     * @param \Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType $rateRange
     */
    public function addToRateRanges(\Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType $rateRange)
    {
        $this->rateRanges[] = $rateRange;
        return $this;
    }

    /**
     * isset rateRanges
     *
     * A collection of rate range information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateRanges($index)
    {
        return isset($this->rateRanges[$index]);
    }

    /**
     * unset rateRanges
     *
     * A collection of rate range information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateRanges($index)
    {
        unset($this->rateRanges[$index]);
    }

    /**
     * Gets as rateRanges
     *
     * A collection of rate range information.
     *
     * @return \Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[]
     */
    public function getRateRanges()
    {
        return $this->rateRanges;
    }

    /**
     * Sets a new rateRanges
     *
     * A collection of rate range information.
     *
     * @param \Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[] $rateRanges
     * @return self
     */
    public function setRateRanges(array $rateRanges = null)
    {
        $this->rateRanges = $rateRanges;
        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the guest room.
     *
     * @return \Recranet\OTA\Type\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the guest room.
     *
     * @param \Recranet\OTA\Type\MultimediaDescriptionsType $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(?\Recranet\OTA\Type\MultimediaDescriptionsType $multimediaDescriptions = null)
    {
        $this->multimediaDescriptions = $multimediaDescriptions;
        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the guest room.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the guest room.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;
        return $this;
    }
}

