<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class MangroveLog extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('mangrove_log_top');
    }
}
