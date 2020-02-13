<?php
    /* Template Name: Contact */
    the_post();
    get_header();
?>

<div class="banner do-animated do-fadeInDownBig">
    <img class="img img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    <h1 id="contact_header"><?php the_title(); ?></h1>
</div>
<!-- <div class="container-fluid banner do-animated do-fadeInDownBig" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
    <h1 id="contact_header"><?php the_title(); ?></h1>
</div>
<div class="container  justify-content-center">
    <div class="m-2 col-12 text-center">
       <h1 id="next"><?php the_title(); ?></h1>
    </div>
</div> -->

<div class="container py-5">
    <div class="row justify-content-between">
        <div class="contact-info col-lg-4 mx-3 do-animated do-fadeInLeft">
            <h3 class="contact_h3">Dane kontaktowe: </h3>
            <br>
            <?php the_content(); ?>
            <!-- <img class="m-3" src="./images/mapa.png" alt="">
            <h4>Telefon:</h4>
            <p>123 123 123</p>
            <h4>E-mail:</h4>
            <p>CAT@gmail.com</p>
            <h4>Adres:</h4>
            <p>Ulica: Gdańska 100
                <br>
                kod pocztowy : 85-345
                <br>
                Bydgoszcz -->
        </div>
    <div class="col-lg-6 mt-4 mt-lg-0 do-animated do-fadeInRight">

            <h3 class="contact_h3 mb-4 mx-sm-4 mx-lg-0 mx-md-0">Formularz kontaktowy:</h3>
            <?php echo do_shortcode('[contact-form-7 id="58" title="Contact form 1"]'); ?>
<!-- 
            <form action="#">
                <div class="form-group">
                    <label for="username">Imię i nazwisko</label>
                    <input type="text" class="form-control form-control-lg" id="username"
                        placeholder="Podaj imię i nazwisko" required>
                </div>
                <div class="form-group">
                    <label for="useremail">E-mail</label>
                    <input type="email" class="form-control form-control-lg" id="useremail"
                        placeholder="Podaj e-mail" required>
                </div>
                <div class="form-group">
                    <label for="usermessage">Treść wiadomości</label>
                    <textarea class="form-control form-control-lg" id="usermessage" placeholder="Podaj treść"
                        rows="6" required></textarea>
                </div>
                <button type="submit" class="btn btn-block btn-lg">Wyślij</button>
            </form> -->

            </div>
        <div class="map col-lg-12 d-flex do-animated do-fadeIn">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d503.20150929038147!2d18.01242711141731!3d53.134549162957704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470313c3cf175b6b%3A0xfb9028ce7dca0e0d!2sGda%C5%84ska%20100%2C%2085-021%20Bydgoszcz!5e0!3m2!1spl!2spl!4v1580373220160!5m2!1spl!2spl" width="1200" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

 </div>


<?php
    get_footer();
?>