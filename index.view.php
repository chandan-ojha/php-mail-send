<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Mail Send</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        .contact-form {
            max-width: 500px;
            margin: auto;
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            margin-bottom: 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <form action="/" method="post">
                        <?php echo ( !empty( $errorMessage ) ? $errorMessage : '' ); ?>
                        <?php echo ( !empty( $successMessage ) ? $successMessage : '' ); ?>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject" required />
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>