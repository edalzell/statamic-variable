# Variable

Get and set variables in Antlers

## Install

From your site folder, run `composer require edalzell/variable`


## Usage

To set a variable, pass in a value:

```
{{ variable:var_to_set :value="in_scope_variable "}}
```

To get it:

```
{{ variable:var_to_set default="default value" }}
```