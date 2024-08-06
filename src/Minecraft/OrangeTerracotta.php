<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OrangeTerracotta extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('orange_terracotta');
    }
}
