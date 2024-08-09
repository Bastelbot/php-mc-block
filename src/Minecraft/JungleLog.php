<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class JungleLog extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('jungle_log_top');
    }
}
