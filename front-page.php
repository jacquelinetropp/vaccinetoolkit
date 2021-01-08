<?php get_header() ?>
<div class="wrapper">
    <section class="fronthead">
        <div class="fronthead__img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/header2.jpg" alt="mask header image">
        </div>
        <div class="fronthead__txt">
            <h1 class="heading-primary">Covid Vaccine Toolkit </h1>
        </div>
    </section>
    <section class="faq">
        <div class="faqbox">
            <a href="/" class="faqbox__link">
                <div class="faqbox__img">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/general.jpg" alt="mask header image">
                </div>
                <div class="faqbox__txt">
                    <h2 class="heading-secondary">General</h2>
                </div>

            </a>
        </div>
        <div class="faqbox">
            <a href="/" class="faqbox__link">
                <div class="faqbox__img">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/safety.jpg" alt="mask header image">
                </div>
                <div class="faqbox__txt">
                    <h2 class="heading-secondary">Safety</h2>
                </div>

            </a>
        </div>
        <div class="faqbox">
            <a href="/" class="faqbox__link">
                <div class="faqbox__img">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/timeline.jpg" alt="mask header image">
                </div>
                <div class="faqbox__txt">
                    <h2 class="heading-secondary">Timeline</h2>
                </div>

            </a>
        </div>
        <div class="faqbox">
            <a href="/" class="faqbox__link">
                <div class="faqbox__img">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/vulnerable.jpg" alt="mask header image">
                </div>
                <div class="faqbox__txt">
                    <h2 class="heading-secondary">Vulnerable Populations</h2>
                </div>

            </a>
        </div>
    </section>
    <section class="frontmap">
        <h2 class="heading-secondary">Help Us Fill The Map</h2>
        <div class="frontmap__wrapper">
            <div class="frontmap__cta">
                <h3 class="heading-tertiary">Join Our Growing List of Vaccinated Professionals</h3>
                <div class="frontmap__map">
                    <?php echo do_shortcode("[display-map id='52']"); ?>
                </div>
            </div>
            <div class="frontmap__box">
                <div class="frontmap__img">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/vaccinated3.jpg" id="vaccinated1" alt="mask header image">
                </div>
                <div class="frontmap__img">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/vaccinated1.jpg" id="vaccinated2" alt="mask header image">
                </div>
                <div class="frontmap__img">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/vaccinated5.jpg" id="vaccinated3" alt="mask header image">
                </div>
            </div>
        </div>

    </section>
    <section class="frontcontact" id="contact">
        <h2 class="heading-secondary">Contact Us </h2>
        <div class="frontcontact__wrapper">
            <?php echo do_shortcode("[contact-form-7 id='5' title='Contact form 1']"); ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>