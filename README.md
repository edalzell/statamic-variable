# Variable

Get and set variables in Antlers

## Install

From your site folder, run `composer require edalzell/variable`


## Usage

To set a custom variable within a scope, you can pass the whole scope as the value like so:

```
{{ variable:var_to_set :value="in_scope_variable "}}
```

To set a custom string as your value:

```
{{ variable:var_to_set value="Hello World!" }}
```

To return your custom variable value, you can do this:

```
{{ variable:var_to_set default="default value" }}
```
