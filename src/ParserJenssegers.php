<?php

namespace Package\UserAgent\Test;

use Jenssegers\Agent\Agent;
use Package\Interface\Test\UserAgentInterface;

class ParserJenssegers implements UserAgentInterface
{
    protected $_data;

    public function __construct()
    {
        $this->_data = new Agent();
    }

    public function setUserAgent($userAgent = null): ?string
    {
        return $this->_data->setUserAgent($userAgent);
    }

    public function getBrowser(): ?string
    {
        return $this->_data->browser() ?? null;
    }

    public function getPlatform(): ?string
    {
        return $this->_data->platform() ?? null;
    }
}
