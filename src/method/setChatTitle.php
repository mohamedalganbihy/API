<?php namespace api\method;

use api\response\Error;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 *
 * @property int|string chat_id
 * @property string title
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasTitle()
 * @method $this setChatId($integer)
 * @method $this setTitle($string)
 * @method $this remChatId()
 * @method $this remTitle()
 * @method string|int getChatId($default = null)
 * @method string getTitle($default = null)
 */
class setChatTitle extends Method
{

    /**
     * Every method have a response type,
     * and in this method we will return a Response.
     *
     * @return string
     */
    protected function response()
    {
        return true;
    }
}