# [PHPunit](https://github.com/sebastianbergmann/phpunit)
    wget https://phar.phpunit.de/phpunit.phar
    chmod +x phpunit.phar
    mv phpunit.phar /usr/local/bin/phpunit


# PHP-soap library
### On centOS
[Tutorial Source](http://stackoverflow.com/questions/22594582/how-to-enable-soap-on-centos)

1. install soap in Centos

    yum install php-soap

2. see if the soap package exist or not

    yum search php-soap

3. thus you must see some result of soap package you installed, now type a command in your terminal in the root folder for searching the location of soap for specific path

    find -name soap.so

4. You will see the exact path where its installed/located, simply copy the path and find the php.ini to add the extension path,
usually the path of php.ini file in centos 6 is in

    /etc/php.ini


5. add a line of code from below into php.ini file and then save the file and exit.

    extension='/usr/lib/php/modules/soap.so'


6. run apache restart command in Centos. I think there are two commands that can restart your apache (choose the easiest one for you )


    service httpd restart

OR

    apachectl restart

Finally, check phpinfo() output in browser, you should see SOAP section where SOAP CLIENT, SOAP SERVER etc are listed and shown Enabled.
