<?php

namespace Recranet\OTA\TextDescriptionType;

use Recranet\OTA\FormattedTextTextType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType extends FormattedTextTextType
{
    /**
     * Sequence number associated with this description.
     *
     * @var int $listItem
     */
    private $listItem = null;

    /**
     * Gets as listItem
     *
     * Sequence number associated with this description.
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
     * Sequence number associated with this description.
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

