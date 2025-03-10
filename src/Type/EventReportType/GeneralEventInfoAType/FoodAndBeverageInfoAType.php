<?php

namespace Recranet\OTA\Type\EventReportType\GeneralEventInfoAType;

/**
 * Class representing FoodAndBeverageInfoAType
 */
class FoodAndBeverageInfoAType
{
    /**
     * When true, indicates this event had at least one food and beverage function.
     *
     * @var bool $foodAndBeverageIndicator
     */
    private $foodAndBeverageIndicator = null;

    /**
     * Specifies the attendance at the largest food and beverage function for the event.
     *
     * @var int $largestAttendanceQuantity
     */
    private $largestAttendanceQuantity = null;

    /**
     * Identifies the type of function with the largest attendance. Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @var string $largestAttendanceFunctionType
     */
    private $largestAttendanceFunctionType = null;

    /**
     * Identifies the type of function that generated the most revenue. Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @var string $largestRevenueFunctionType
     */
    private $largestRevenueFunctionType = null;

    /**
     * In conjunction with indicator. When true, indicates there was at least one function that was not sponsored by this event, but that was held in conjunction with this event.
     *
     * @var bool $iCWIndicator
     */
    private $iCWIndicator = null;

    /**
     * A collection of comments regarding the general food and beverage information.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as foodAndBeverageIndicator
     *
     * When true, indicates this event had at least one food and beverage function.
     *
     * @return bool
     */
    public function getFoodAndBeverageIndicator()
    {
        return $this->foodAndBeverageIndicator;
    }

    /**
     * Sets a new foodAndBeverageIndicator
     *
     * When true, indicates this event had at least one food and beverage function.
     *
     * @param bool $foodAndBeverageIndicator
     * @return self
     */
    public function setFoodAndBeverageIndicator($foodAndBeverageIndicator)
    {
        $this->foodAndBeverageIndicator = $foodAndBeverageIndicator;
        return $this;
    }

    /**
     * Gets as largestAttendanceQuantity
     *
     * Specifies the attendance at the largest food and beverage function for the event.
     *
     * @return int
     */
    public function getLargestAttendanceQuantity()
    {
        return $this->largestAttendanceQuantity;
    }

    /**
     * Sets a new largestAttendanceQuantity
     *
     * Specifies the attendance at the largest food and beverage function for the event.
     *
     * @param int $largestAttendanceQuantity
     * @return self
     */
    public function setLargestAttendanceQuantity($largestAttendanceQuantity)
    {
        $this->largestAttendanceQuantity = $largestAttendanceQuantity;
        return $this;
    }

    /**
     * Gets as largestAttendanceFunctionType
     *
     * Identifies the type of function with the largest attendance. Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @return string
     */
    public function getLargestAttendanceFunctionType()
    {
        return $this->largestAttendanceFunctionType;
    }

    /**
     * Sets a new largestAttendanceFunctionType
     *
     * Identifies the type of function with the largest attendance. Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @param string $largestAttendanceFunctionType
     * @return self
     */
    public function setLargestAttendanceFunctionType($largestAttendanceFunctionType)
    {
        $this->largestAttendanceFunctionType = $largestAttendanceFunctionType;
        return $this;
    }

    /**
     * Gets as largestRevenueFunctionType
     *
     * Identifies the type of function that generated the most revenue. Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @return string
     */
    public function getLargestRevenueFunctionType()
    {
        return $this->largestRevenueFunctionType;
    }

    /**
     * Sets a new largestRevenueFunctionType
     *
     * Identifies the type of function that generated the most revenue. Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @param string $largestRevenueFunctionType
     * @return self
     */
    public function setLargestRevenueFunctionType($largestRevenueFunctionType)
    {
        $this->largestRevenueFunctionType = $largestRevenueFunctionType;
        return $this;
    }

    /**
     * Gets as iCWIndicator
     *
     * In conjunction with indicator. When true, indicates there was at least one function that was not sponsored by this event, but that was held in conjunction with this event.
     *
     * @return bool
     */
    public function getICWIndicator()
    {
        return $this->iCWIndicator;
    }

    /**
     * Sets a new iCWIndicator
     *
     * In conjunction with indicator. When true, indicates there was at least one function that was not sponsored by this event, but that was held in conjunction with this event.
     *
     * @param bool $iCWIndicator
     * @return self
     */
    public function setICWIndicator($iCWIndicator)
    {
        $this->iCWIndicator = $iCWIndicator;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments regarding the general food and beverage information.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\Type\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments regarding the general food and beverage information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments regarding the general food and beverage information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments regarding the general food and beverage information.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments regarding the general food and beverage information.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

