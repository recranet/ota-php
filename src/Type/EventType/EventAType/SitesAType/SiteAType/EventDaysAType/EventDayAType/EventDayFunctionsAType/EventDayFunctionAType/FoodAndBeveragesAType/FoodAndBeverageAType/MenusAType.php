<?php

namespace Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType;

/**
 * Class representing MenusAType
 */
class MenusAType
{
    /**
     * Menu details.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[] $menu
     */
    private $menu = [
        
    ];

    /**
     * Adds as menu
     *
     * Menu details.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType $menu
     */
    public function addToMenu(\Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType $menu)
    {
        $this->menu[] = $menu;
        return $this;
    }

    /**
     * isset menu
     *
     * Menu details.
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
     * Menu details.
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
     * Menu details.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[]
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Sets a new menu
     *
     * Menu details.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType\FoodAndBeverageAType\MenusAType\MenuAType[] $menu
     * @return self
     */
    public function setMenu(array $menu)
    {
        $this->menu = $menu;
        return $this;
    }
}

