<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #F8F8F8;
        }

        .wrapper {
            width: 100%;
            height: 100vh;
        }

        .form-wrapper {
            width: 720px;
            border-radius: 15px;
            background: palegreen;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
    </style>
</head>

<body>
    <div class="wrapper d-flex justify-content-center align-items-center">
        <div class="form-wrapper p-3">
            <h2 class="text-center">Contact Us Any Time</h2>
            <div class="mt-3">
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email">
                    </div>

                    <div class="form-group mt-2">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Enter name">
                    </div>

                    <div class="form-group mt-2">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">
                        Send Massage
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
