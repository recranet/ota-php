<?php

namespace Recranet\OTA\Type\AffiliationInfoType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{
    /**
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * Adds as description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $description
     */
    public function addToDescription(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Describes affiliation information (e.g., accolades, recognition).
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }
}

