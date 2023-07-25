<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar" role="navigation">
      <div class="navbar__inner">
        <div><a class="logo" href="#">My Blog App</a></div>
        <ul class="navbar__list">
          <li><a class="navbar__link" href="#">Home</a></li>
          <li><a class="navbar__link" href="#">Blog</a></li>
          <li><a class="navbar__link" href="#">News</a></li>
          <li><a class="navbar__link" href="#">Contact</a></li>
        </ul>
        <div><a href="login.php"></a></div>
      </div>
    </nav>
    <main>
      <div class="form">
        <span class="form__title">Login</span>
        <span class="form__title">Sign Up</span>
        <form action=""class="form__inner">
            <input class="form__input" type="email" required name="username" id="username" placeholder="Username">
            <input class="form__input" type="password" required name="password" id="password" placeholder="Password">
            <button class="btn">Login</button>
        </form>
        <template>
        <form action=""class="form__inner">
            <input class="form__input" type="email" required name="username" id="username" placeholder="Username">
            <input class="form__input" type="password" required name="password" id="password" placeholder="Password">
            <button class="btn">Login</button>
        </form>
        </template>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
