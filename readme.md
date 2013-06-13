# Inflection Craft Plugin

This plugin enables in twig:


```
{{ 'bum'|pluralize(3) }}
```

will output:

```
bums
```

```
{{ 'person'|pluralize }}
```

will output:

```
people
```

```
{{ 'people'|pluralize(1) }}
```

will output:

```
person
```

MIT Licence.
