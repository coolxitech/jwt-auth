<?php

namespace thans\jwt\provider\interface;
use Lcobucci\JWT\Encoding\CannotDecodeContent;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Token;
use Lcobucci\JWT\Token\InvalidTokenStructure;
use Lcobucci\JWT\Token\UnsupportedHeaderFound;

final class CustomParser implements Parser
{

    /**
     * Parses the JWT and returns a token
     *
     * @throws CannotDecodeContent      When something goes wrong while decoding.
     * @throws InvalidTokenStructure    When token string structure is invalid.
     * @throws UnsupportedHeaderFound   When parsed token has an unsupported header.
     */
    public function parse(string $jwt): Token
    {
        // TODO: Implement parse() method.
    }
}