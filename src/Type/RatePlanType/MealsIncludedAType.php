<?php

namespace Recranet\OTA\Type\RatePlanType;

/**
 * Class representing MealsIncludedAType
 */
class MealsIncludedAType
{
    /**
     * When true, indicates breakfast is included.
     *
     * @var bool $breakfast
     */
    private $breakfast = null;

    /**
     * When true, indicates lunch is included.
     *
     * @var bool $lunch
     */
    private $lunch = null;

    /**
     * When true, indicates dinner is included.
     *
     * @var bool $dinner
     */
    private $dinner = null;

    /**
     * When true, a meal plan is included in this rate plan. When false, a meal plan is not included in this rate plan.
     *
     * @var bool $mealPlanIndicator
     */
    private $mealPlanIndicator = null;

    /**
     * Used to identify the types of meals included with a rate plan. Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @var string[] $mealPlanCodes
     */
    private $mealPlanCodes = null;

    /**
     * Gets as breakfast
     *
     * When true, indicates breakfast is included.
     *
     * @return bool
     */
    public function getBreakfast()
    {
        return $this->breakfast;
    }

    /**
     * Sets a new breakfast
     *
     * When true, indicates breakfast is included.
     *
     * @param bool $breakfast
     * @return self
     */
    public function setBreakfast($breakfast)
    {
        $this->breakfast = $breakfast;
        return $this;
    }

    /**
     * Gets as lunch
     *
     * When true, indicates lunch is included.
     *
     * @return bool
     */
    public function getLunch()
    {
        return $this->lunch;
    }

    /**
     * Sets a new lunch
     *
     * When true, indicates lunch is included.
     *
     * @param bool $lunch
     * @return self
     */
    public function setLunch($lunch)
    {
        $this->lunch = $lunch;
        return $this;
    }

    /**
     * Gets as dinner
     *
     * When true, indicates dinner is included.
     *
     * @return bool
     */
    public function getDinner()
    {
        return $this->dinner;
    }

    /**
     * Sets a new dinner
     *
     * When true, indicates dinner is included.
     *
     * @param bool $dinner
     * @return self
     */
    public function setDinner($dinner)
    {
        $this->dinner = $dinner;
        return $this;
    }

    /**
     * Gets as mealPlanIndicator
     *
     * When true, a meal plan is included in this rate plan. When false, a meal plan is not included in this rate plan.
     *
     * @return bool
     */
    public function getMealPlanIndicator()
    {
        return $this->mealPlanIndicator;
    }

    /**
     * Sets a new mealPlanIndicator
     *
     * When true, a meal plan is included in this rate plan. When false, a meal plan is not included in this rate plan.
     *
     * @param bool $mealPlanIndicator
     * @return self
     */
    public function setMealPlanIndicator($mealPlanIndicator)
    {
        $this->mealPlanIndicator = $mealPlanIndicator;
        return $this;
    }

    /**
     * Adds as mealPlanCodes
     *
     * Used to identify the types of meals included with a rate plan. Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @return self
     * @param string $mealPlanCodes
     */
    public function addToMealPlanCodes($mealPlanCodes)
    {
        $this->mealPlanCodes[] = $mealPlanCodes;
        return $this;
    }

    /**
     * isset mealPlanCodes
     *
     * Used to identify the types of meals included with a rate plan. Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMealPlanCodes($index)
    {
        return isset($this->mealPlanCodes[$index]);
    }

    /**
     * unset mealPlanCodes
     *
     * Used to identify the types of meals included with a rate plan. Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMealPlanCodes($index)
    {
        unset($this->mealPlanCodes[$index]);
    }

    /**
     * Gets as mealPlanCodes
     *
     * Used to identify the types of meals included with a rate plan. Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @return string[]
     */
    public function getMealPlanCodes()
    {
        return $this->mealPlanCodes;
    }

    /**
     * Sets a new mealPlanCodes
     *
     * Used to identify the types of meals included with a rate plan. Refer to OpenTravel Code List Meal Plan Type (MPT).
     *
     * @param string $mealPlanCodes
     * @return self
     */
    public function setMealPlanCodes(array $mealPlanCodes)
    {
        $this->mealPlanCodes = $mealPlanCodes;
        return $this;
    }
}

