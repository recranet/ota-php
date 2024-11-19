<?php

namespace Recranet\OTA\ParagraphType;

use Recranet\OTA\FormattedTextTextType;

/**
 * Class representing ListItemAType
 */
class ListItemAType extends FormattedTextTextType
{
    /**
     * The item or sequence number.
     *
     * @var int $listItem
     */
    private $listItem = null;

    /**
     * Gets as listItem
     *
     * The item or sequence number.
     *
     * @return int
     */
    public function getListItem()
    {
        return $this->listItem;
    }

    /**
     * Sets a new listItem
     *
     * The item or sequence number.
     *
     * @param int $listItem
     * @return self
     */
    public function setListItem($listItem)
    {
        $this->listItem = $listItem;
        return $this;
    }
}

