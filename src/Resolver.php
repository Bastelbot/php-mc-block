<?php
namespace Bastelbot\McBlock;

class Resolver
{
    const ASSETS_PATH = __DIR__ . '/../../../assets';

    protected function getModelsPath ()
    {
        return self::ASSETS_PATH . '/minecraft/models';
    }

    protected function getModelJSON ($path)
    {
        $file = $this->getModelsPath() . '/' . $path . '.json';
        return json_decode(file_get_contents($file));
    }


    protected function resolveParent ($child)
    {
        if(empty($child->parent)) return $child;
        $parent = $this->getModelJSON($child->parent);
        $parent = $this->resolveParent($parent);
        return (object) array_merge_recursive((array) $child, (array) $parent);
    }

    public function resolveName ($name)
    {
        $json = $this->getModelJSON('block/'.$name);
        $json = $this->resolveParent($json);
        print_r($json);
    }


}


// test
$r = new Resolver();
$r->resolveName('stone');
