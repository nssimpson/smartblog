<?php

$htupdate = '# Images Blog

RewriteRule ^smartblogredirect/([0-9]+)(\-[\.*_a-zA-Z0-9-]*)(-[0-9]+)?/.+\.jpg$ %{ENV:REWRITEBASE}modules/smartblog/images/$1$2$3.jpg [L]
RewriteRule ^smartblogredirect/([a-zA-Z_-]+)(-[0-9]+)?/.+\.jpg$ %{ENV:REWRITEBASE}modules/smartblog/images/$1$2.jpg [L]';

