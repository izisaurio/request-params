<?php

require('../vendor/autoload.php');

use RequestParams\Get,
	RequestParams\Server,
	RequestParams\JsonBody,
	RequestParams\ApacheHeaders,
	RequestParams\Post;
	
var_dump(Get::params(), Get::params()->key('id'));
echo '<br/><br/>';

var_dump(Server::params(), Server::params()->key('REQUEST_METHOD'));
echo '<br/><br/>';

var_dump(JsonBody::params(), JsonBody::params()->key('id'));
echo '<br/><br/>';

var_dump(ApacheHeaders::params(), ApacheHeaders::params()->key('accept-language'));
echo '<br/><br/>';

var_dump(Post::params(), Post::params()->key('id'));