<?php

namespace Craft;

require 'vendor/autoload.php';

class InflectPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Inflect');
    }

    public function getVersion()
    {
        return '1.4';
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

    public function addTwigExtension()
    {
        Craft::import('plugins.inflect.twigextensions.InflectTwigExtension');

        return new InflectTwigExtension();
    }
}



