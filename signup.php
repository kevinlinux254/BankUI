<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - masyopNET Bank of Kenya</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- NAVIGATION MENU -->
    <nav>
        <div class="logo">
            <a href="index.php">masyopNET Bank of Kenya</a>
        </div>
        <div class="navLink">
            <li>Know Us</li>
            <li>What We Do</li>
            <li>Reach Us</li>
            <li><a href="Login.php">Log In</a></li>
        </div>
    </nav>

    <!-- LOGIN SECTION -->
    <section id="logIn">
        <div class="logInForm">
            <img src="ui.jpg" alt="masyopnet bank of kenya">
            <div class="info">
                <h3>Banking made Easy</h3>
                <hr style="width: 60px; height: 4px; background-color: #333">
                <p>
                    Experience convinience banking at the comfort of your house or office. <br> Simple. Transparent. Fast
                </p>
            </div>
        </div>
        <div class="logInForm">
            <h4>Welcome to masyopNET Bank of Kenya</h4><br>
            <form action="" method="post">
            <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="" id="" placeholder="enter your name">
                </div><br>
                <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="email" name="" id="" placeholder="enter your email">
                </div><br>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="passowrd" placeholder="enter your password">
                </div><br>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="passowrd" placeholder="confirm your password">
                </div><br>
                <div class="form-group">
                    <button type="submit">Log In</button>
                </div>
            </form>
        </div>
    </section>

    <!-- FOOTER INFORMATION -->
    <footer>
        <div class="info">
            <h2>Why masyopNET Bank</h2>
            <p><a href="">Our Story</a></p>
            <p><a href="">Rewards</a></p>
            <p><a href="">Careers</a></p>
        </div>
        <div class="info">
            <h2>Rates</h2>
            <p><a href="">Personal Banking</a></p>
            <p><a href="">Morgage</a></p>
            <p><a href="">Equity</a></p>
        </div>
        <div class="info">
            <h2>Business Banking</h2>
            <p><a href="">Micro Business Accounts</a></p>
            <p><a href="">Small and Medium Enterprises (SMEs)</a></p>
            <p><a href="">Commercial Accounts</a></p>
        </div>
        <div class="info">
            <h2>Help & Support</h2>
            <p><a href="">Contact Us</a></p>
            <p><a href="">Help & Faqs</a></p>
            <p><a href="">Security Center</a></p>
        </div>
    </footer>
    
</body>
</html>