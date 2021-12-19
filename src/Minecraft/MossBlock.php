<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MossBlock extends Block
{
    protected $name = 'minecraft:moss_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('moss_block');
    }
}
