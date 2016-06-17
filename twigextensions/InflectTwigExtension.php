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
            'ordinal',
            'summarizeNumber',
        );

        foreach ($methods as $methodName) {
            $returnArray[$methodName] = new \Twig_SimpleFilter($methodName, array($this, $methodName));
        }

        return $returnArray;
    }

    public function pluralize($content, $num = 2)
    {
        if ($num >= 2) {
            return $this->inflector->pluralize($content);
        }

        return $this->inflector->singularize($content);
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

    public function ordinal($content)
    {
        return $this->inflector->ordinal($content);
    }

    public function ordinalize($content)
    {
        return $this->inflector->ordinalize($content);
    }

    public function dasherize($content)
    {
        return $this->inflector->dasherize($content);
    }

    public function slugify($content)
    {
        return ElementHelper::createSlug($content);
    }

    /**
     * @param $content
     * @param string $prefixOrPostfix The text to be use prepended/appended to the short form
     * @param bool $usePostfix If false, use prefix format, otherwise use postfix
     * @param int $precision The number of decimal places to round to
     * @return string
     */
    public function summarizeNumber($content, $prefixOrPostfix = '+', $usePostfix = true, $precision = 0)
    {
        $number = (int)$content;
        $units = array(
            'b' => 1000000000,
            'm' => 1000000,
            'k' => 1000,
        );
        foreach ($units as $letter => $count) {
            if ($number > $count) {
                // Remove prefix/postfix if it's an exact number
                $prefixOrPostfix = ($number % $count) ? $prefixOrPostfix : '';

                if ($usePostfix) {
                    return round(($number / $count), $precision) . $letter . $prefixOrPostfix;
                } else {
                    return $prefixOrPostfix . round(($number / $count), $precision) . $letter;
                }

            } elseif ($number == $count) {
                return "1" . $letter;
            }
        }

        return $number;
    }
}
