<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class JungleSapling extends Block
{
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('jungle_sapling');
    }
}
