<?php

namespace Recranet\OTA;

/**
 * Class representing FormattedTextTextType
 *
 * Provides text and indicates whether it is formatted or not.
 * XSD Type: FormattedTextTextType
 */
class FormattedTextTextType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Textual information, which may be formatted as a line of information, or unformatted, as a paragraph of text.
     *
     * @var bool $formatted
     */
    private $formatted = null;

    /**
     * Language identification.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * Indicates the format of text used in the description e.g. unformatted or html.
     *
     * @var string $textFormat
     */
    private $textFormat = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as formatted
     *
     * Textual information, which may be formatted as a line of information, or unformatted, as a paragraph of text.
     *
     * @return bool
     */
    public function getFormatted()
    {
        return $this->formatted;
    }

    /**
     * Sets a new formatted
     *
     * Textual information, which may be formatted as a line of information, or unformatted, as a paragraph of text.
     *
     * @param bool $formatted
     * @return self
     */
    public function setFormatted($formatted)
    {
        $this->formatted = $formatted;
        return $this;
    }

    /**
     * Gets as language
     *
     * Language identification.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language identification.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as textFormat
     *
     * Indicates the format of text used in the description e.g. unformatted or html.
     *
     * @return string
     */
    public function getTextFormat()
    {
        return $this->textFormat;
    }

    /**
     * Sets a new textFormat
     *
     * Indicates the format of text used in the description e.g. unformatted or html.
     *
     * @param string $textFormat
     * @return self
     */
    public function setTextFormat($textFormat)
    {
        $this->textFormat = $textFormat;
        return $this;
    }
}

