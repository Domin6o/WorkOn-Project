<?php
    /* Template Name: Contact */
    the_post();
    get_header();
?>

<div class="container py-5">
    <div class="row justify-content-between">
        <div class="col-lg-4">
            <h3 class="text-dark font-weight-normal">Dane kontaktowe: </h3>
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
        <div class="col-lg-6 mt-4 mt-lg-0">
            <h3 class="text-dark font-weight-normal mb-4">Formularz kontaktowy:</h3>
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
                <button type="submit" class="btn btn-block btn-outline-dark btn-lg">Wyślij</button>
            </form> -->
        </div>
    </div>

<?php
    get_footer();
?>