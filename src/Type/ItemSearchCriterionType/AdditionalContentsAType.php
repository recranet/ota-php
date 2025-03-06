<?php

namespace Recranet\OTA\Type\ItemSearchCriterionType;

/**
 * Class representing AdditionalContentsAType
 */
class AdditionalContentsAType
{
    /**
     * Describes the specific content requested.
     *
     * @var \Recranet\OTA\Type\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[] $additionalContent
     */
    private $additionalContent = [
        
    ];

    /**
     * Adds as additionalContent
     *
     * Describes the specific content requested.
     *
     * @return self
     * @param \Recranet\OTA\Type\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType $additionalContent
     */
    public function addToAdditionalContent(\Recranet\OTA\Type\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType $additionalContent)
    {
        $this->additionalContent[] = $additionalContent;
        return $this;
    }

    /**
     * isset additionalContent
     *
     * Describes the specific content requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalContent($index)
    {
        return isset($this->additionalContent[$index]);
    }

    /**
     * unset additionalContent
     *
     * Describes the specific content requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalContent($index)
    {
        unset($this->additionalContent[$index]);
    }

    /**
     * Gets as additionalContent
     *
     * Describes the specific content requested.
     *
     * @return \Recranet\OTA\Type\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[]
     */
    public function getAdditionalContent()
    {
        return $this->additionalContent;
    }

    /**
     * Sets a new additionalContent
     *
     * Describes the specific content requested.
     *
     * @param \Recranet\OTA\Type\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[] $additionalContent
     * @return self
     */
    public function setAdditionalContent(array $additionalContent)
    {
        $this->additionalContent = $additionalContent;
        return $this;
    }
}

