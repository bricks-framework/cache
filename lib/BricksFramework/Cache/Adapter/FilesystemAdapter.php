<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Cache\Adapter;

class FilesystemAdapter implements CacheAdapterInterface
{
    /** @var string */
    protected $cacheDir;

    public function __construct(string $cacheDir)
    {
        $this->cacheDir = $cacheDir;
    }

    public function write(string $key, $content, array $tags = []) : void
    {
    }

    public function fetch(string $key)
    {
    }

    public function clean(string $key) : void
    {
    }

    public function cleanByTags(array $tags) : void
    {
    }
}
