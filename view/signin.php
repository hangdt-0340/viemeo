<?php include 'C:/xampp1/htdocs/Viemeo/stickers/FrontHeader/FrontHeader.phtml';?>
<body style="margin-top: 50px; height: 100% !important;">
    <script defer src="../../../font/js/particles.min.js"></script>
    <form action="submit.php" method="post" name="signinForm">
        <div class="container-fluid">
            <div class="row">
                <span class="text-center title">My Account</span>
            </div>
            </div>
        <div class="container align-center" style="margin-top: 5%; margin-bottom: 5%;">
            <div class="row">
                <span>
                    <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                    </svg>
                </span>
            </div>
        </div>
        <div class="container align-center">
            <div class="row">
                <div class="col-xl-6">
                    <label>Username:</label>
                </div>
                <div class="col-xl-6">
                    <input type="username" name="fname" class="fname border">
                </div>
            </div>
        </div>
        <div class="container align-center" style="margin-bottom: 3%;">
            <div class="row">
                <div class="col-xl-6">
                    <label>Password:</label>
                </div>
                <div class="col-xl-6">
                    <input type="password" name="pass" class="pass border">
                </div>
            </div>
        </div>
        <div class="container align-center" style="margin-bottom: 5%;">
            <div class="row">
            <div class="action-button">
                <button class="start-with-sutdio-btn-log" data-cy="home-start-editing-button">Submit
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" style="vertical-align: middle;">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                    </svg>
                </button>
                <div class="home-signin"><a href="../view/signup.php">You don't have account, SignUp</a></div>
            </div>
            </div>
        </div>
    </form>
</body>
<?php include 'C:/xampp1/htdocs/Viemeo/stickers/FrontFooter/FrontFooter.phtml';?>