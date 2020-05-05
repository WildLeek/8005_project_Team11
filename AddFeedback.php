<html>

<head>
    <!-- Sami , Friday, 10 April 2020 at 13:51:16 -->

    <title>Send Feedback</title>
    <link href="StyleSheets/common.css" rel="stylesheet" type="text/css">
    <link href="StyleSheets/feedback.css" rel="stylesheet" type="text/css">
</head>

<body>
        <!-- TODO: user and rank should be taken from session and sent from here as well -->
        <div class="container">
            <h2>New Feedback</h2>
            <form action="insertFeedback.php" method="post">
                <textarea name="feedback" rows="20" cols="50"> Type your feedback here... </textarea>
                <input class="greenbtn" type="submit">
            </form>

        </div>

</body>

</html>