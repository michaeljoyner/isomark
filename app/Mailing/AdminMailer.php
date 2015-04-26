<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/26/2015
 * Time: 12:28 PM
 */

namespace App\Mailing;


class AdminMailer extends Mailer {

    public function notifyOfPasswordChange($user)
    {
        $to = [$user->email => $user->name];
        $view = 'emails.admin.passwordchange';
        $subject = 'Isomark: Change of Password';
        $data = ['name' => $user->name];
        $this->sendTo($to, 'site@isomark.co.za', $subject, $view, $data);
    }
}