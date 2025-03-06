<?php

namespace Recranet\OTA\Type\InvBlockType;

/**
 * Class representing BlockDescriptionsAType
 */
class BlockDescriptionsAType
{
    /**
     * Used for free form descriptive information about the inventory block.
     *
     * @var \Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[] $blockDescription
     */
    private $blockDescription = [
        
    ];

    /**
     * Adds as blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @return self
     * @param \Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType $blockDescription
     */
    public function addToBlockDescription(\Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType $blockDescription)
    {
        $this->blockDescription[] = $blockDescription;
        return $this;
    }

    /**
     * isset blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBlockDescription($index)
    {
        return isset($this->blockDescription[$index]);
    }

    /**
     * unset blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBlockDescription($index)
    {
        unset($this->blockDescription[$index]);
    }

    /**
     * Gets as blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @return \Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[]
     */
    public function getBlockDescription()
    {
        return $this->blockDescription;
    }

    /**
     * Sets a new blockDescription
     *
     * Used for free form descriptive information about the inventory block.
     *
     * @param \Recranet\OTA\Type\InvBlockType\BlockDescriptionsAType\BlockDescriptionAType[] $blockDescription
     * @return self
     */
    public function setBlockDescription(array $blockDescription)
    {
        $this->blockDescription = $blockDescription;
        return $this;
    }
}

