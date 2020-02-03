#!/bin/bash


brew cask install java
brew install php70-pdo-pgsql

# To finish installing pdo_pgsql for PHP 7.0:
#   * /usr/local/etc/php/7.0/conf.d/ext-pdo_pgsql.ini was created,
#     do not forget to remove it upon extension removal.
#   * Validate installation via one of the following methods:
#   *
#   * Using PHP from a webserver:
#   * - Restart your webserver.
#   * - Write a PHP page that calls "phpinfo();"
#   * - Load it in a browser and look for the info on the pdo_pgsql module.
#   * - If you see it, you have been successful!
#   *
#   * Using PHP from the command line:
#   * - Run `php -i "(command-line 'phpinfo()')"`
#   * - Look for the info on the pdo_pgsql module.
#   * - If you see it, you have been successful!
