<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Form</title>
  <link rel="stylesheet" href="./Signup.css">
</head>
<body>
<div class="container">
  <div class="forms-container">
    <!-- User Signup Form -->
    <div class="form-control signup-form">
      <form method="post" action="Form.php">
        <h2>User Signup</h2>
        <input type="text" name="ministries" placeholder="Ministries" required />
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="password" name="re_password" placeholder="Re-Enter Password" required />
        <input type="submit" class="button" value="Sign Up" name="signup">
      </form>
    </div>

    <!-- Admin Signup Form -->
    <div class="form-control signin-form">
      <form method="post" action="Form.php">
        <h2>Admin Signup</h2>
        <input type="text" name="admin_username" placeholder="Username" required />
        <input type="password" name="admin_password" placeholder="Password" required />
        <input type="submit" class="button" value="Signup" name="admin_signup">
      </form>
    </div>
  </div>

  <!-- Intro Sections -->
  <div class="intros-container">
    <!-- Sign-in Intro -->
    <div class="intro-control signin-intro">
      <div class="intro-control__inner">
        <h2>Welcome back!</h2>
        <p>
          Welcome back! We are so happy to have you here. It's great to see you again. We hope you had a safe and enjoyable time away.
        </p>
        <button id="signup-btn">No account yet? Register.</button>
      </div>
    </div>
    <!-- Sign-up Intro -->
    <div class="intro-control signup-intro">
      <div class="intro-control__inner">
        <h2>Come join us!</h2>
        <p>
          We are so excited to have you here. If you haven't already, create an account to get access to exclusive offers, rewards, and discounts.
        </p>
        <button id="signin-btn">Already have an account? Login.</button>
      </div>
    </div>
  </div>
</div>

<script src="./script.js"></script>
</body>
</html>