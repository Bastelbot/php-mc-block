<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class RootedDirt extends Block
{
    protected $name = 'minecraft:rooted_dirt';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('rooted_dirt');
    }
}
