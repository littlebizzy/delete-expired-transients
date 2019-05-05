# Delete Expired Transients

Deletes all expired transients upon activation and on a daily basis thereafter via WP-Cron to maintain a cleaner database and improve performance.

* [Plugin Homepage (LittleBizzy.com)](https://www.littlebizzy.com/plugins/delete-expired-transients)
* [Free Facebook Group](https://www.facebook.com/groups/littlebizzy/)

### Defined Constants

    /* Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);
    
    /* Delete Expired Transients Functions */
    define('DELETE_EXPIRED_TRANSIENTS', true); // default = true
    define('DELETE_EXPIRED_TRANSIENTS_HOURS', '6'); // default = 6
    define('DELETE_EXPIRED_TRANSIENTS_MAX_EXECUTION_TIME', '10'); // default = 10
    define('DELETE_EXPIRED_TRANSIENTS_MAX_BATCH_RECORDS', '50'); // default = 50

### Compatibility

This plugin has been designed for use on [SlickStack](https://slickstack.io) web servers with PHP 7.2 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only — for both performance and usability reasons, we strongly recommend avoiding WordPress Multisite for the vast majority of your projects.

Any of our WordPress plugins may also be loaded as "Must-Use" plugins (meaning that they load first, and cannot be deactivated) by using our free [Autoloader](https://github.com/littlebizzy/autoloader) script in the `mu-plugins` directory.

### Support Issues

Please do not submit Pull Requests. Instead, kindly create a new Issue with relevant information if you are an experienced developer, otherwise you may become a [**LittleBizzy.com Member**](https://www.littlebizzy.com/members) if your company requires official support.
