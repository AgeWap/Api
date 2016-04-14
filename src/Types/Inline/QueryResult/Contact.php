<?php
/**
 * Created by PhpStorm.
 * User: iGusev
 * Date: 14/04/16
 * Time: 03:58
 */

namespace TelegramBot\Api\Types\Inline\QueryResult;


class Contact extends AbstractInlineQueryResult
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['type', 'id', 'phone_number', 'first_name', 'photo_url', 'thumb_url'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'type' => true,
        'id' => true,
        'phone_number' => true,
        'first_name' => true,
        'last_name' => true,
        //@TODO: InlineKeyboardMarkup
        'reply_markup' => InlineKey,
        //@TODO: InlineKeyboardMarkup
        'input_message_content' => InputMessageContent,
        'thumb_url' => true,
        'thumb_width' => true,
        'thumb_height' => true,
    ];

    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected $type = 'photo';
    
}