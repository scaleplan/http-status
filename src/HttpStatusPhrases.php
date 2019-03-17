<?php

namespace Scaleplan\HttpStatus;

/**
 * Class HttpStatusPhrases
 *
 * @package Scaleplan\HttpStatus
 */
final class HttpStatusPhrases
{
    /**
     * Allowed range for a valid HTTP status code.
     */
    public const MINIMUM = 100;
    public const MAXIMUM = 599;

    /**
     * The first digit of the Status-Code defines the class of response.
     */
    public const CLASS_INFORMATIONAL = 1;
    public const CLASS_SUCCESS       = 2;
    public const CLASS_REDIRECTION   = 3;
    public const CLASS_CLIENT_ERROR  = 4;
    public const CLASS_SERVER_ERROR  = 5;

    public const HTTP_STATUSES = [
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        208 => 'Already Reported',
        226 => 'IM Used',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Payload Too Large',
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        421 => 'Misdirected Request',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        425 => 'Reserved for WebDAV advanced collections expired proposal',
        426 => 'Upgrade Required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        451 => 'Unavailable For Legal Reasons',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
        510 => 'Not Extended',
        511 => 'Network Authentication Required',
    ];

    /**
     * Get the text for a given status code.
     *
     * @param string $statusCode http status code
     *
     * @throws \OutOfBoundsException     If the requested $statusCode is not found
     *
     * @return string Returns text for the given status code
     */
    public static function getReasonPhrase($statusCode) : string
    {
        if (!isset(static::HTTP_STATUSES[$statusCode])) {
            throw new \OutOfBoundsException(sprintf('Unknown http status code: `%s`', $statusCode));
        }

        return static::HTTP_STATUSES[$statusCode];
    }
}
