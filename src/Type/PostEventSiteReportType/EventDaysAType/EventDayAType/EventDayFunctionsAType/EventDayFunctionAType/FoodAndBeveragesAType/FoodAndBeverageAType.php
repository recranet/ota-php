<?php

namespace Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType;

/**
 * Class representing FoodAndBeverageAType
 */
class FoodAndBeverageAType
{
    /**
     * The number of settings required.
     *
     * @var int $setForQuantity
     */
    private $setForQuantity = null;

    /**
     * The time or date and time of food and beverage service.
     *
     * @var \DateTime $serviceTime
     */
    private $serviceTime = null;

    /**
     * The number of people served.
     *
     * @var int $attendeeQuantity
     */
    private $attendeeQuantity = null;

    /**
     * The number of people guaranteed.
     *
     * @var int $guaranteeQuantity
     */
    private $guaranteeQuantity = null;

    /**
     * The type of meal being served. Refer to OpenTravel Code list Available Meal Category (AMC).
     *
     * @var string $mealTypeCode
     */
    private $mealTypeCode = null;

    /**
     * The type of food and beverage service being provided (e.g., buffet, plated). Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @var string $serviceTypeCode
     */
    private $serviceTypeCode = null;

    /**
     * A collection of comments associated with the food and beverage requirement.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * A collection of menus.
     *
     * @var \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[] $menus
     */
    private $menus = null;

    /**
     * Gets as setForQuantity
     *
     * The number of settings required.
     *
     * @return int
     */
    public function getSetForQuantity()
    {
        return $this->setForQuantity;
    }

    /**
     * Sets a new setForQuantity
     *
     * The number of settings required.
     *
     * @param int $setForQuantity
     * @return self
     */
    public function setSetForQuantity($setForQuantity)
    {
        $this->setForQuantity = $setForQuantity;
        return $this;
    }

    /**
     * Gets as serviceTime
     *
     * The time or date and time of food and beverage service.
     *
     * @return \DateTime
     */
    public function getServiceTime()
    {
        return $this->serviceTime;
    }

    /**
     * Sets a new serviceTime
     *
     * The time or date and time of food and beverage service.
     *
     * @param \DateTime $serviceTime
     * @return self
     */
    public function setServiceTime(\DateTime $serviceTime)
    {
        $this->serviceTime = $serviceTime;
        return $this;
    }

    /**
     * Gets as attendeeQuantity
     *
     * The number of people served.
     *
     * @return int
     */
    public function getAttendeeQuantity()
    {
        return $this->attendeeQuantity;
    }

    /**
     * Sets a new attendeeQuantity
     *
     * The number of people served.
     *
     * @param int $attendeeQuantity
     * @return self
     */
    public function setAttendeeQuantity($attendeeQuantity)
    {
        $this->attendeeQuantity = $attendeeQuantity;
        return $this;
    }

    /**
     * Gets as guaranteeQuantity
     *
     * The number of people guaranteed.
     *
     * @return int
     */
    public function getGuaranteeQuantity()
    {
        return $this->guaranteeQuantity;
    }

    /**
     * Sets a new guaranteeQuantity
     *
     * The number of people guaranteed.
     *
     * @param int $guaranteeQuantity
     * @return self
     */
    public function setGuaranteeQuantity($guaranteeQuantity)
    {
        $this->guaranteeQuantity = $guaranteeQuantity;
        return $this;
    }

    /**
     * Gets as mealTypeCode
     *
     * The type of meal being served. Refer to OpenTravel Code list Available Meal Category (AMC).
     *
     * @return string
     */
    public function getMealTypeCode()
    {
        return $this->mealTypeCode;
    }

    /**
     * Sets a new mealTypeCode
     *
     * The type of meal being served. Refer to OpenTravel Code list Available Meal Category (AMC).
     *
     * @param string $mealTypeCode
     * @return self
     */
    public function setMealTypeCode($mealTypeCode)
    {
        $this->mealTypeCode = $mealTypeCode;
        return $this;
    }

    /**
     * Gets as serviceTypeCode
     *
     * The type of food and beverage service being provided (e.g., buffet, plated). Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @return string
     */
    public function getServiceTypeCode()
    {
        return $this->serviceTypeCode;
    }

    /**
     * Sets a new serviceTypeCode
     *
     * The type of food and beverage service being provided (e.g., buffet, plated). Refer to OpenTravel Code list Event Charge (EVT).
     *
     * @param string $serviceTypeCode
     * @return self
     */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->serviceTypeCode = $serviceTypeCode;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments associated with the food and beverage requirement.
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
     * A collection of comments associated with the food and beverage requirement.
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
     * A collection of comments associated with the food and beverage requirement.
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
     * A collection of comments associated with the food and beverage requirement.
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
     * A collection of comments associated with the food and beverage requirement.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Adds as menu
     *
     * A collection of menus.
     *
     * @return self
     * @param \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType $menu
     */
    public function addToMenus(\Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType $menu)
    {
        $this->menus[] = $menu;
        return $this;
    }

    /**
     * isset menus
     *
     * A collection of menus.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMenus($index)
    {
        return isset($this->menus[$index]);
    }

    /**
     * unset menus
     *
     * A collection of menus.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMenus($index)
    {
        unset($this->menus[$index]);
    }

    /**
     * Gets as menus
     *
     * A collection of menus.
     *
     * @return \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[]
     */
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * Sets a new menus
     *
     * A collection of menus.
     *
     * @param \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[] $menus
     * @return self
     */
    public function setMenus(array $menus = null)
    {
        $this->menus = $menus;
        return $this;
    }
}

