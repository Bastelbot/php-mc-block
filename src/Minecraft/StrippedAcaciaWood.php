<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class StrippedAcaciaWood extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('stripped_acacia_log_top');
    }
}
