<?php include('header.php');?>
<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
   <div class="area-bg__inner">
      <div class="container text-center">
         <h1 class="b-title-page">CONTACT US</h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
         </nav>
      </div>
   </div>
</div>

<div class="l-main-content">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58688.52838180948!2d75.76220100056882!3d23.16899477894256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39637469de00ff23%3A0x7f82abdf7899d412!2sUjjain%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1608547504687!5m2!1sen!2sin" width="100%" height="510" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
         <div class="col-md-6">
            <section class="section-form-contacts">
               <h2 class="ui-title-inner">Send a Message</h2>
               <p>Nulla pariatur excepteur sint occaecat cupidatat no proident culpa qui officia des mollit anim id est lab orum ut perspiciatis unde omnis iste natuser sit volupta tem accusantium sed ipsum laudantium.</p>
               <div id="success"></div>
               <form class="b-form-contacts ui-form" id="contactForm" action="#" method="post">
                  <div class="form-group">
                     <input class="form-control" id="user-name" type="text" name="user-name" placeholder="Your Name" required="required"/>
                  </div>
                  <div class="form-group">
                     <input class="form-control" id="user-email" type="email" name="user-email" placeholder="email"/>
                  </div>
                  <div class="form-group">
                     <textarea class="form-control" id="user-message" rows="5" placeholder="Message" required="required"></textarea>
                  </div>
                  <button class="btn btn-primary">Send Message</button>
               </form>
            </section>
            <!-- end .b-form-contact-->
         </div>
      </div>
   </div>
</div>
<?php include('footer.php');?>