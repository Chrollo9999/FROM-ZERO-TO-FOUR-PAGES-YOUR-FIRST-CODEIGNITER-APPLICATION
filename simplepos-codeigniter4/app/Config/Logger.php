<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Log\Handlers\FileHandler;

class Logger extends BaseConfig
{
    public int $threshold = 4;
    public string $dateFormat = 'Y-m-d H:i:s';

    public array $handlers = [
        FileHandler::class => [
            'handles' => [],
            'path' => '',
            'fileExtension' => '',
            'filePermissions' => 0644,
        ],
    ];
}
