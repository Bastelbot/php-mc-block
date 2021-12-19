<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class LilyOfTheValley extends Block
{
    protected $name = 'minecraft:lily_of_the_valley';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('lily_of_the_valley');
    }
}
