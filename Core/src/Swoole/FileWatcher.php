<?php

namespace Ody\Core\Swoole;


interface FileWatcher
{
    public function addFilePath(string $path): void;

    /**
     * @return string[]
     */
    public function readChanges(): array;
}