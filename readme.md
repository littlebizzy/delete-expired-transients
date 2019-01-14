# Delete Expired Transients

Deletes all expired transients upon activation and on a daily basis thereafter via WP-Cron to maintain a cleaner database and improve performance.

* [Plugin Homepage (LittleBizzy.com)](https://www.littlebizzy.com/plugins/delete-expired-transients)
* [Free Facebook Group](https://www.facebook.com/groups/littlebizzy/)

### Defined Constants

    /* Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);
    
    /* Delete Expired Transients Functions */
    define('DELETE_EXPIRED_TRANSIENTS', true);
    define('DELETE_EXPIRED_TRANSIENTS_HOURS', '6');
    define('DELETE_EXPIRED_TRANSIENTS_MAX_EXECUTION_TIME', '10');
    define('DELETE_EXPIRED_TRANSIENTS_MAX_BATCH_RECORDS', '50');

### Support Issues

*Please do not submit Pull Requests. Instead, kindly create a new Issue with relevant information if you are an experienced developer, otherwise post your comments in our free Facebook group.*

***No emails, please! Thank you.***
