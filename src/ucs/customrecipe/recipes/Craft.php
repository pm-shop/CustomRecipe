<?php

namespace ucs\customrecipe\recipes;

use pocketmine\inventory\ShapedRecipe;
use pocketmine\item\Item;
use pocketmine\item\ItemIds;
use ucs\customrecipe\Main;

class Craft
{
    public static function init() {
        $example = new ShapedRecipe(["AAA", "ABA", "AAA"], ["A"=>Item::get(ItemIds::DIRT), "B"=>Item::get(ItemIds::SLIME)], [Item::get(ItemIds::STICK)]);
        Main::$instance->getServer()->getCraftingManager()->registerShapedRecipe($example);
    }
}