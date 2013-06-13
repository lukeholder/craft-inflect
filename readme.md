# Inflection Craft Plugin

This plugin enables in following in twig:


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
