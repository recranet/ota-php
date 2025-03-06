<?php

namespace Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType;

/**
 * Class representing MenusAType
 */
class MenusAType
{
    /**
     * Menu and menu charges.
     *
     * @var \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[] $menu
     */
    private $menu = [
        
    ];

    /**
     * Adds as menu
     *
     * Menu and menu charges.
     *
     * @return self
     * @param \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType $menu
     */
    public function addToMenu(\Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType $menu)
    {
        $this->menu[] = $menu;
        return $this;
    }

    /**
     * isset menu
     *
     * Menu and menu charges.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMenu($index)
    {
        return isset($this->menu[$index]);
    }

    /**
     * unset menu
     *
     * Menu and menu charges.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMenu($index)
    {
        unset($this->menu[$index]);
    }

    /**
     * Gets as menu
     *
     * Menu and menu charges.
     *
     * @return \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[]
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Sets a new menu
     *
     * Menu and menu charges.
     *
     * @param \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[] $menu
     * @return self
     */
    public function setMenu(array $menu)
    {
        $this->menu = $menu;
        return $this;
    }
}

