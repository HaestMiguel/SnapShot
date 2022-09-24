<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Data -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Author description and keywords -->
  <meta name="author" content="Miguel Haest">
  <meta name="description" content="Photography website">
  <meta name="keywords" content="Photography, pictures">
  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Stylesheets  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <link href="Resources/css/style.css" rel="stylesheet">
  <title>SnapShot | Index</title>
</head>

<body>
  
  <!-- Title  -->
  <h1>Contact</h1>
  <!-- Contact form -->
  <!--Section: Contact v.2-->
  <section class="mb-4">
    <div class="row">

      <!--Grid column-->
      <!--Grid column-->
      <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
          <li>
            <img class="img-contact" src="Resources/Contact/contact.jpg" alt="Portret foto Miguel Haest">
          </li>
          <li>
            Turnhout 2300, Belgie <i class="fas fa-map-marker-alt "></i>
          </li>

          <li>
            + 04 85 33 66 41 <i class="fas fa-phone mt-4 "></i>
          </li>
          <li>
            geri.haest@gmail.com <i class="fas fa-envelope mt-4 "></i>
          </li>
        </ul>
      </div>
      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact formulier</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum dolorem a facilis accusamus laboriosam. Maiores cum aliquid eligendi quam? Sapiente tempore delectus corporis reiciendis optio vitae eligendi mollitia dolores cum.</p>

        <form id="contact-form" name="contact-form" action="mail.php" class="mr-5" method="POST">

          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form mb-2">
                <label for="name" class="">Your name</label>
                <input type="text" id="name" name="name" class="form-control">
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form mb-2">
                <label for="email" class="">Your email</label>
                <input type="text" id="email" name="email" class="form-control">
              </div>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-2">
                <label for="subject" class="">Subject</label>
                <input type="text" id="subject" name="subject" class="form-control">
              </div>
            </div>
          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

              <div class="md-form mb-2">
                <label for="message">Your message</label>
                <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea"></textarea>
              </div>

            </div>
          </div>
          <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
          <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
      </div>
      <!--Grid column-->



    </div>

  </section>
  <!--Section: Contact v.2-->





  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>