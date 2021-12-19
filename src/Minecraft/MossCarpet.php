<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class MossCarpet extends Block
{
    protected $name = 'minecraft:moss_carpet';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('moss_block');
    }
}
