# Production-Plugins

#### Contributors

* URL: https://wakeudpreamer.com.au
* Github: [@LucidNinja](https://github.com/lucidninja)


## Abstract

A simple, developer plugin with no GUI that deactivates unhelpful Wordpress plugins on non-production sites.


## Steps

1. Add this file to the mu-plugins folder of Wordpress, in order to deactivate the required plugins.
2. Edit the plugins array to include the plugins you wish to deactivate on non-production environments.

```
  $plugins = array(
    'ithemes-security-pro/ithemes-security-pro.php',
    'backupbuddy/backupbuddy.php',
  );
```

## Dependencies

This plugin uses [PHP dotenv](https://github.com/vlucas/phpdotenv) to manage environment variables. In order for this plugin to work, you must be using the `WP_ENV` variable, which accepts either `development`, `staging` or `production`. 

For more information on .env, see:
* [Environment Variables](https://roots.io/bedrock/docs/environment-variables/)
* [PHP dotenv](https://github.com/vlucas/phpdotenv)
