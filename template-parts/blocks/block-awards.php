<?php
/*
** Block displaying Awards & Recognitions
*/
?>
    <?php  
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;
       
    $awards_block_title = get_field('awards_block_title', $page_id);
    $awards_block_heading = get_field('awards_block_heading', $page_id);
    $awards_block_button = get_field('awards_block_button', $page_id);
    $awards_block_first = get_field('awards_block_first', $page_id);
    $awards_block_second = get_field('awards_block_second', $page_id);
    $awards_block_third = get_field('awards_block_third', $page_id); 
    $awards_block_fourth = get_field('awards_block_fourth', $page_id);
    $awards_block_fifth = get_field('awards_block_fifth', $page_id);
    $awards_block_sixth = get_field('awards_block_sixth', $page_id);         
    ?>

    <!-- section start -->
    <?php if( $awards_block_heading ): ?>
        <section class="layout-pt-lg layout-pb-lg bg-dark-1">
            <!-- container start -->
            <div class="container">
            <!-- row start -->
            <div class="row justify-content-between">

                <div class="col-xl-3 col-lg-4 col-md-7">
                <div class="sectionHeading -sm">
                    <p class="sectionHeading__subtitle -light">
                        <?php echo $awards_block_title; ?>
                    </p>
                    <h2 class="sectionHeading__title fw-700 text-white">
                        <?php echo $awards_block_heading; ?>
                    </h2>
                    <?php if( $awards_block_button['title'] ): ?>
                        <a href="<?php echo $awards_block_button['link']; ?>" class="button -md -outline-white text-white mt-32 md:mt-24">
                            <?php echo $awards_block_button['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
                </div>


                <div class="col-lg-7 md:mt-64">
                <!-- row start -->
                <div class="row x-gap-48 y-gap-48">

                    <!-- item start -->
                    <div class="col-lg-6 col-sm-6">
                    <div class="award">
                        <div class="award__content">
                        <p class="text-xl text-accent number fw-400">
                            <?php echo $awards_block_first['num']; ?>
                        </p>
                        <h3 class="award__title text-xl fw-500 text-white mt-16">
                            <?php echo $awards_block_first['title']; ?>
                        </h3>
                        <p class="award__text text-light mt-8">
                            <?php echo $awards_block_first['description']; ?>
                        </p>
                        </div>
                    </div>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-lg-6 col-sm-6">
                    <div class="award">
                        <div class="award__content">
                        <p class="text-xl text-accent number fw-400">
                            <?php echo $awards_block_second['num']; ?>
                        </p>
                        <h3 class="award__title text-xl fw-500 text-white mt-16">
                            <?php echo $awards_block_second['title']; ?>
                        </h3>
                        <p class="award__text text-light mt-8">
                            <?php echo $awards_block_second['description']; ?>
                        </p>
                        </div>
                    </div>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-lg-6 col-sm-6">
                    <div class="award">
                        <div class="award__content">
                        <p class="text-xl text-accent number fw-400">
                            <?php echo $awards_block_third['num']; ?>
                        </p>
                        <h3 class="award__title text-xl fw-500 text-white mt-16">
                            <?php echo $awards_block_third['title']; ?>
                        </h3>
                        <p class="award__text text-light mt-8">
                            <?php echo $awards_block_third['description']; ?>
                        </p>
                        </div>
                    </div>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-lg-6 col-sm-6">
                    <div class="award">
                        <div class="award__content">
                        <p class="text-xl text-accent number fw-400">
                            <?php echo $awards_block_fourth['num']; ?>
                        </p>
                        <h3 class="award__title text-xl fw-500 text-white mt-16">
                            <?php echo $awards_block_fourth['title']; ?>
                        </h3>
                        <p class="award__text text-light mt-8">
                            <?php echo $awards_block_fourth['description']; ?>
                        </p>
                        </div>
                    </div>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-lg-6 col-sm-6">
                    <div class="award">
                        <div class="award__content">
                        <p class="text-xl text-accent number fw-400">
                            <?php echo $awards_block_fifth['num']; ?>
                        </p>
                        <h3 class="award__title text-xl fw-500 text-white mt-16">
                            <?php echo $awards_block_fifth['title']; ?>
                        </h3>
                        <p class="award__text text-light mt-8">
                            <?php echo $awards_block_fifth['description']; ?>
                        </p>
                        </div>
                    </div>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="col-lg-6 col-sm-6">
                    <div class="award">
                        <div class="award__content">
                        <p class="text-xl text-accent number fw-400">
                            <?php echo $awards_block_sixth['num']; ?>
                        </p>
                        <h3 class="award__title text-xl fw-500 text-white mt-16">
                            <?php echo $awards_block_sixth['title']; ?>
                        </h3>
                        <p class="award__text text-light mt-8">
                            <?php echo $awards_block_sixth['description']; ?>
                        </p>
                        </div>
                    </div>
                    </div>
                    <!-- item end -->

                </div>
                <!-- row end -->
                </div>

            </div>
            <!-- row end -->
            </div>
            <!-- container end -->
        </section>
    <?php endif; ?>
    <!-- section end -->