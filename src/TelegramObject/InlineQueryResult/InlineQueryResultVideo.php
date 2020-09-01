<?php

namespace WeStacks\TeleBot\TelegramObject\InlineQueryResult;

use WeStacks\TeleBot\TelegramObject\InlineQueryResult;
use WeStacks\TeleBot\TelegramObject\Keyboard\InlineKeyboardMarkup;

/**
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 * If an InlineQueryResultVideo message contains an embedded video (e.g., YouTube), you must replace its content using input_message_content.
 * 
 * @property String                    $type                        Type of the result, must be video
 * @property String                    $id                          Unique identifier for this result, 1-64 bytes
 * @property String                    $video_url                   A valid URL for the embedded video player or video file
 * @property String                    $mime_type                   Mime type of the content of video url, “text/html” or “video/mp4”
 * @property String                    $thumb_url                   URL of the thumbnail (jpeg only) for the video
 * @property String                    $title                       Title for the result
 * @property String                    $caption                     _Optional_. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @property String                    $parse_mode                  _Optional_. Mode for parsing entities in the video caption. See formatting options for more details.
 * @property Integer                   $video_width                 _Optional_. Video width
 * @property Integer                   $video_height                _Optional_. Video height
 * @property Integer                   $video_duration              _Optional_. Video duration in seconds
 * @property String                    $description                 _Optional_. Short description of the result
 * @property InlineKeyboardMarkup      $reply_markup                _Optional_. Inline keyboard attached to the message
 * @property InputMessageContent       $input_message_content       _Optional_. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
 * @package WeStacks\TeleBot\TelegramObject\InlineQueryResult
 */
class InlineQueryResultVideo extends InlineQueryResult
{
    protected function relations()
    {
        return [
            'type'                  => 'string',
            'id'                    => 'string',
            'video_url'             => 'string',
            'mime_type'             => 'string',
            'thumb_url'             => 'string',
            'title'                 => 'string',
            'caption'               => 'string',
            'parse_mode'            => 'string',
            'video_width'           => 'integer',
            'video_height'          => 'integer',
            'video_duration'        => 'integer',
            'description'           => 'string',
            'reply_markup'          => InlineKeyboardMarkup::class,
            'input_message_content' => InputMessageContent::class
        ];
    }
}