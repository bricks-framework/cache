<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Cache;

use BricksFramework\Cache\Adapter\CacheAdapterInterface;

class Cache implements CacheInterface
{
    /** @var CacheAdapterInterface */
    protected $cacheAdapter;

    public function __construct(CacheAdapterInterface $cacheAdapter)
    {
        $this->cacheAdapter = $cacheAdapter;
    }

    public function get(string $key) : mixed
    {
        return $this->cacheAdapter->get($key);
    }

    public function set(string $key, $content, array $tags = []) : void
    {
        $this->cacheAdapter->write($key, $content, $tags);
    }

    public function clean(string $key) : void
    {
        $this->cacheAdapter->clean($key);
    }
}
