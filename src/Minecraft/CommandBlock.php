<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CommandBlock extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('command_block_front');
    }
}
