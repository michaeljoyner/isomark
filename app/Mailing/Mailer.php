<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/26/2015
 * Time: 12:17 PM
 */

namespace App\Mailing;


use Illuminate\Contracts\Mail\Mailer as LaravelMailer;

abstract class Mailer {

    /**
     * @var LaravelMailer
     */
    private $laravelMailer;

    public function __construct(LaravelMailer $laravelMailer)
    {
        $this->laravelMailer = $laravelMailer;
    }

    protected function sendTo($to, $from, $subject, $view, $data, $attachments = [])
    {
        $this->laravelMailer->queue($view, $data, function($message) use ($to, $from, $subject, $attachments)
        {
            $message->to($to)->subject($subject);
            foreach($attachments as $filename)
            {
                $message->attach($filename);
            }
            if($from !== '')
            {
                $message->from($from);
            }
        });
    }

}