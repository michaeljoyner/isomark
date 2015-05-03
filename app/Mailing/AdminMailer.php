<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/26/2015
 * Time: 12:28 PM
 */

namespace App\Mailing;


use Illuminate\Support\Facades\Auth;

class AdminMailer extends Mailer {

    public function notifyOfPasswordChange($user)
    {
        $to = [$user->email => $user->name];
        $view = 'emails.admin.passwordchange';
        $subject = 'Isomark: Change of Password';
        $data = ['name' => $user->name];
        $this->sendTo($to, 'site@isomark.co.za', $subject, $view, $data);
    }

    public function notifyNewUserOfRegistration($newUser)
    {
        $to = [$newUser->email => $newUser->name];
        $from = 'site@isomark.co.za';
        $subject = 'Isomark Registration';
        $creator = Auth::user();
        $data = [
            'creatorName' => $creator->name,
            'creatorEmail' => $creator->email,
            'userName' => $newUser->name,
            'userEmail' => $newUser->email
        ];
        $view = 'emails.admin.newuser';
        $this->sendTo($to, $from, $subject, $view, $data);

    }

    public function sendSiteMessage($sender_name, $sender_email, $enquiry)
    {
        $to = ['joyner.michael@gmail' => 'Michael Joyner'];
        $from = $sender_email;
        $data = compact('enquiry', 'sender_name');
        $view = 'emails.admin.sitemessage';
        $subject = 'Isomark Site message from '.$sender_name;
        $this->sendTo($to, $from, $subject, $view, $data);
    }
}