<?php 
        function tap_to_email_callback() { 
            $email = get_field('email', 'option'); 
            if( !empty($email) ){
                return $email ;
            }
        }
        add_shortcode( 'tap-to-email', 'tap_to_email_callback' );

        function tap_to_telephone_callback() { 
            $telephone = get_field('phone', 'option'); 
            if( !empty($telephone) ){
                return $telephone;
            }
        }
        add_shortcode( 'tap-to-telephone', 'tap_to_telephone_callback' );

        function social_icons_header_callback() { 

            $facebook           = get_field('facebook','option');
            $instagram          = get_field('instagram','option');
            $you_tube           = get_field('you_tube','option');
            $output = "";
            if( !empty($instagram) || !empty($facebook) || !empty($you_tube)){
                $output .= '<div class="d-flex gap-3 flex-wrap social-link">';

                if($facebook){
                    $output  .= '<a target="_blank" href="'.$facebook.'"><img src="'.get_stylesheet_directory_uri().'/assets/images/fb.png" alt=""></a>';
                }
                if($instagram){
                    $output  .= '<a target="_blank" href="'.$instagram.'"><img src="'.get_stylesheet_directory_uri().'/assets/images/insta.png" alt=""></a>';
                }
                if($you_tube){
                    $output  .= '<a target="_blank" href="'.$you_tube.'"><img src="'.get_stylesheet_directory_uri().'/assets/images/youtube.png" alt=""></a>';
                }
                
                $output .= '</div>';
            }

            return $output;

        }
        add_shortcode( 'social-icons-header', 'social_icons_header_callback' );

    function year_shortcode () {
        $year = date_i18n ('Y');
        return $year;
    }
    add_shortcode ('year', 'year_shortcode');

    function dd_woocommerce_breadcrumb(){
        ob_start();
        global $post;
        $post_type = get_post_type( get_the_ID() );
        if(is_front_page()){
            ?>
            <?php 
        } elseif(is_page()){
            $page_parent = $post->post_parent;
            $parent_title = get_the_title($page_parent);
            ?>
                <div class="breadcrumb-sec">
                    <div class="container">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                            <?php if(!empty($page_parent)){ ?>
                                    <li class="breadcrumb-item"><a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php echo $parent_title; ?></a></li>
                                <?php } ?>
                            <li class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <?php }elseif(is_singular('post')){ ?>
                    <div class="breadcrumb-sec">
                        <div class="container">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><?php _e('Home'); ?></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo home_url( '/blog/' ); ?>"><?php _e('Blog'); ?></a></li>
                                <li class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                <?php }elseif(is_404()){ ?>
                    <div class="breadcrumb-sec">
                        <div class="container">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo home_url(''); ?>"><?php _e('Home'); ?></a></li>
                                <li class="breadcrumb-item active"><?php echo 'ERROR 404'; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <?php 
                     }elseif(is_singular('recreational_pro')){ ?>
                        <div class="breadcrumb-sec">
                            <div class="container">
                                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url(''); ?>"><?php _e('Home'); ?></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo home_url('/recreational-programs/'); ?>"><?php _e('Programs'); ?></a></li>
                                    <li class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <?php 
                    }else{ ?>
                    <div class="container">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb ms-0 mb-3">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(''); ?>"><?php _e('Home'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo 'Search'; ?></li>
                            </ol>
                        </nav>
                    </div>
            <?php   
        }
        echo ob_get_clean();
    }


    function my_login_logo_one() { 
        ?> 
        <style type="text/css"> 
        body.login div#login h1 a {
         background-image: url('<?php echo home_url( '/wp-content/uploads/2024/06/logo.png' ); ?>');  
        padding-bottom: 30px; 
        } 
        body.login div#login h1 a {
        background-size: contain !important;
        width: 100% !important;
        height: 20px !important;
        filter: brightness(0) saturate(100%);
        }
        </style>
         <?php 
        } 
        
        add_action( 'login_enqueue_scripts', 'my_login_logo_one' );