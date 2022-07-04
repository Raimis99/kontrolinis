<html>
<head>
<title>Susisiekite su Mumis</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body style="padding:50px;">
<hr3>Susisiekite su Mumis</hr3>
<div class="container" >
    <form method="POST" action="process.php">
        <div class="form-group">
            <lable for="name">Name</lable>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <lable for="surname">Surname</lable>
            <input type="text" name="surname" id="surname" class="form-control"  required>
        </div>
        <div class="form-group">
            <lable for="phone">Phone</lable>
            <input type="text" name="phone" id="phone" class="form-control"  required>
        </div>
        <div class="form-group">
            <lable for="email">Email</lable>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <lable for="subject">Subject</lable>
            <input type="text" name="subject" id="subject" class="form-control" required>
        </div>
        <div class="form-group">
            <lable for="message">Message</lable>
            <input type="text" name="message" id="message" class="form-control" required>
        </div>
        <div class="form-group">

            <button type="submit"  class="btn btn-success" >Submit</button>
        </div>
    </form>

</div>



</body>
</html>