<h1 align="center">Reading Time Plugin for <a href="https://flextype.org/">Flextype</a></h1>

<p align="center">
<a href="https://github.com/flextype-plugins/reading-time/releases"><img alt="Version" src="https://img.shields.io/github/release/flextype-plugins/reading-time.svg?label=version&color=black"></a> <a href="https://github.com/flextype-plugins/reading-time"><img src="https://img.shields.io/badge/license-MIT-blue.svg?color=black" alt="License"></a> <a href="https://github.com/flextype-plugins/reading-time"><img src="https://img.shields.io/github/downloads/flextype-plugins/reading-time/total.svg?color=black" alt="Total downloads"></a> <a href="https://github.com/flextype/flextype"><img src="https://img.shields.io/badge/Flextype-0.9.16-green.svg?color=black" alt="Flextype"></a> <a href=""><img src="https://img.shields.io/discord/423097982498635778.svg?logo=discord&color=black&label=Discord%20Chat" alt="Discord"></a>
</p>

Reading Time plugin will help you to know how many readers of every page in your website.

## Dependencies

The following dependencies need to be installed for Reading Time Plugin.

| Item | Version | Download |
|---|---|---|
| [flextype](https://github.com/flextype/flextype) | 0.9.16 | [download](https://github.com/flextype/flextype/releases) |
| [twig](https://github.com/flextype-plugins/twig) | >=2.0.0 | [download](https://github.com/flextype-plugins/twig/releases) |

## Installation

1. Download & Install all required dependencies.
2. Create new folder `/project/plugins/reading-time`
3. Download Reading Time Plugin and unzip plugin content to the folder `/project/plugins/reading-time`

## Settings

| Key | Value | Description |
|---|---|---|
| enabled | true | true or false to disable the plugin |
| priority | 100 | Reading Time plugin priority |

## Documentation

Function `readingTime()` in namespace `Flextype\Plugin\ReadingTime`

```php
/**
 * Get reading time
 *
 * @return string
 */
 function readingTime(string $content, array $options = []): string
```

### Usage

Display reading time with custom translates in the twig templates

```
{{ readingTime(entry.content, {
                'minute': 'Minute',
                'minutes': 'Minutes',
                'second':  'Second',
                'seconds': 'Seconds'
                }) }}
```

Display reading time with custom translates and format in the twig templates

```
{{ readingTime(entry.content, {
                'minute': 'Minute',
                'minutes': 'Minutes',
                'second':  'Second',
                'seconds': 'Seconds',
                'format': '{minutes_count} {minutes_label} – {seconds_count} {seconds_label}'
                }) }}
```

Display reading time with custom translates and format that alternative format that hides the minute label in the twig templates

```
{{ readingTime(entry.content, {
                'minute': 'Minute',
                'minutes': 'Minutes',
                'second':  'Second',
                'seconds': 'Seconds',
                'format': '{minutes_count} {minutes_label} – {seconds_count} {seconds_label}'
                }) }}
```

Display page view counter in the php

```php
echo Flextype\Plugin\ReadingTime\readingTime($content, $options);
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/reading-time/blob/master/LICENSE.txt)
Copyright (c) 2021 [Sergey Romanenko](https://github.com/Awilum)
