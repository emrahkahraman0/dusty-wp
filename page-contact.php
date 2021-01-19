<?php 
/*Template Name: Contact Page*/
get_header(); ?>

<div id="contact-page">

    <div class="container">

        <div class="page-title">contact page</div>

    </div>
    <!-- container -->

</div>
<!-- projects-page# -->

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

<div id="contact">

    <div class="container">

        <div class="contact-wrapper d-flex align-items-center row">

            <div class="contact-info col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="icon-item">
                    <div class="icon"><i class="fa fa-map-signs"></i></div>
                    <address>
                        Küçükbakkalköy Mh, Fevzi Paşa Cd, Hasan Paşa Sk, No:1, D:5, 34750 Ataşehir / İstanbul
                    </address>
                </div>
                <!-- icon-item -->
                <div class="icon-item">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <h3><a href="tel: +90 216 469 2011">Telefon: +90 216 469 2011</a></h3>
                    <h4>Faks: +90 216 469 2071</h4>
                </div>
                <!-- icon-item -->
                <div class="icon-item">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <h5>Bilgi: info @ ws.com.tr</h5>
                    <h5>Destek: destek @ ws.com.tr</h5>
                </div>
                <!-- icon-item -->
            </div>
            <!-- contact-info -->
            <div class="contact-form col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <?php the_content(); ?>
            </div>
            <!-- contact-form -->

        </div>
        <!-- contact-wrapper -->

    </div>
    <!-- container -->

</div>
<!-- contact# -->

<?php endwhile; else : ?>
    <p><?php esc_html_e('Aradığınız şey bizde yok kardeş!!!!'); ?></p>
<?php endif; ?>

<div id="contact-map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6349270.921063913!2d30.688550329139233!3d39.010067878037894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2zVMO8cmtpeWU!5e0!3m2!1str!2str!4v1606223188325!5m2!1str!2str" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
<!-- contact-map# -->

<?php get_footer(); ?>