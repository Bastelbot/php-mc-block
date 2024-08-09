<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class StrippedSpruceWood extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('stripped_spruce_log_top');
    }
}
