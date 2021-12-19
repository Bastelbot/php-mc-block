<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class RedTulip extends Block
{
    protected $name = 'minecraft:red_tulip';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('red_tulip');
    }
}
