# Car Insurance
##address
http://localhost/carinsurance/index.php

## Apache

Config file: c:/wamp/bin/apache/apache2.4.9/httpd.conf

### Add Directory

<pre>
&lt;Directory "c:/your/path/carinsurance/www/"&gt;
    Options Indexes FollowSymLinks MultiViews
    Require all granted
&lt;/Directory&gt;
</pre>

### Add Alias

<pre>
&lt;IfModule&gt;
...
Alias /carinsurance "c:/your/path/carinsurance/www/"
...
&lt;/IfModule&gt;
</pre>

## MySQL
Delete anonymous user before adding new user.

MySQL Workbench -> Server -> Users and Privileges -> Delete all entries for user anonymous