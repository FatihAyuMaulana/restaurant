<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body>
    <h2>You have received a new message from your website contact form</h2>
    
    <p><strong>Username:</strong> {{ $username }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $message }}</p>
</body>
</html>
