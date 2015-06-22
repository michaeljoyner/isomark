<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Hi {{ $userName }}</h2>
    <p>You have been registered as a user on isomark.co.za. You may log in with your email address ({{ $userEmail }}) and the password provided to you by the person who created your account. The person who created your account is {{ $creatorName }} ({{ $creatorEmail }}).</p>
    <p>To log in, visit isomark.co.za/admin</p>
    <p><strong>Important:</strong> Once you have signed in, please change your password to one that no one else knows.</p>
    <p>Many thanks, and have a nice day!</p>
</body>
</html>