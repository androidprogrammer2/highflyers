<?php /*Template Name: Program */?>
<?php echo get_header();?>


<?php get_template_part( 'template-parts/template', 'common_banner' );?>

<section class="programs-sec">
     <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block col-xl-2">
                <div class="team_nav">
                     <ul>
                         <li class="active"> <a href="#why-choose">Why Choose High Flyers</a></li>
                         <li> <a href="#program-cost">Program Cost</a></li>
                         <li><a href="#program-details">Program Details</a></li>
                         <li><a href="#book-online">Book Online</a></li>
                     </ul>
                </div>
            </div>
            <div class="col-lg-9 col-xl-10">
              <div class="recreational-programs-wrap button_shape">
                    <div class="why-choose one_column_text" id="why-choose">
                        <?php 
                        
                        ?>
                        <div class="wcp-top">
                            <div class="row">
                                <div class="col-md-6 pe-xl-4 mb-4 mb-md-0">
                                    <div class="title_block">
                                        <h2>Why choose High Flyers for recreational gymnastics? </h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="content-block">
                                        <p>Increase fitness, strength, and body awareness with our Recreational Gymnastics program. We have classes for all ages and abilities, delivered by passionate Gymnastics WA-accredited Coaches.</p>
                                        <p>Our gym is a gymnast’s paradise! We’re talking about a fully sprung competition-sized floor, foam pit for dismount practise, bars, beams, vaults, pommel horses and mushrooms. Sounds like fun, right?</p>
                                        <h4>Here’s how recreational gymnastics works at High Flyers:</h4>
                                        <ul>
                                            <li>Recreational Gymnastics classes are co-ed.</li>
                                            <li>Gymnasts work through the Gymnastics WA skills and routines at their own pace under the guidance of our experienced Coaches.</li>
                                            <li>Once competency is achieved, gymnasts are awarded a certificate and move on to the next level.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                        
                        ?>
                        <div class="wcp-middle">
                            <div class="row">
                                <div class="col-md-6 pe-xl-4 mb-4 mb-md-0">
                                     <div class="img-wrap">
                                         <img src="<?php echo get_home_url()?>/wp-content/uploads/2024/06/prf.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="content-block">
                                        <h3>Recreational to competitive gymnastics</h3>
                                        <p>We scout talented athletes from Recreational Gymnastics classes to join our Competitive Gymnastics teams. Competitive Gymnastics is split into MAG (Men’s Artistic Gymnastics) and WAG (Women’s Artistic Gymnastics). Talk to our Coaches if this interests you.</p>
                                        <div class="attention">
                                             <h3>Attention parents!</h3>
                                             <p>Watch the class and enjoy a cuppa or snack at the Bouncing Bean Café, up on the viewing deck, while you wait.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                        
                        ?>
                        <div class="wcp-middle gymtastic-experience">
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-4 mb-md-0">
                                    <div class="title-block">
                                        <h2>Ready for a gymtastic experience?</h2>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                     <div class="content-block">
                                         <p>Join us for a Recreational Gymnastics class. We know you’ll love it!</p>
                                         <a href="#" class="theme-btn">View timetable</a>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                    $how_much_table = get_field('how_much_table');
                    ?>
                    <div class="program-cost-sec" id="program-cost">
                         <div class="row">
                             <div class="col-md-5">
                                  <div class="content-block">
                                      <h2>How much does it cost?</h2>
                                      <p>We know pricing is important. Here’s a breakdown of our fees.</p>
                                  </div>
                             </div>
                                <div class="col-md-7">
                                    <div class="program-cost">
                                        <table>
                                            <tbody>
                                                <?php 
                                                    if(!empty($about_datas)){
                                                        foreach($about_datas as $about_data){
                                                            $table_title_group = $about_data['table_title_group'];
                                                            $how_much_table_data = $about_data['how_much_table_data'];
                                                            echo "<pre>";
                                                            print_r($table_title_group);
                                                            echo "</pre>";
                                                            ?>
                                                                <tr>
                                                                    <th>
                                                                        <h6>Structured class fee </h6>
                                                                        <p>(varies depending on hours trained per week)</p>
                                                                    </th>
                                                                    <td>
                                                                        $114.50 / month
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>


                                                <tr>
                                                    <th>
                                                        <h6>Structured class fee </h6>
                                                        <p>(varies depending on hours trained per week)</p>
                                                    </th>
                                                    <td>
                                                        $114.50 / month
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6>New Member joining fee </h6>
                                                        <p>(one-off payment)</p>
                                                    </th>
                                                    <td>
                                                        $25.00 / person
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <h6>Gymnastics WA Registration </h6>
                                                        <p>(for insurance purposes)</p>
                                                    </th>
                                                    <td>
                                                        $50.00 / year
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                         </div>
                    </div>


                    <div class="program-details" id="program-details">
                        <h2>Recreational gymnastics at a glance</h2>
                        <table>
                             <tbody>
                                  <tr>
                                     <th>Coach : Child ratio</th>
                                     <td>1 : 8</td>
                                  </tr>
                                  <tr>
                                     <th>Max. class size</th>
                                     <td>8</td>
                                  </tr>
                                  <tr>
                                     <th>Session length</th>
                                     <td>60 – 90 minutes</td>
                                  </tr>
                                  <tr>
                                     <th>Session day</th>
                                     <td>Monday – Saturday</td>
                                  </tr>
                                  <tr>
                                     <th>Session times</th>
                                     <td><a href="#" class="theme-btn">View timetable</a></td>
                                  </tr>
                                  <tr>
                                     <th>What do children wear?</th>
                                     <td>Loose, comfortable clothing, including   t-shirts, shorts, leggings, or track pants are suitable. Avoid zippers, buttons,   belts, and buckles – ouch!</td>
                                  </tr>
                                  <tr>
                                     <th>What do children need to bring?</th>
                                     <td>Socks and a water bottle</td>
                                  </tr>
                             </tbody>
                        </table>
                    </div>


                    <div class="book-online" id="book-online" >
                          <div class="row">
                              <div class="col-md-6 mb-4 mb-md-0">
                                  <div class="content-block">
                                      <h2>Book online now!</h2>
                                      <p>To book online, please go through our Parent Portal. It takes less than one minute to create an account, and then you have access to detailed program information and a full timetable.</p>
                                      <a href="#" class="theme-btn">Take me to the Parent Portal</a>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="book-online-slider">
                                       <div class="book-online-list">
                                           <div class="book-onlin-slide">
                                                <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/booking-slide-img1.png" alt="">
                                           </div>
                                           <div class="book-onlin-slide">
                                                <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/booking-slide-img1.png" alt="">
                                           </div>
                                           <div class="book-onlin-slide">
                                                <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/booking-slide-img1.png" alt="">
                                           </div>
                                       </div>
                                   </div>
                              </div>
                          </div>
                    </div>


                </div>
            </div>
        </div>
     </div>
</section>

<?php get_template_part( 'template-parts/template', 'above_footer' );?>

<?php echo get_footer();?>

<script>
     jQuery('.book-online-list').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows:false
    });
				
</script>