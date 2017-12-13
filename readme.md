# Inflection Craft Plugin

This plugin enables a several Twig filters to transform the inflection of strings using the following methods:

* pluralize
* singularize
* camelize
* dasherize
* pascalize
* titleize
* underscore
* humanize
* hyphenate
* ordinalize
* slugify

# Craft 2 Only

Most of the above filters are now already available in Craft 2 and 3. See the chart below for the mapping:

| Inflect | Craft 2 | Craft 3 |
| --- | --- | --- |
| `pluralize` | |  Try the [Typogrify](https://github.com/nystudio107/craft3-typogrify) plugin|
| `singularize`| |  Try the [Typogrify](https://github.com/nystudio107/craft3-typogrify) plugin|
| `camelize` | `camel` |  `camel` |
| `dasherize` | `kebab` | `kebab` |
| `pascalize` | `pascal` | `pascal` |
| `titleize` | `ucwords` or `title` | `ucwords` or `title` |
| `humanize` | | Try the [Typogrify](https://github.com/nystudio107/craft3-typogrify) plugin |
| `hyphenate` | | Try the [Typogrify](https://github.com/nystudio107/craft3-typogrify) plugin |
| `ordinalize` | | Try the [Typogrify](https://github.com/nystudio107/craft3-typogrify) plugin |
| `slugify` | | Try the [Typogrify](https://github.com/nystudio107/craft3-typogrify) plugin |

The [Typogrify](https://github.com/nystudio107/craft3-typogrify) plugin allows you to use all of the [Stringy](https://github.com/danielstjules/Stringy) package features on your strings.

# Download

This github project is for developers using composer to require dependencies. Do not download the zip from github, but download on the releases page.


# Usage Examples

```
{{ 'bum'|pluralize(3) }} # bums
```

```
{{ 'person'|pluralize }} # people
```

```
{{ 'people'|pluralize(1) }} # person
```

```
 {% set entries = craft.entries.find() %}
 {% set size = entries|length %}
 You have: {{ size }} {{ 'entry'|pluralize(size) }}﻿ # You have: 3 entries
 The {{ size|ordinalize }} entry # The third entry
```

```
{{ 'My string to inflect'|slugify }} # my-string-to-inflect
{{ 'my-string-to-inflect'|camelize }} # myStringToInflect
{{ 'myStringToInflect'|underscore }} # my_string_to_inflect
{{ 'my_string_to_inflect'|dasherize }} # my-string-to-inflect
{{ 'my-string-to-inflect'|pascalize }} # MyStringToInflect
{{ 'MyStringToInflect'|hyphenate }} # my-string-to-inflect
{{ 'my-string-to-inflect'|titleize }} # My String To Inflect
{{ 'My String To Inflect'|slugify|camelize }} # myStringToInflect
```

# MIT Licence

Original Author Luke Holder
Contributors: Tim Kelty

