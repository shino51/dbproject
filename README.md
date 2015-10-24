# dbproject
##address
http://localhost/dbproject/index.php

## Apache

Config file: c:/wamp/bin/apache/apache2.4.9/conf/httpd.conf

### Add Directory

<pre>
&lt;Directory "c:/your/path/dbproject/www/"&gt;
    Options Indexes FollowSymLinks MultiViews
    Require all granted
&lt;/Directory&gt;
</pre>

### Add Alias

<pre>
&lt;IfModule&gt;
...
Alias /dbproject "c:/your/path/dbproject/www/"
...
&lt;/IfModule&gt;
</pre>

## MySQL
Delete anonymous user before adding new user.

MySQL Workbench -> Server -> Users and Privileges -> Delete all entries for user anonymous