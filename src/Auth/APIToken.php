<?php
/**
 * User: junade
 * Date: 13/01/2017
 * Time: 16:55
 */

namespace Cloudflare\API\Auth;

class APIToken implements Auth
{
    private $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getHeaders(): array
    {
        return [
            'X-Authorization'   => sprintf('Bearer %s', $this->token)
        ];
    }
}
