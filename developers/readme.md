### Development Config

Uncomment
`#LoadModule proxy_http_module modules/mod_proxy_http.so`
to
`LoadModule proxy_http_module modules/mod_proxy_http.so`

Apache - XAMPP `xampp\apache\conf\extra\httpd-vhosts.conf`
```
<VirtualHost *:80>
  ServerName d.msgque.dev

  ProxyRequests Off
  ProxyVia Off

  ProxyPass / http://127.0.0.1:8000/ retry=0
  ProxyPassReverse / http://127.0.0.1:8000/
</VirtualHost>

NameVirtualHost 127.0.0.1:80
<VirtualHost *:80>
  ServerName msgque.msgque.dev
  DocumentRoot "D:\xampp\htdocs\msgque"
  <Directory "D:\xampp\htdocs\msgque">
    Options FollowSymLinks Indexes
    AllowOverride All
    Order deny,allow
    allow from All
	</Directory>
	ErrorLog "logs/msgque.msgque.dev.error.log"
    CustomLog "logs/dmsgque.msgque.dev-access.log" common
</VirtualHost>

```