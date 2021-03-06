<?php

define('HTTP_SUCCESS', 200);
define('HTTP_CREATED', 201);
define('HTTP_ACCEPTED', 202);
define('HTTP_NO_CONTENT', 204);
define('HTTP_RESET_CONTENT', 205);
define('HTTP_PARTIAL_CONTENT', 206);
define('HTTP_ALREADY_REPORTED', 208);

define('HTTP_MOVED_PERMANENTLY', 301);
define('HTTP_NOT_MODIFIED', 304);
define('HTTP_TEMP_REDIRECT', 307);
define('HTTP_PERMANENT_REDIRECT', 308);

define('HTTP_BAD_REQUEST', 400);
define('HTTP_UNAUTHORIZED', 401);
define('HTTP_PAYMENT_REQUIRED', 402);
define('HTTP_FORBIDDEN', 403);
define('HTTP_NOT_FOUND', 404);
define('HTTP_METHOD_NOT_ALLOWED', 405);
define('HTTP_NOT_ACCEPTABLE', 406);
define('HTTP_TIMEOUT', 408);
define('HTTP_CONFLICT', 409);
define('HTTP_GONE', 410);
define('HTTP_PRECONDITION_FAILED', 412);
define('HTTP_PAYLOAD_TOO_LARGE', 413);
define('HTTP_UNSUPPORTED_MEDIA', 415);
define('HTTP_TOO_LARGE', 413);
define('HTTP_EXPECTATION_FAIL', 417);
define('HTTP_TEAPOT', 418);
define('HTTP_UNPROCESSABLE_ENTITY', 422);
define('HTTP_LOCKED', 423);
define('HTTP_FAILED_DEPENDENCY', 424);
define('HTTP_UPGRADE_REQUIRED', 236);
define('HTTP_PRECONDITION_REQUIRED', 428);
define('HTTP_TOO_MANY_REQUESTS', 429);
define('HTTP_GAG_ORDER', 451);

define('HTTP_SERVER_ERROR', 500);
define('HTTP_NOT_IMPLEMENTED', 501);
define('HTTP_UNAVAILABLE', 503);
define('HTTP_SUSPENDED', 530);
