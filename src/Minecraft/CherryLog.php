<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class CherryLog extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('cherry_log_top');
    }
}
