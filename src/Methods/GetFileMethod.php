<?php

namespace WeStacks\TeleBot\Methods;

use WeStacks\TeleBot\Foundation\TelegramMethod;

/**
 * Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
 *
 * Note: This function may not preserve the original file name and MIME type. You should save the file's MIME type and name (if available) when the File object is received.
 *
 * @property-read string $file_id File identifier to get information about
 *
 * @see https://core.telegram.org/bots/api#getfile
 */
class GetFileMethod extends TelegramMethod
{
    protected string $method = 'getFile';
    protected array $expect = ['File'];

    public function __construct(
        public readonly string $file_id,
    ) {
    }
}
