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

    private $siteRecipients = ['shimone@isomark.co.za' => 'Shimone Pretorius', 'karen@isomark.co.za' => 'Karen Backeberg'];

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
        $to = $this->siteRecipients;
        $from = $sender_email;
        $data = compact('enquiry', 'sender_name');
        $view = 'emails.admin.sitemessage';
        $subject = 'Isomark Site message from '.$sender_name;
        $this->sendTo($to, $from, $subject, $view, $data);
    }

    public function notifyOfBookingEnquiry($bookingEnquiry)
    {
        $to = $this->siteRecipients;
        $from = $bookingEnquiry->email;
        $data = ['enquiry' => $this->buildBookingEnquiryDataArray($bookingEnquiry)];
        $view = 'emails.admin.bookingenquiry';
        $subject = 'New Isomark Training Site Enquiry';
        $this->sendTo($to, $from, $subject, $view, $data);
    }

    protected function buildBookingEnquiryDataArray($bookingEnquiry)
    {
        $result = [];
        $result['name'] = $bookingEnquiry->name;
        $result['email'] = $bookingEnquiry->email;
        $result['phone'] = $bookingEnquiry->phone;
        $result['company'] = $bookingEnquiry->company;
        $result['course_names'] = $bookingEnquiry->course_names;
        $result['course_usids'] = $bookingEnquiry->course_usids;
        $result['enquiry'] = $bookingEnquiry->enquiry;
        return $result;
    }
}