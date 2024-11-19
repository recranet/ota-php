<?php

namespace Recranet\OTA;

/**
 * Class representing EmailType
 *
 * Electronic email addresses, in IETF specified format.
 * XSD Type: EmailType
 */
class EmailType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @var string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * When true, indicates a default value should be used.
     *
     * @var bool $defaultInd
     */
    private $defaultInd = null;

    /**
     * Defines the purpose of the e-mail address (e.g. personal, business, listserve). Refer to OpenTravel Code List Email Address Type (EAT).
     *
     * @var string $emailType
     */
    private $emailType = null;

    /**
     * Used elsewhere in the message to reference this specific email address.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * A remark associated with the e-mail address.
     *
     * @var string $remark
     */
    private $remark = null;

    /**
     * Valid email address indicator.
     * Example: true
     * If true, this is a valid email address that has been system verified via a successful email transmission.
     *
     * @var bool $validInd
     */
    private $validInd = null;

    /**
     * Preferred email format.
     * Example: text/plain
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
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @return bool
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @param bool $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;
        return $this;
    }

    /**
     * Gets as emailType
     *
     * Defines the purpose of the e-mail address (e.g. personal, business, listserve). Refer to OpenTravel Code List Email Address Type (EAT).
     *
     * @return string
     */
    public function getEmailType()
    {
        return $this->emailType;
    }

    /**
     * Sets a new emailType
     *
     * Defines the purpose of the e-mail address (e.g. personal, business, listserve). Refer to OpenTravel Code List Email Address Type (EAT).
     *
     * @param string $emailType
     * @return self
     */
    public function setEmailType($emailType)
    {
        $this->emailType = $emailType;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Used elsewhere in the message to reference this specific email address.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Used elsewhere in the message to reference this specific email address.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with the e-mail address.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * A remark associated with the e-mail address.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * Gets as validInd
     *
     * Valid email address indicator.
     * Example: true
     * If true, this is a valid email address that has been system verified via a successful email transmission.
     *
     * @return bool
     */
    public function getValidInd()
    {
        return $this->validInd;
    }

    /**
     * Sets a new validInd
     *
     * Valid email address indicator.
     * Example: true
     * If true, this is a valid email address that has been system verified via a successful email transmission.
     *
     * @param bool $validInd
     * @return self
     */
    public function setValidInd($validInd)
    {
        $this->validInd = $validInd;
        return $this;
    }

    /**
     * Gets as textFormat
     *
     * Preferred email format.
     * Example: text/plain
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
     * Preferred email format.
     * Example: text/plain
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

