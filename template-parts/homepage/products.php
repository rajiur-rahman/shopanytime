
    <!--product section start-->
    <?php if ( true == get_theme_mod( 'shopanytime_homepage_main_product_section', true ) ): ?>

    <section class="space-3 space-adjust">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title "> <?php echo get_theme_mod( 'shopanytime_homepage_main_product_title', 'New Arrival' ) ?></h2>
                        <div class="sub-title"> <?php echo get_theme_mod( 'shopanytime_homepage_main_product_sub_title', '37 New fashion products arrived recently in our showroom for this winter' ) ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <ul class="products columns-3">
                        <?php echo do_shortcode( '[products column=3]' ) ?>
                    </ul>
                    <a href="#" class="view-all-product mt-md-5">View All Products</a>
                </div>

            </div>
        </div>
    </section>
    <?php endif;?>

    <!-- product section end-->
