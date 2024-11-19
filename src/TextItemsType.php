<?php

namespace Recranet\OTA;

/**
 * Class representing TextItemsType
 *
 * Collection of text items.
 * XSD Type: TextItemsType
 */
class TextItemsType
{
    /**
     * Text description of a given category.
     *
     * @var \Recranet\OTA\TextItemsType\TextItemAType[] $textItem
     */
    private $textItem = [
        
    ];

    /**
     * Adds as textItem
     *
     * Text description of a given category.
     *
     * @return self
     * @param \Recranet\OTA\TextItemsType\TextItemAType $textItem
     */
    public function addToTextItem(\Recranet\OTA\TextItemsType\TextItemAType $textItem)
    {
        $this->textItem[] = $textItem;
        return $this;
    }

    /**
     * isset textItem
     *
     * Text description of a given category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTextItem($index)
    {
        return isset($this->textItem[$index]);
    }

    /**
     * unset textItem
     *
     * Text description of a given category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTextItem($index)
    {
        unset($this->textItem[$index]);
    }

    /**
     * Gets as textItem
     *
     * Text description of a given category.
     *
     * @return \Recranet\OTA\TextItemsType\TextItemAType[]
     */
    public function getTextItem()
    {
        return $this->textItem;
    }

    /**
     * Sets a new textItem
     *
     * Text description of a given category.
     *
     * @param \Recranet\OTA\TextItemsType\TextItemAType[] $textItem
     * @return self
     */
    public function setTextItem(array $textItem)
    {
        $this->textItem = $textItem;
        return $this;
    }
}

