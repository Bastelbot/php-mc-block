<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Carrots extends Block
{
    protected $name = 'minecraft:carrots';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('carrots_stage3');
    }
}
