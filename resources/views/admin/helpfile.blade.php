@extends('app')

@section('content')
    <div class="container helpfile">
    <h1 id="isomark-admin-help-and-docs">Isomark Admin Help and Docs</h1>
    <p>This document is to serve as a help page or documentation for the use of your admin section for the site. If there are any problems that this document does not address satisfactorily, please feel free to contact the site creators.</p>
    <h2 id="contents">Contents</h2>
    <ol>
        <li><a href="#users">Users</a>
            <ul>
                <li><a href="#registering-a-new-user">Registering a New User</a></li>
                <li><a href="#editing-and-deleting-users">Editing and deleting Users</a></li>
                <li><a href="#passwords">Passwords</a></li>
                <li><a href="#forgotten-passwords">Forgotten Passwords</a></li>
            </ul>
        </li>
        <li><a href="#courses">Courses</a>
            <ul>
                <li><a href="#creating-courses">Creating Courses</a></li>
                <li><a href="#editing-and-deleting-courses">Editing and deleting Courses</a></li>
                <li><a href="#viewing-courses">Viewing Courses</a></li>
            </ul>
        </li>
        <li><a href="#workshops">Workshops</a>
            <ul>
                <li><a href="#creating-workshops">Creating Workshops</a></li>
                <li><a href="#editing-viewing-and-deleting-workshops">Editing, viewing and deleting Workshops</a></li>
            </ul>
        </li>
        <li><a href="#booking-enquiries">Booking Enquiries</a>
            <ul>
                <li><a href="#viewing-booking-enquiries">Viewing Booking Enquiries</a></li>
                <li><a href="#marking-enquiries-as-read-and-archiving-enquiries">Marking as read and archiving Booking Enquiries</a></li>
            </ul>
        </li>
        <li><a href="#contact-info">Contact Info</a>
            <ul>
                <li><a href="#addresses">Addresses</a></li>
                <li><a href="#contact-people">Contact People</a></li>
                <li><a href="#contact-numbers">Contact Numbers</a></li>
            </ul>
        </li>
    </ol>
    <h1 id="users">Users</h1>
    <h3 id="registering-a-new-user">Registering a New User</h3>
    <p>Registering a new user is done by clicking on &quot;Manage Users&quot; and then simply filling out the form with the necessary details. Note that a new user may be granted either of two levels of privileges, full or limited. The only difference between the two is that a user with full privileges may create, delete or edit other users, including changing their privileges. Passwords must be at least 8 characters long, and it is left to the user to make them as safe as possible.</p>
    <p>Once the form has been successfully completed the new user should be visible under Registered Users on the same page.</p>
    <p>The new user should will be sent an email by the site, with instructions for logging in, and whom to contact for their password.</p>
    <h3 id="editing-and-deleting-users">Editing and Deleting Users</h3>
    <p>A user with full privileges may edit and delete other users, including themselves. However, they can not change other users&#39; passwords. To edit or delete a user, navigate to &quot;Manage Users&quot;, find the user in the list of registered users and then click on the appropriate button. Note that deleting a user is permanent.</p>
    <p class="note">Note: A user may not delete themselves and there must always be at least one user with full privileges (to avoid being locked out of the system). The system will enforce this, this is just for your information.</p>
    <h3 id="passwords">Passwords</h3>
    <p>When creating a new user, the current user has to choose a password for them to begin with. They will then be responsible for communicating that password to the new user.</p>
    <p>All users may reset their password by clicking on the drop down menu on the top right (by the users email address) and selecting &quot;Reset Password&quot;. The user will be taken to the form to change their password.</p>
    <p>It is highly recommended that a new user changes their password immediately, so that they are the only one who knows the password.</p>
    <h3 id="forgotten-passwords">Forgotten Passwords</h3>
    <p>If a user should forget their password and is unable to login, they may click on the "forgot your password?" link on the login page. They will be redirected to a form to send themselves an email with instructions on resetting their password.</p>
    <h1 id="courses">Courses</h1>
    <h3 id="creating-courses">Creating Courses</h3>
    <p>New courses may be added by clicking on the &quot;Courses&quot; dropdown menu, and selecting &quot;Create New Course&quot;. You will be taken to a form to enter all the necessary information about the course. It is advised that you take note of how the information is displayed on the site, to get a feel for things.</p>
    <p>It is important to ensure that you select a category for the course from the dropdown field!</p>
    <p>For the course description, you will have some text editing features to allow you to enter lists, etc and to format your text. It is advised you consider how your formatting will affect how the course info is shown on the site itself. Any styling (such as colours and fonts) that you may see when copying and pasting text in will be removed before it is displayed on the site.</p>
    <p>Once you have completed all the fields and submitted the form, the course will be visible on the main site. You may view the main site from the admin section by clicking on &quot;Isomark&quot; in the upper left corner. </p>
    <h3 id="editing-and-deleting-courses">Editing and deleting courses</h3>
    <p>To edit a course, first find the course either by selecting &quot;Search/View All&quot; from the Courses dropdown menu, or by selecting the category the course is under in the same dropdown menu. Once you have found the course you may click on the &quot;Edit&quot; button to edit the course. Once you are happy with your edits, simply submit the form by clicking &quot;Save Changes&quot; and your edits will be immediately visible on the main site (obviously you will need to refresh the page if necessary)</p>
    <p>To delete a course, find it in the manner described above and click &quot;Delete&quot;. You will be asked to confirm your action, as once the course has been deleted it cannot be recovered.</p>
    <h3 id="viewing-courses">Viewing Courses</h3>
    <p>Currently the only way to properly view the course is to view it on the main site itself.</p>
    <h1 id="workshops">Workshops</h1>
    <p class="note">Note: Workshops are treated as a one of the course categories in the site, but in the admin section they are separate entities.</p>
    <h3 id="creating-workshops">Creating Workshops</h3>
    <p>To create a new workshop, select &quot;Create New Workshop&quot; from the Workshops dropdown menu. Simply enter the relevant information and submit the form, and the workshop will be viewable on the main site. </p>
    <h3 id="editing-viewing-and-deleting-workshops">Editing, Viewing and Deleting Workshops</h3>
    <p>All workshops can be viewed in a list/table format by selecting &quot;View All&quot; from the Workshops dropdown menu. To edit or delete a workshop, click on the relevant button alongside the workshop. As usual, any edits you make will automatically be visible on the main site, and deletions are permanent.</p>
    <h1 id="booking-enquiries">Booking Enquiries</h1>
    <p>When a visitor to the site completes a booking enquiry, their information will be sent to the admin section of the site. This information will include their name, email address, phone number, company (if submitted) and a message if they decide to include one. The course name and USID will also be included. It is possible for people to make an enquiry about more than one course at a time.</p>
    <h3 id="viewing-booking-enquiries">Viewing Booking Enquiries</h3>
    <p>You may view any booking enquiries by clicking on &quot;Booking Enquiries&quot; in the main menu. This will take you to a page which lists all the booking enquiries, with the most recent first. Initially you will see only the name of the prospective client and how long ago they made the enquiry. Hover your mouse over the name and the rest of the information will be exposed.</p>
    <h3 id="marking-enquiries-as-read-and-archiving-enquiries">Marking enquiries as &quot;read&quot; and archiving enquiries</h3>
    <p>If you wish to mark an enquiry as read (perhaps so that others know it has been seen, or just to remind yourself), click on the button &quot;Mark as Read&quot;. The colour of the enquiry card should change to grey, but the enquiry will remain in the main list of enquiries.</p>
    <p>Once the enquiry has been dealt with, you may archive it. Clicking on the &quot;Archive&quot; button will remove the enquiry from the list and move it to the archives. If you ever need to view the archived enquiries, click the &quot;View Archives&quot; button near the top right side of the page. </p>
    <h1 id="contact-info">Contact Info</h1>
    <p>The contact information you wish to have on your site's Contact Us is managed here. Click on the &quot;Contact Info&quot; option in the main menu to get started.</p>
    <h3 id="addresses">Addresses</h3>
    <p>Addresses are made up of a name and four lines of text. You do not need to use all four lines, but consistency does look better on the main site. To add a new address, click on &quot;Add Address&quot;, and to edit or delete an address already on the system, click the respective buttons under the relevant address. Any changes you make will be immediately visible on the main site.</p>
    <h3 id="contact-people">Contact People</h3>
    <p>This section is to add people whom the public may wish to contact. You will need to supply  the name, their title or role at ISOMARK, a phone number and an email address. Adding, editing and deleting works the same way as addresses.</p>
    <h3 id="contact-numbers">Contact Numbers</h3>
    <p>This section is for more general numbers people may use to contact ISOMARK, not associated with a specific person (such as office phone numbers and fax numbers). You will need to give a descriptive name of the contact (such as Office Pietermaritzburg) and the contact number itself. Adding, editing and deleting works as above.</p>
    <p class="note">Note: Contact numbers are shown on the main site both on the &quot;Contact Us&quot; page, as well as on the footer of each page.</p>
    </div>
@endsection