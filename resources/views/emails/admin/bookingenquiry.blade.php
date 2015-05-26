<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Booking Enquiry from Isomark Site</h3>
    <p>There has been a new booking enquiry from the isomark site, details are as follows:</p>
    <p>Name: {{ $enquiry['name'] }}</p>
    <p>Phone number: {{ $enquiry['phone'] }}</p>
    <p>Email address: {{ $enquiry['email'] }}</p>
    <p>Company: {{ $enquiry['company'] }}</p>
    <p>Course(s): {{ $enquiry['course_names'] }}</p>
    <p>Course USID(s): {{ $enquiry['course_usids'] }}</p>
    <br/>
    <p>{{ $enquiry['enquiry'] }}</p>
</body>
</html>