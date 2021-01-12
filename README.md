# Events Calendar Pro Composer Installer
Heavily inspired by [gravityforms-composer-installer](https://github.com/gtap-dev/gravityforms-composer-installer) and
[private-composer-installer](https://github.com/ffraenz/private-composer-installer).

## How to Use

1) Require this composer plugin
```bash
composer require spenserhale/events-calendar-pro-composer-installer
```

2) Update your `composer.json` by merging the example JSON
```json
{
  "repositories": [
    {
      "type": "package",
      "package": {
        "name": "modern-tribe/events-calendar-pro",
        "version": "5.2.1.1",
        "type": "wordpress-plugin",
        "dist": {
          "url": "https://pue.tri.be/api/plugins/v2/download?plugin=events-calendar-pro&version=5.2.1.1&key={%WP_EVENTS_CALENDAR_PRO_LICENSE}",
          "type": "zip"
        }
      }
    }
  ],
  "require": {
    "modern-tribe/events-calendar-pro": "5.2.1.1"
  },
  "extra": {
    "installer-paths": {
      "plugins/{$name}": [
        "type:wordpress-plugin"
      ]
    }
  },
  "minimum-stability": "dev"
}
```

3) Provide your licence key variable `WP_EVENTS_CALENDAR_PRO_LICENSE` inside the `.env` file.
```text
WP_EVENTS_CALENDAR_PRO_LICENSE=my-secret-key
```

4) Require the plugin
```bash
composer require modern-tribe/events-calendar-pro
```
