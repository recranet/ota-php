<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ListQuestionCategoryType
 *
 * Review question categories
 * XSD Type: List_QuestionCategory
 */
class ListQuestionCategoryType
{
    /**
     * An enumerated list.
     *
     * @var string $list
     */
    private $list = null;

    /**
     * Code List extension information.
     *
     * @var \Recranet\OTA\Type\CodeListSummaryExtensionType $extension
     */
    private $extension = null;

    /**
     * Gets as list
     *
     * An enumerated list.
     *
     * @return string
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Sets a new list
     *
     * An enumerated list.
     *
     * @param string $list
     * @return self
     */
    public function setList($list)
    {
        $this->list = $list;
        return $this;
    }

    /**
     * Gets as extension
     *
     * Code List extension information.
     *
     * @return \Recranet\OTA\Type\CodeListSummaryExtensionType
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * Code List extension information.
     *
     * @param \Recranet\OTA\Type\CodeListSummaryExtensionType $extension
     * @return self
     */
    public function setExtension(?\Recranet\OTA\Type\CodeListSummaryExtensionType $extension = null)
    {
        $this->extension = $extension;
        return $this;
    }
}

