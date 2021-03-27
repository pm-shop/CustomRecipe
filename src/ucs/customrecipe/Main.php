<?php

namespace ucs\customrecipe;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

use ucs\customrecipe\recipes\Craft;
use ucs\customrecipe\recipes\Furnace;

class Main extends PluginBase
{
    /** @var Main $instance */
    public static $instance;

    public function onEnable()
    {
        self::$instance = $this;

        Craft::init();
        Furnace::init();
        self::$instance->getLogger()->info("§9»§a Custom Recipe - PMS §9«");
    }

    public function onDisable()
    {
        self::$instance->getLogger()->info("§9»§c Custom Recipe - PMS §9«");
    }

    public static function getInstance(): self {
        return self::$instance;
    }

    public static function getIntoConfig(String $config, String $get) {
        return self::getConfigFile($config)->get($get);
    }

    public static function getConfigFile(String $config): Config {
        return new Config(self::getInstance()->getDataFolder() . $config . ".yml", Config::YAML);
    }
}