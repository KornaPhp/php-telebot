<?php

namespace WeStacks\TeleBot\Objects;

use WeStacks\TeleBot\Foundation\TelegramObject;

/**
 * This object represents one button of the reply keyboard. At most one of the optional fields must be used to specify type of the button. For simple text buttons, String can be used instead of this object to specify the button text.
 * Note: request_users and request_chat options will only work in Telegram versions released after 3 February, 2023. Older clients will display unsupported message.
 * @property-read string $text Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
 * @property-read ?KeyboardButtonRequestUsers $request_users Optional. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
 * @property-read ?KeyboardButtonRequestChat $request_chat Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
 * @property-read ?bool $request_contact Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
 * @property-read ?bool $request_location Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
 * @property-read ?KeyboardButtonPollType $request_poll Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
 * @property-read ?WebAppInfo $web_app Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
 *
 * @see https://core.telegram.org/bots/api#keyboardbutton
 */
class KeyboardButton extends TelegramObject
{
    public function __construct(
        public readonly string $text,
        public readonly ?KeyboardButtonRequestUsers $request_users,
        public readonly ?KeyboardButtonRequestChat $request_chat,
        public readonly ?bool $request_contact,
        public readonly ?bool $request_location,
        public readonly ?KeyboardButtonPollType $request_poll,
        public readonly ?WebAppInfo $web_app,
    ) {
    }
}
