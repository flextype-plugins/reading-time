# Reading Time Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.2.0-brightgreen.svg?style=flat-square "Version")
![Flextype](https://img.shields.io/badge/Flextype-0.9.5-green.svg?style=flat-square "Flextype Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/flextype-plugins/reading-time/blob/master/LICENSE.txt)

Estimated reading time plugin for Flextype

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage

Localization  

```
{{ readingTime(entry.content, {
                'minute': 'Minute',
                'minutes': 'Minutes',
                'second':  'Second',
                'seconds': 'Seconds'
                }) }}
```

Set custom format of the result   

```
{{ readingTime(entry.content, {
                'minute': 'Minute',
                'minutes': 'Minutes',
                'second':  'Second',
                'seconds': 'Seconds',
                'format': '{minutes_count} {minutes_label} – {seconds_count} {seconds_label}'
                }) }}
```

Enable alternative format that hides the minute label.

```
{{ readingTime(entry.content, {
                    'format': '{minutes_count} {minutes_label}, {seconds_count} {seconds_label}',
                    'format.alt': '{seconds_count} {seconds_label}',
                    'format.alt.enable': true
                }) }}
```

## License
See [LICENSE](https://github.com/flextype-plugins/reading-time/blob/master/LICENSE)
