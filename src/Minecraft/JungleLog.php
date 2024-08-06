<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class JungleLog extends Block
{
    protected $name = 'minecraft:jungle_log';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('jungle_log_top');
    }
}
