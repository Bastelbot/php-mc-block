<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OrangeTulip extends Block
{
    protected $name = 'minecraft:orange_tulip';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('orange_tulip');
    }
}
