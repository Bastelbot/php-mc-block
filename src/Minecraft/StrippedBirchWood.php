<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class StrippedBirchWood extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stripped_birch_log_top');
    }
}
