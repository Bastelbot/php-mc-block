<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class SpruceLog extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('spruce_log_top');
    }
}
