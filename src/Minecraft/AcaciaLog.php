<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class AcaciaLog extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('acacia_log_top');
    }
}
