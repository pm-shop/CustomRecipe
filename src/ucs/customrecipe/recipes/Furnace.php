<?php

namespace ucs\customrecipe\recipes;

use pocketmine\inventory\FurnaceRecipe;
use pocketmine\item\Item;
use pocketmine\item\ItemIds;
use ucs\customrecipe\Main;

class Furnace
{
    public static function init() {
        $example = new FurnaceRecipe(Item::get(ItemIds::APPLEENCHANTED), Item::get(ItemIds::GOLDEN_APPLE));
        Main::$instance->getServer()->getCraftingManager()->registerFurnaceRecipe($example);
    }
}