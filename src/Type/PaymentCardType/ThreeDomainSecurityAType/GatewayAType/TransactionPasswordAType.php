<?php

namespace Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType\GatewayAType;

/**
 * Class representing TransactionPasswordAType
 */
class TransactionPasswordAType
{
    /**
     * Secure representation.
     * Example: AEGHV234AUD54367 (tokenized)
     * Example: 5dfc52b51bd35553df8592078de921bc (encrypted)
     * Example: xxxxxxxxxxxx4444 (masked)
     *
     * @var \Recranet\OTA\Type\EncryptionTokenType $secure
     */
    private $secure = null;

    /**
     * Plain text representation.
     * Example: acG@26!w
     *
     * @var string $plainText
     */
    private $plainText = null;

    /**
     * Gets as secure
     *
     * Secure representation.
     * Example: AEGHV234AUD54367 (tokenized)
     * Example: 5dfc52b51bd35553df8592078de921bc (encrypted)
     * Example: xxxxxxxxxxxx4444 (masked)
     *
     * @return \Recranet\OTA\Type\EncryptionTokenType
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * Sets a new secure
     *
     * Secure representation.
     * Example: AEGHV234AUD54367 (tokenized)
     * Example: 5dfc52b51bd35553df8592078de921bc (encrypted)
     * Example: xxxxxxxxxxxx4444 (masked)
     *
     * @param \Recranet\OTA\Type\EncryptionTokenType $secure
     * @return self
     */
    public function setSecure(?\Recranet\OTA\Type\EncryptionTokenType $secure = null)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * Gets as plainText
     *
     * Plain text representation.
     * Example: acG@26!w
     *
     * @return string
     */
    public function getPlainText()
    {
        return $this->plainText;
    }

    /**
     * Sets a new plainText
     *
     * Plain text representation.
     * Example: acG@26!w
     *
     * @param string $plainText
     * @return self
     */
    public function setPlainText($plainText)
    {
        $this->plainText = $plainText;
        return $this;
    }
}

