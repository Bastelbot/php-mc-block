<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PinkTulip extends Block
{
    protected $name = 'minecraft:pink_tulip';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('pink_tulip');
    }
}
