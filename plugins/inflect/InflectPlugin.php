<?php

namespace Craft;

require 'vendor/autoload.php';

use Inflector\Inflector as Ifnl;

class InflectPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Inflect');
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Luke Holder';
    }

    public function getDeveloperUrl()
    {
        return 'http://patchworks.io';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function hookAddTwigExtension()
    {
        Craft::import('plugins.inflect.twigextensions.InflectTwigExtension');

        return new InflectTwigExtension();
    }
}



