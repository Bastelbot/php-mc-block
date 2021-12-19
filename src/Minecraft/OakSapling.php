<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class OakSapling extends Block
{
    protected $name = 'minecrafte:oak_sapling';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('oak_sapling');
    }
}
