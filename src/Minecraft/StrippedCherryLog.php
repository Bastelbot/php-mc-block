<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class StrippedCherryLog extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('stripped_cherry_log_top');
    }
}
