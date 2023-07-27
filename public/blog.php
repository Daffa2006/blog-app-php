<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css?v=1" />
  </head>
  <body>
    <nav class="navbar" role="navigation">
      <div class="navbar__inner">
        <div><a class="logo" href="#">Test Blog App</a></div>
        <ul class="navbar__list">
          <li><a class="navbar__link" href="#">Home</a></li>
          <li><a class="navbar__link" href="#">Blog</a></li>
          <li><a class="navbar__link" href="#">News</a></li>
          <li><a class="navbar__link" href="#">Contact</a></li>
        </ul>
        <div><a class="btn" href="login.php">Login</a></div>
          <a  class="hamburger" href="#">
            <span class="hamburger__line"></span>
            <span class="hamburger__line"></span>
            <span class="hamburger__line"></span>
          </a>
      </div>
    </nav>
    <main>
      <header class="title">
        <h1 class="title__heading">The Blog</h1>
        <span class="title__subheading">Embrace the world with Blog</span>
      </header>
      <section class="main-blog">
        <figure class="main-blog-card">
          <img class="main-blog-card__image" src="https://images.unsplash.com/photo-1682685794761-c8e7b2347702?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" alt="Example Image" />
          <figcaption class="main-blog-card__caption">
            <span class="main-blog-card__date">Senin, 24 Juli 2023</span>
            <span class="main-blog-card__heading">Tentang Creativity Block Pada UI Designer</span>
            <p class="main-blog-card__desc">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus ab at iusto, est doloremque non eius perspiciatis nihil. Quis, iusto? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, accusamus!
            </p>
          </figcaption>
        </figure>
      </section>
      <section class="card-section">
        <?php for($i = 0; $i < 7; $i++) {?>
          <figure class="card">
            <img class="card__image" src="https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y29mZmVlfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="Example Image" />
            <figcaption class="card__caption">
              <span class="card__category">Artificial Intelligence</span>
              <span class="card__heading">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
              <p class="card__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem consequuntur cum commodi quas neque quae omnis deleniti, doloribus est eligendi!</p>
              <span class="card__date">20 Juni 2023</span>
            </figcaption>
          </figure>
        <?php }; ?>
      </section>
    </main>
    <footer></footer>
  </body>
</html>
