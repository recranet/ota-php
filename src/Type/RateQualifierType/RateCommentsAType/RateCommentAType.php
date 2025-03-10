<?php

namespace Recranet\OTA\Type\RateQualifierType\RateCommentsAType;

use Recranet\OTA\Type\FormattedTextTextType;

/**
 * Class representing RateCommentAType
 */
class RateCommentAType extends FormattedTextTextType
{
    /**
     * Defines the type of rate comments (e.g., textual rule, marketing information).
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * Defines the type of rate comments (e.g., textual rule, marketing information).
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Defines the type of rate comments (e.g., textual rule, marketing information).
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

