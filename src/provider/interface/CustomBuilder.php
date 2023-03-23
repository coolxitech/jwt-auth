<?php
namespace thans\jwt\provider\interface;

use DateTimeImmutable;
use \Lcobucci\JWT\Builder;
use Lcobucci\JWT\Encoding\CannotEncodeContent;
use Lcobucci\JWT\Signer;
use Lcobucci\JWT\Signer\CannotSignPayload;
use Lcobucci\JWT\Signer\Ecdsa\ConversionFailed;
use Lcobucci\JWT\Signer\InvalidKeyProvided;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Token\Plain;
use Lcobucci\JWT\Token\RegisteredClaimGiven;

final class CustomBuilder implements Builder
{

    /**
     * Appends new items to audience
     */
    public function permittedFor(string ...$audiences): Builder
    {
        // TODO: Implement permittedFor() method.
    }

    /**
     * Configures the expiration time
     */
    public function expiresAt(DateTimeImmutable $expiration): Builder
    {
        // TODO: Implement expiresAt() method.
    }

    /**
     * Configures the token id
     */
    public function identifiedBy(string $id): Builder
    {
        // TODO: Implement identifiedBy() method.
    }

    /**
     * Configures the time that the token was issued
     */
    public function issuedAt(DateTimeImmutable $issuedAt): Builder
    {
        // TODO: Implement issuedAt() method.
    }

    /**
     * Configures the issuer
     */
    public function issuedBy(string $issuer): Builder
    {
        // TODO: Implement issuedBy() method.
    }

    /**
     * Configures the time before which the token cannot be accepted
     */
    public function canOnlyBeUsedAfter(DateTimeImmutable $notBefore): Builder
    {
        // TODO: Implement canOnlyBeUsedAfter() method.
    }

    /**
     * Configures the subject
     */
    public function relatedTo(string $subject): Builder
    {
        // TODO: Implement relatedTo() method.
    }

    /**
     * Configures a header item
     *
     * @param mixed $value
     */
    public function withHeader(string $name, $value): Builder
    {
        // TODO: Implement withHeader() method.
    }

    /**
     * Configures a claim item
     *
     * @param mixed $value
     *
     * @throws RegisteredClaimGiven When trying to set a registered claim.
     */
    public function withClaim(string $name, $value): Builder
    {
        // TODO: Implement withClaim() method.
    }

    /**
     * Returns a signed token to be used
     *
     * @throws CannotEncodeContent When data cannot be converted to JSON.
     * @throws CannotSignPayload   When payload signing fails.
     * @throws InvalidKeyProvided  When issue key is invalid/incompatible.
     * @throws ConversionFailed    When signature could not be converted.
     */
    public function getToken(Signer $signer, Key $key): Plain
    {
        // TODO: Implement getToken() method.
    }
}