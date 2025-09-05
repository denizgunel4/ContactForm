<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <label>İsim:</label>
        <input type="text" name="name" required size="50" style="font-size:50px;"><br>

        <label>Email:</label>
        <input type="email" name="email" required size="50" style="font-size:50px;"><br>

        <button type="submit" style="font-size:18px; padding:10px 20px;">Gönder</button>
    </form>
</body>
<html>