<?php

namespace Craft;

// require '../vendor/autoload.php';

use Inflector\Inflector as Ifnl;
use Twig_Extension;
use Twig_Filter_Method;

class InflectTwigExtension extends \Twig_Extension
{
    public $i;

    public function __construct()
    {
        $this->i = new Ifnl;
    }

    public function getName()
    {
        return 'cocktailrecipes';
    }

    public function getFilters()
    {
        return array(
            'pluralize' => new Twig_Filter_Method($this, 'pluralize'),
        );
    }

    public function pluralize($content,$num = 2)
    {
        return $this->i->pluralize($content, $num);
    }
}
// $inflector->pluralize('person'[,10]); # people
// $inflector->singularize('shoes'); # shoe
// $inflector->titleize('welcome page'); # "Welcome Page"
// $inflector->camelize('send_email'); # SendEmail
// $inflector->underscore('CamelCased'); # camel_cased
// $inflector->humanize('something text to read'); # "Something text to read"
// $inflector->ordinalize(10); # 10th

