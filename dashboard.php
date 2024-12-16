<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link
        rel="icon"
        type="image/x-icon"
        href="img/favicon.png"
        sizes="192x192"
      />
      <link rel="stylesheet" href="styles.css" />
      <link rel="stylesheet" href="dashboard.css" />
      <title>Dashboard</title>
    </head>
    <body>
      <header>
        <nav class="navbar">
          <div class="navbar-logo">Travel</div>
          <ul class="navbar-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <div class="navbar-auth-buttons">
            <a href="/logout" class="auth-btn" id="btn-logout">Logout</a>
          </div>
        </nav>
      </header>
      <main>
        <?php
              session_start();

              if (!isset($_SESSION['user_name']) || !isset($_SESSION['user_email'])) {
              header("Location: login.html");
              exit();
              }

              $name = $_SESSION['user_name'];
              $email = $_SESSION['user_email'];
        ?>

        <aside>
          <div class="profile">
            <div class="img-container">
              <img
                src="https://api.dicebear.com/9.x/thumbs/svg?scale=90&seed=<?php echo htmlspecialchars($name); ?>"
                alt="Profile Picture"
                class="profile-img"
              />
            </div>
            <div class="info-container">
              <span class="name"><?php echo htmlspecialchars($name); ?></span>
              <span class="email"><?php echo htmlspecialchars($email); ?></span>
            </div>
            
          </div>
        </aside>
        <section class="dashboard-overview">
          <h2>Dashboard</h2>
          <div class="card">
            <div class="card-item">
              <h3>Flight 1</h3>
              <p>Details about stat 1</p>
            </div>
            <div class="card-item">
              <h3>Flight 2</h3>
              <p>Details about stat 2</p>
            </div>
            <div class="card-item">
              <h3>Flight 3</h3>
              <p>Details about stat 3</p>
            </div>
            <div class="card-item">
              <h3>Flight 4</h3>
              <p>Details about stat 4</p>
            </div>
            <div class="card-item">
              <h3>Flight 5</h3>
              <p>Details about stat 5</p>
            </div>
            <div class="card-item">
              <h3>Flight 6</h3>
              <p>Details about stat 6</p>
            </div>
          </div>
        </section>
      </main>
    </body>
  </html>
</html>