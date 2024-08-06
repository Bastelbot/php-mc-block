<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class PrismarineBrickSlab extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('prismarine_bricks');
    }
}
