<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Bell extends Block
{
    protected $name = 'minecraft:bell';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->getEmptyImg();
    }
}
