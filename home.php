<?php
/**
 * The template for displaying all single posts.
 *
 * @package monoport
 */

get_header();
$container   = get_theme_mod( 'monoport_container_type' );
?>

<div id="gredient-box" class="gredient-box"></div>

<div class="site-hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                <div class="hero-tagline">
                    <h1>Get your website developed.</h1>
                    <p>A front-end web developer playing since 2013, <br> specially with WordPress.</p>
                </div>
                
                <div class="your-site">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/your-site.png" alt="Image">
                </div>
                
                <div class="connect" id="contact">
                    <ul class="ul-vertical ul-none">
                        <li><a href="#" data-toggle="tooltip" data-placement="left" title="Skype id: manasvi12053">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/skype.png" alt="Image">
                        </a></li>
                        <li><a href="mailto:manasvi12053@gmail.com" data-toggle="tooltip" data-placement="left" title="manasvi12053@gmail.com">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/gmail.png" alt="Image">
                        </a></li>
                        <li><a href="https://www.linkedin.com/in/manasviprasadchakma" target="_blank" data-toggle="tooltip" data-placement="left" title="Manasvi Prasad Chakma">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin.png" alt="Image">
                        </a></li>
                        <li><a href="https://www.fiverr.com/manasvip" target="_blank" data-toggle="tooltip" data-placement="left" title="ManasviP">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/fiverr.png" alt="Image">
                        </a></li>
                        <li><a href="https://www.upwork.com/o/profiles/users/_~01f01ee4293b3b9b14" target="_blank" data-toggle="tooltip" data-placement="left" title="Manasvi P.">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/upwork.png" alt="Image">
                        </a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div><!--.site-hero-->

<div id="services" class="area-of-work section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                <h2 class="section-title">Area of Work</h2>
                
                <div class="work-category">
                    
                    <div class="work-item">
                        <p><i class="fa fa-slack"></i> <span>PSD to HTML5</span></p>
                        <p><i class="fa fa-slack"></i> <span>Responsive Design</span></p>
                        <p><i class="fa fa-slack"></i> <span>Modification</span></p>
                    </div>
                    <div class="work-item">
                        <p><i class="fa fa-slack"></i> <span>WP Theme Development</span></p>
                        <p><i class="fa fa-slack"></i> <span>WP Security</span></p>
                        <p><i class="fa fa-slack"></i> <span>WP Site Migration</span></p>
                    </div>
                    <div class="work-item">
                        <p><i class="fa fa-slack"></i> <span>Speed Optimization</span></p>
                        <p><i class="fa fa-slack"></i> <span>Troubleshooting</span></p>
                        <p><i class="fa fa-slack"></i> <span>Virtual Assistant</span></p>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

<div id="showcase" class="showcase section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                
                <div class="showcase-item">
                    <div class="window">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/showcase/hff-preview.png" alt="HFF CHT">
                    <div class="showcase-item-info">
                        <a href="#" class="mc-btn color-primary" data-toggle="modal" data-target="#hffcht">Info</a>
                        <a href="http://hffcht.com" class="mc-btn color-secondary" target="_blank">Live Preview</a>
                    </div>
                </div>
                
                <!-- Modal -->
                <div id="hffcht" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        
                        <h4 class="modal-title">HFFCHT.COM</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>Project Name: Hill Film Festival</p>
                        <p>Project Type: Design and Development</p>
                        <p>Duration: 8-10 Workdays</p>
                        <p>Live site: <a href="http://hffcht.com" target="_blank">www.hffcht.com</a></p>
                        <p>CMS: WordPress</p>
                        <p>Development Type: Custom WordPress Theme Development</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div><!--.modal-->
                
                
            </div>
            <div class="col-sm-6 col-md-4">
                
                <div class="showcase-item">
                    <div class="window">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/showcase/kapaeeng-preview.png" alt="HFF CHT">
                    <div class="showcase-item-info">
                        <a href="#" class="mc-btn color-primary" data-toggle="modal" data-target="#kapaeeng">Info</a>
                        <a href="https://kapaeengnet.org" class="mc-btn color-secondary" target="_blank">Live Preview</a>
                    </div>
                </div>
                
                
                <!-- Modal -->
                <div id="kapaeeng" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        
                        <h4 class="modal-title">KAPAEENG.ORG</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>Project Name: Kapaeeng Foundation</p>
                        <p>Project Type: Design and Development</p>
                        <p>Duration: 12-15 Workdays</p>
                        <p>Live site: <a href="https://kapaeeng.org" target="_blank">www.kapaeeng.org</a></p>
                        <p>CMS: WordPress</p>
                        <p>Development Type: Custom WordPress Theme Development</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div><!--.modal-->
                
            </div>
            
            
            <div class="col-sm-6 col-md-4">
                
                <div class="showcase-item">
                    <div class="window">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/showcase/jumjournal-preview.png" alt="HFF CHT">
                    <div class="showcase-item-info">
                        <a href="#" class="mc-btn color-primary" data-toggle="modal" data-target="#jumjournal">Info</a>
                        <a href="http://jumjournal.com" class="mc-btn color-secondary" target="_blank">Live Preview</a>
                    </div>
                </div>
                
                <!-- Modal -->
                <div id="jumjournal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        
                        <h4 class="modal-title">JUMJOURNAL.COM</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>Project Name: Jumjournal</p>
                        <p>Project Type: Blogsite Development</p>
                        <p>Duration: 5-7 Workdays</p>
                        <p>Live site: <a href="http://jumjournal.com" target="_blank">www.jumjournal.com</a></p>
                        <p>CMS: WordPress</p>
                        <p>Development Type: Install Premium WordPress Theme</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div><!--.modal-->
                
            </div>
            
        </div>
    </div>
</div>

<div class="map section">
    
    <div class="world-map">
        <img class="map-img" src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="map">
        <a href="https://www.upwork.com/o/profiles/users/_~01f01ee4293b3b9b14" target="_blank">
            <div class="profile">
                <img src="<?php echo get_template_directory_uri(); ?>/images/profile-image.png" alt="Image">
                <p>Manasvi P. <br> <span>Freelancer, Bangladesh</span></p>
            </div>
        </a>
    </div>
</div>

<div id="proposal" class="contact-form section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                <?php echo do_shortcode('[contact-form-7 id="13" title="Contact form 1"]'); ?>
                
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>