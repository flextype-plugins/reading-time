# Reading Time Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.1.1-brightgreen.svg?style=flat-square "Version")
![Flextype](https://img.shields.io/badge/Flextype-0.7.0-green.svg?style=flat-square "Flextype Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/flextype-plugins/reading-time/blob/master/LICENSE.txt)

Estimated reading time plugin for Flextype

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage

Simple usage  

```
<?php namespace Flextype; ?>
<?php echo readingTime($page['content']); ?>
```

Localization  

```
<?php echo readingTime($page['content'], [
    'minute'  => 'Minute',
    'minutes' => 'Minutes',
    'second'  => 'Second',
    'seconds' => 'Seconds']);
?>
```

Set custom format of the result   

```
<?php echo readingTime($page['content'], [
    'minute'  => 'Minute',
    'minutes' => 'Minutes',
    'second'  => 'Second',
    'seconds' => 'Seconds',
    'format'  => '{minutes_count} {minutes_label} – {seconds_count} {seconds_label}']);
?>
```

Enable alternative format that hides the minute label.

```
<?php echo readingTime($page['content'], [
    'format' => '{minutes_count} {minutes_label}, {seconds_count} {seconds_label}',
    'format.alt' => '{seconds_count} {seconds_label}',
    'format.alt.enable' => true]);
?>
```

## License
See [LICENSE](https://github.com/flextype-plugins/reading-time/blob/master/LICENSE)
