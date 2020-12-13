<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Cache\Adapter;

interface CacheAdapterInterface
{
    public function write(string $key, $content, array $tags = []) : void;
    public function fetch(string $key);
    public function clean(string $key) : void;
    public function cleanByTags(array $tags) : void;
}
