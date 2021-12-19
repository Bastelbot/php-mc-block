<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class WhiteTulip extends Block
{
    protected $name = 'minecraft:white_tulip';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('white_tulip');
    }
}
