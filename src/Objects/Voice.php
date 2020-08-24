<?php

namespace WeStacks\TeleBot\Objects;

/**
 * This object represents a voice note.
 * 
 * @property String            $file_id                 Identifier for this file, which can be used to download or reuse the file
 * @property String            $file_unique_id          Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property Integer           $duration                Duration of the audio in seconds as defined by sender
 * @property String            $mime_type               _Optional_. MIME type of the file as defined by sender
 * @property Integer           $file_size               _Optional_. File size
 * 
 * @package WeStacks\TeleBot\Objects
 */
class Voice extends TelegramObject
{
    protected function relations()
    {
        return [
            'file_id'           => 'string',
            'file_unique_id'    => 'string',
            'duration'          => 'integer',
            'mime_type'         => 'string',
            'file_size'         => 'integer'
        ];
    }
}