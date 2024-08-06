<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PurpurBlock extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('purpur_block');
    }
}
