<?php declare(strict_types=1);

namespace SocialNews\Framework\Dbal;

final class DatabaseUrl
{
    /** @var $url - contains all the information that the driver manager from
    * the DBAL package needs to create a new connection 
    */
    private $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function toString(): string
    {
        return $this->url;
    }
}