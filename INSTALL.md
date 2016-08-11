# PHPunit [(Source)][2]
``` wget https://phar.phpunit.de/phpunit.phar
``` chmod +x phpunit.phar
``` mv phpunit.phar /usr/local/bin/phpunit


# PHP soap
## On centOS [(Source)][1]
(source: )
First, install soap into Centos
``` yum install php-soap

Second, see if the soap package exist or not
``` yum search php-soap

third, thus you must see some result of soap package you installed, now type a command in your terminal in the root folder for searching the location of soap for specific path
``` find -name soap.so

fourth, you will see the exact path where its installed/located, simply copy the path and find the php.ini to add the extension path,
usually the path of php.ini file in centos 6 is in
``` /etc/php.ini


fifth, add a line of code from below into php.ini file

``` extension='/usr/lib/php/modules/soap.so'

and then save the file and exit.

sixth run apache restart command in Centos. I think there is two command that can restart your apache ( whichever is easier for you )

``` service httpd restart

OR

``` apachectl restart

Lastly, check phpinfo() output in browser, you should see SOAP section where SOAP CLIENT, SOAP SERVER etc are listed and shown Enabled.

[1]: http://stackoverflow.com/questions/22594582/how-to-enable-soap-on-centos
[2]: https://github.com/sebastianbergmann/phpunit
