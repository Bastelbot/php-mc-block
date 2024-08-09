<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class CommandBlock extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('command_block_front');
    }
}
