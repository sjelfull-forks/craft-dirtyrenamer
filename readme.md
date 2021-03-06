# Dirty Renamer

This is a craft plugin that allows you to rename control panel labels in Craft
CMS. Its a dirty method that uses javascript to find dom node and replace its
html.


## How to use

copy the plugin folder "dirtyrenamer" to your plugins directory in craft.

Rename config-example.php to config.php

Add Key-Value pairs to the php array within config.php

The keys are the jQuery selectors and the values are the replacement html.

for example:

```
return array(
  "#sidebar > nav > ul > li:nth-child(2) > a" => "Special Pages"
);
```
this will select the link to the singles on the entries listing page in the control panel and rename 
it to "Special Pages"

## Before
![](http://dl.dropboxusercontent.com/s/jab3gulaj23eelk/2014-05-29%20at%205.14%20pm.png)

## After
![](http://dl.dropboxusercontent.com/s/d0st324idroomp0/2014-05-29%20at%205.17%20pm.png)

## How do you know the right selector?

Within Chrome, simply right click on the element you want to rename and click 
"inspect element". The console will open with the html node highlighted. Right
click on the text you wish to replace and select "Copy CSS Path". This will copy the 
specific path to your clipboard.

![](http://dl.dropboxusercontent.com/s/zajs72muxi5q1jy/2014-05-29%20at%205.08%20pm.png)

Also check out this cool chrome extension:
http://selectorgadget.com/

## TODOs

I welcome pull requests.

* add a qualifier for the url
* store mappings in db and not a config file
* UI in control panel to create mappings