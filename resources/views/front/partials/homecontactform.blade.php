<h1><span class="section-title">{{ $formTitle }}</span></h1>
<div id="contact-form-box" class="container home-contact-form isomark-form">
    <p class="contactus-blurb">Feel free to get in touch with any inquiries and one of our friendly members of staff will get back to you as soon as possible.</p>
    <div class="covering">
        <p id="thanks" class="thanks">Thanks!</p>
        <span class="thanks reset-prompt">Send another message</span>
    </div>
    <div class="row" id="error-box">

    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label" for="name">Your name</label>
            <input class="form-control" type="text" name="name" id="cp_name"/>
        </div>
        <div class="col-md-offset-2 col-md-5">
            <label class="control-label" for="name">Your email address</label>
            <input class="form-control" type="email" name="email" id="cp_email"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label class="control-label" for="name">Your message:</label>
            <textarea class="form-control" name="enquiry" id="cp_enquiry"/></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <button class="prompt-button btn form-control" id="cp_send">
                <span id="send-icon" class="glyphicon glyphicon-send"></span>
                 <span id="send-text">Send</span>
            </button>
        </div>
    </div>
</div>