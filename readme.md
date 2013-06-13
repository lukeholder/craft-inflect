# Inflection Craft Plugin

This plugin enables a pluralize filter in twig to turn plural
forms of words into singlar forms, and singular forms into plural depending on
the number passed to the filter.

# Download

This github project is for developers using composer to require dependencies. Do
 not download the zip from github, but download here:

 https://dl.dropbox.com/s/805cjdc6mvvv1vx/inflect.zip


# Usage Examples

```
{{ 'bum'|pluralize(3) }}
```

will output:

```
bums
```

and

```
{{ 'person'|pluralize }}
```

will output:

```
people
```

and


```
{{ 'people'|pluralize(1) }}
```

will output:

```
person
```

Another example:

```
 {% set entries = craft.entries.find() %}
 {% set size = entries|length %}
 You have: {{size}} {{ 'entry'|pluralize(size) }}﻿
```

will output

```
You have: 3 entries
```

# MIT Licence

Made by Luke Holder
