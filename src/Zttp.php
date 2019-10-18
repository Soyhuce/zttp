<?php

namespace Soyhuce\Zttp;

/**
 * @method static PendingZttpRequest withoutRedirecting()
 * @method static PendingZttpRequest withoutVerifying()
 * @method static PendingZttpRequest asJson()
 * @method static PendingZttpRequest asFormParams()
 * @method static PendingZttpRequest asMultipart()
 * @method static PendingZttpRequest bodyFormat(string $format)
 * @method static PendingZttpRequest contentType(string $contentType)
 * @method static PendingZttpRequest accept(string $accept)
 * @method static PendingZttpRequest withHeaders(array $headers)
 * @method static PendingZttpRequest withBasicAuth(string $username, string $password)
 * @method static PendingZttpRequest withDigestAuth(string $username, string $password)
 * @method static PendingZttpRequest timeout(int $seconds)
 * @method static PendingZttpRequest beforeSending(callable $callback)
 * @method static ZttpResponse get(string $url, array $params = [])
 * @method static ZttpResponse post(string $url, array $params = [])
 * @method static ZttpResponse patch(string $url, array $params = [])
 * @method static ZttpResponse put(string $url, array $params = [])
 * @method static ZttpResponse delete(string $url, array $params = [])
 * @method static ZttpResponse send(string $method, string $url, array $options)
 */
class Zttp
{
    public static function __callStatic($method, $args)
    {
        return PendingZttpRequest::new()->{$method}(...$args);
    }
}
