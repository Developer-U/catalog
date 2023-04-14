<?php
/*
** Block displaying advantages for any pages
*/
?>
    <?php  
    // Получаем ID текущей страницы
    global $wp_query;
    $page_id = $wp_query->post->ID;        
    
    $advantages_title = get_field('advantages_title', $page_id);
    $advantages_heading = get_field('advantages_heading', $page_id);
    $advantages_first = get_field('advantages_first', $page_id);
    $advantages_second = get_field('advantages_second', $page_id);
    $advantages_third = get_field('advantages_third', $page_id);
    $advantages_fourth = get_field('advantages_fourth', $page_id);
    $advantages_fifth = get_field('advantages_fifth', $page_id);
    $advantages_sixth = get_field('advantages_sixth', $page_id);
    ?>
   
    <!-- section advantages start -->
    <section class="layout-pt-sm layout-pb-sm">
        <!-- container start -->
        <div data-anim-wrap class="container">
            <!-- row start -->
            <div class="row">                
                <div data-anim-child="slide-up" class="sectionHeading -sm">
                    <p class="sectionHeading__subtitle">
                    <?php echo $advantages_title; ?>
                    </p>
                    <h2 class="sectionHeading__title fw-700">
                    <?php echo $advantages_heading; ?>
                    </h2>
                </div>               
            </div>
            <!-- row end -->
            
            <!-- first row start -->
            <div class="row x-gap-40 y-gap-40 layout-pt-md">
            <!-- first_advantage -->            
                <div class="col-lg-4 col-md-6 col-12 slide-left delay-2 advantage-item">                    
                    <div class="advantage-item__content">
                        <h3 class="advantage-item__title text-lg sm: text-base fw-700 layout-pl-sm">
                        <?php echo $advantages_first['heading']; ?>
                        </h3>                    

                        <p class="text-black fw-400 mt-12">
                        <?php echo $advantages_first['description']; ?>
                        </p>
                    </div>
                </div>  
                   
            <!-- first_advantage end -->

            <!-- second_advantage -->
      
                <div class="col-lg-4 col-md-6 col-12 slide-left delay-2 advantage-item">                    
                    <div class="advantage-item__content">
                        <h3 class="advantage-item__title text-lg sm: text-base fw-700 layout-pl-sm">
                        <?php echo $advantages_second['heading']; ?>
                        </h3>                    

                        <p class="text-black fw-400 mt-12">
                        <?php echo $advantages_second['description']; ?>
                        </p>
                    </div>
                </div>  
                      
            <!-- second_advantage end -->

            <!-- third_advantage -->
           
                <div class="col-lg-4 col-md-6 col-12 slide-left delay-2 advantage-item">                    
                    <div class="advantage-item__content">
                        <h3 class="advantage-item__title text-lg sm: text-base fw-700 layout-pl-sm">
                        <?php echo $advantages_third['heading']; ?>
                        </h3>                    

                        <p class="text-black fw-400 mt-12">
                        <?php echo $advantages_third['description']; ?>
                        </p>
                    </div>
                </div>  
                      
            <!-- third_advantage end -->

            <!-- fourth_advantage -->
       
                <div class="col-lg-4 col-md-6 col-12 slide-left delay-2 advantage-item">                    
                    <div class="advantage-item__content">
                        <h3 class="advantage-item__title text-lg sm: text-base fw-700 layout-pl-sm">
                        <?php echo $advantages_fourth['heading']; ?>
                        </h3>                    

                        <p class="text-black fw-400 mt-12">
                        <?php echo $advantages_fourth['description']; ?>
                        </p>
                    </div>
                </div>  
                      
            <!-- fourth_advantage end -->

            <!-- fifth_advantage -->
          
                <div class="col-lg-4 col-md-6 col-12 slide-left delay-2 advantage-item">                    
                    <div class="advantage-item__content">
                        <h3 class="advantage-item__title text-lg sm: text-base fw-700 layout-pl-sm">
                        <?php echo $advantages_fifth['heading']; ?>
                        </h3>                    

                        <p class="text-black fw-400 mt-12">
                        <?php echo $advantages_fifth['description']; ?>
                        </p>
                    </div>
                </div>  
                   
            <!-- fifth_advantage end -->

            <!-- sixth_advantage -->
       
                <div class="col-lg-4 col-md-6 col-12 slide-left delay-2 advantage-item">                    
                    <div class="advantage-item__content">
                        <h3 class="advantage-item__title text-lg sm: text-base fw-700 layout-pl-sm">
                        <?php echo $advantages_sixth['heading']; ?>
                        </h3>                    

                        <p class="text-black fw-400 mt-12">
                        <?php echo $advantages_sixth['description']; ?>
                        </p>
                    </div>
                </div>  
                     
            <!-- sixth_advantage end -->
                
            </div>
            <!-- row end -->

        </div>
        <!-- container end -->
    </section>
    <!-- section end -->
 