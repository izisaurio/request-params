<?php

require('../vendor/autoload.php');

use RequestParams\Get,
	RequestParams\Server,
	RequestParams\JsonBody,
	RequestParams\ApacheHeaders,
	RequestParams\Post;
	
var_dump(Get::all());
echo '<br/><br/>';

var_dump(Server::key('REQUEST_METHOD'));
echo '<br/><br/>';

var_dump(JsonBody::key('id'));
echo '<br/><br/>';

var_dump(ApacheHeaders::key('accept-language'));
echo '<br/><br/>';

var_dump(Post::key('id'));