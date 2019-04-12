<?php

namespace Scaleplan\HttpStatus;

/**
 * Class HttpStatusCodes
 *
 * @package Scaleplan\HttpStatus
 */
final class HttpStatusCodes
{
    /**
     * Every standard HTTP status code as a constant.
     */
    public const HTTP_CONTINUE                                                  = 100;
    public const HTTP_SWITCHING_PROTOCOLS                                       = 101;
    public const HTTP_PROCESSING                                                = 102; // RFC2518
    public const HTTP_OK                                                        = 200;
    public const HTTP_CREATED                                                   = 201;
    public const HTTP_ACCEPTED                                                  = 202;
    public const HTTP_NON_AUTHORITATIVE_INFORMATION                             = 203;
    public const HTTP_NO_CONTENT                                                = 204;
    public const HTTP_RESET_CONTENT                                             = 205;
    public const HTTP_PARTIAL_CONTENT                                           = 206;
    public const HTTP_MULTI_STATUS                                              = 207; // RFC4918
    public const HTTP_ALREADY_REPORTED                                          = 208; // RFC5842
    public const HTTP_IM_USED                                                   = 226; // RFC3229
    public const HTTP_MULTIPLE_CHOICES                                          = 300;
    public const HTTP_MOVED_PERMANENTLY                                         = 301;
    public const HTTP_FOUND                                                     = 302;
    public const HTTP_SEE_OTHER                                                 = 303;
    public const HTTP_NOT_MODIFIED                                              = 304;
    public const HTTP_USE_PROXY                                                 = 305;
    public const HTTP_RESERVED                                                  = 306;
    public const HTTP_TEMPORARY_REDIRECT                                        = 307;
    public const HTTP_PERMANENT_REDIRECT                                        = 308;  // RFC7238
    public const HTTP_BAD_REQUEST                                               = 400;
    public const HTTP_UNAUTHORIZED                                              = 401;
    public const HTTP_PAYMENT_REQUIRED                                          = 402;
    public const HTTP_FORBIDDEN                                                 = 403;
    public const HTTP_NOT_FOUND                                                 = 404;
    public const HTTP_METHOD_NOT_ALLOWED                                        = 405;
    public const HTTP_NOT_ACCEPTABLE                                            = 406;
    public const HTTP_PROXY_AUTHENTICATION_REQUIRED                             = 407;
    public const HTTP_REQUEST_TIMEOUT                                           = 408;
    public const HTTP_CONFLICT                                                  = 409;
    public const HTTP_GONE                                                      = 410;
    public const HTTP_LENGTH_REQUIRED                                           = 411;
    public const HTTP_PRECONDITION_FAILED                                       = 412;
    public const HTTP_PAYLOAD_TOO_LARGE                                         = 413;
    public const HTTP_URI_TOO_LONG                                              = 414;
    public const HTTP_UNSUPPORTED_MEDIA_TYPE                                    = 415;
    public const HTTP_RANGE_NOT_SATISFIABLE                                     = 416;
    public const HTTP_EXPECTATION_FAILED                                        = 417;
    public const HTTP_IM_A_TEAPOT                                               = 418;  // RFC2324
    public const HTTP_MISDIRECTED_REQUEST                                       = 421;
    public const HTTP_UNPROCESSABLE_ENTITY                                      = 422;  // RFC4918
    public const HTTP_LOCKED                                                    = 423;  // RFC4918
    public const HTTP_FAILED_DEPENDENCY                                         = 424;  // RFC4918
    public const HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425;  // RFC2817
    public const HTTP_UPGRADE_REQUIRED                                          = 426;  // RFC2817
    public const HTTP_PRECONDITION_REQUIRED                                     = 428;  // RFC6585
    public const HTTP_TOO_MANY_REQUESTS                                         = 429;  // RFC6585
    public const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE                           = 431;  // RFC6585
    public const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS                             = 451;
    public const CLIENT_CLOSED_REQUEST                                          = 499; // клиент закрыл соединение
    public const HTTP_INTERNAL_SERVER_ERROR                                     = 500;
    public const HTTP_NOT_IMPLEMENTED                                           = 501;
    public const HTTP_BAD_GATEWAY                                               = 502;
    public const HTTP_SERVICE_UNAVAILABLE                                       = 503;
    public const HTTP_GATEWAY_TIMEOUT                                           = 504;
    public const HTTP_VERSION_NOT_SUPPORTED                                     = 505;
    public const HTTP_VARIANT_ALSO_NEGOTIATES                                   = 506; // RFC2295
    public const HTTP_INSUFFICIENT_STORAGE                                      = 507; // RFC4918
    public const HTTP_LOOP_DETECTED                                             = 508; // RFC5842
    public const HTTP_NOT_EXTENDED                                              = 510; // RFC2774
    public const HTTP_NETWORK_AUTHENTICATION_REQUIRED                           = 511; // RFC6585
    public const UNKNOWN_ERROR                                                  = 520; // неизвестная ошибка
    public const WEB_SERVER_IS_DOWN                                             = 521; // веб-сервер не работает
    public const CONNECTION_TIMED_OUT                                           = 522; // соединение не отвечает
    public const ORIGIN_IS_UNREACHABLE                                          = 523; // источник недоступен
    public const TIMEOUT_OCCURRED                                               = 524; // время ожидания истекло
    public const SSL_HANDSHAKE_FAILED                                           = 525; // квитирование SSL не удалось
    public const INVALID_SSL_CERTIFICATE                                        = 526; //недействительный сертификат SSL

    public const ERROR_CODES = [
        self::HTTP_BAD_REQUEST,
        self::HTTP_UNAUTHORIZED,
        self::HTTP_PAYMENT_REQUIRED,
        self::HTTP_FORBIDDEN,
        self::HTTP_NOT_FOUND,
        self::HTTP_METHOD_NOT_ALLOWED,
        self::HTTP_NOT_ACCEPTABLE,
        self::HTTP_PROXY_AUTHENTICATION_REQUIRED,
        self::HTTP_REQUEST_TIMEOUT,
        self::HTTP_CONFLICT,
        self::HTTP_GONE,
        self::HTTP_LENGTH_REQUIRED,
        self::HTTP_PRECONDITION_FAILED,
        self::HTTP_PAYLOAD_TOO_LARGE,
        self::HTTP_URI_TOO_LONG,
        self::HTTP_UNSUPPORTED_MEDIA_TYPE,
        self::HTTP_RANGE_NOT_SATISFIABLE,
        self::HTTP_EXPECTATION_FAILED,
        self::HTTP_IM_A_TEAPOT,           // RFC2324
        self::HTTP_MISDIRECTED_REQUEST,
        self::HTTP_UNPROCESSABLE_ENTITY,                                        // RFC4918
        self::HTTP_LOCKED,                                                      // RFC4918
        self::HTTP_FAILED_DEPENDENCY,                                           // RFC4918
        self::HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL,   // RFC2817
        self::HTTP_UPGRADE_REQUIRED,                                            // RFC2817
        self::HTTP_PRECONDITION_REQUIRED,                                       // RFC6585
        self::HTTP_TOO_MANY_REQUESTS,                                           // RFC6585
        self::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE,                             // RFC6585
        self::HTTP_UNAVAILABLE_FOR_LEGAL_REASONS,
        self::CLIENT_CLOSED_REQUEST, // клиент закрыл соединение
        self::HTTP_INTERNAL_SERVER_ERROR,
        self::HTTP_NOT_IMPLEMENTED,
        self::HTTP_BAD_GATEWAY,
        self::HTTP_SERVICE_UNAVAILABLE,
        self::HTTP_GATEWAY_TIMEOUT,
        self::HTTP_VERSION_NOT_SUPPORTED,
        self::HTTP_VARIANT_ALSO_NEGOTIATES,                                     // RFC2295
        self::HTTP_INSUFFICIENT_STORAGE,                                        // RFC4918
        self::HTTP_LOOP_DETECTED,                                               // RFC5842
        self::HTTP_NOT_EXTENDED,                                                // RFC2774
        self::HTTP_NETWORK_AUTHENTICATION_REQUIRED,
        self::UNKNOWN_ERROR,                                                    // неизвестная ошибка
        self::WEB_SERVER_IS_DOWN,                                               // веб-сервер не работает
        self::CONNECTION_TIMED_OUT,                                             // соединение не отвечает
        self::ORIGIN_IS_UNREACHABLE,                                            // источник недоступен
        self::TIMEOUT_OCCURRED,                                                 // время ожидания истекло
        self::SSL_HANDSHAKE_FAILED,                                             // квитирование SSL не удалось
        self::INVALID_SSL_CERTIFICATE,                                          //недействительный сертификат SSL
    ];
}
