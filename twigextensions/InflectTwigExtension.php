<?php

namespace Craft;

use ICanBoogie\Inflector;
use Twig_Extension;
use Twig_Filter_Method;

class InflectTwigExtension extends \Twig_Extension
{
    public $inflector;

    public function __construct()
    {
        $this->inflector = Inflector::get();
    }

    public function getName()
    {
        return 'Inflect Twig Extension';
    }

    public function getFilters()
    {
        $returnArray = array();
        $methods = array(
            'pluralize',
            'singularize',
            'camelize',
            'dasherize',
            'pascalize',
            'titleize',
            'underscore',
            'humanize',
            'hyphenate',
            'ordinalize',
            'slugify',
        );

        foreach ($methods as $methodName) {
            $returnArray[$methodName] = new \Twig_Filter_Method($this, $methodName);
        }

        return $returnArray;
    }

    public function pluralize($content, $num = 2)
    {
        return $this->inflector->pluralize($content, $num);
    }

    public function singularize($content)
    {
        return $this->inflector->singularize($content);
    }

    public function camelize($content)
    {
        return $this->inflector->camelize($content, true);
    }

    public function pascalize($content)
    {
        return $this->inflector->camelize($content, false);
    }

    public function titleize($content)
    {
        return $this->inflector->titleize($content, false);
    }

    public function underscore($content)
    {
        return $this->inflector->underscore($content);
    }

    public function humanize($content)
    {
        return $this->inflector->humanize($content);
    }

    public function hyphenate($content)
    {
        return $this->inflector->hyphenate($content);
    }

    public function ordinalize($content)
    {
        return $this->inflector->hyphenate($content);
    }

    public function dasherize($content)
    {
        return $this->inflector->dasherize($content);
    }

    public function slugify($content)
    {
        return ElementHelper::createSlug($content);
    }
}
