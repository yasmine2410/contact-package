<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Contact US
    </title>
</head>
<body>
<h1>Contact Us any times </h1>
<form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your Name Please">
    <input type="email" name="email" placeholder="Your Valid Email">
    <textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
    <input type="submit" value="Submit">
</form>
</body>
</html>