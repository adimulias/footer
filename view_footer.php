    <!--Call Start-->
    <!-- <div class="call-us" 
    style="background-image: url(<?php echo base_url(); ?>public/uploads/cta-backgrounds/<?php echo $setting['cta_background']; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="call-text">
                        <h3><?php echo $setting['cta_text']; ?></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="button">
                        <a href="<?php echo $setting['cta_button_url']; ?>"><?php echo FOOTER_CTA_BUTTON; ?> <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--Call End-->

    <!--Footer-Area Start-->
    <div class="footer-area pt_60 pb_90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item" id="newsletter">
                        <h3><?php echo "UHAMKA"; ?></h3>
                        <!-- <p>
                            <?php //echo nl2br($setting['newsletter_text']); 
                            ?>
                        </p> -->
                        <?php //echo form_open(base_url().'newsletter/send',array('class' => '')); 
                        ?>
                        <!-- <div class="input-group">                            
                            <input type="email" class="form-control" placeholder="<?php //echo EMAIL_ADDRESS; 
                                                                                    ?>" name="email_subscribe" required>
                            <span class="input-group-btn">
                                <button class="btn" type="submit" name="form_subscribe"><i class="fa fa-location-arrow"></i></button>
                            </span>                            
                        </div> -->
                        <?php //echo form_close(); 
                        ?>
                        <img src="<?php echo base_url(); ?>public/uploads/files/5f5ba26e678f25f5ba26e678f48.png" alt="Logo">
                        <p class="text-center mt-2">
                            <script type="text/javascript" src="https://www.stat-counter.org/count/7jzx"></script><br>
                            <a href='http://www.counter-zaehler.de'>kostenloser besucherzähler mit web statistik</a>
                            <script type='text/javascript' src='https://www.whomania.com/ctr?id=790532f5805c5c032a3e5edaa87219a190ff71ec'></script>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo FOOTER_2_HEADING; ?></h3>
                        <ul>
                            <?php
                            $i = 0;
                            foreach ($all_news as $news) {
                                $i++;
                                if ($i > $setting['footer_recent_news_item']) {
                                    break;
                                }
                            ?>
                                <li><a href="<?php echo base_url(); ?>post/<?php echo $news['news_slug']; ?>"><?php echo $news['news_title']; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <!-- <h3><?php //echo FOOTER_3_HEADING; 
                                    ?></h3> -->
                        <h3><?php echo FOOTER_1_HEADING ?></h3>
                        <div class="row pl-10 pr-10">
                            <?php
                            /*
                            $i=0;
                            foreach($portfolio_footer as $row) {
                                $i++;
                                if($i > $setting['footer_recent_portfolio_item']) {
                                    break;
                                } 
                            */
                            ?>
                            <!-- <div class="col-4 footer-project">
                                    <a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>">
                                        <img src="<?php echo base_url(); ?>public/uploads/portfolios/<?php echo $row['photo']; ?>" alt="Project Photo">
                                    </a>
                                </div> -->
                            <?php
                            /*
                            }
                            */
                            ?>

                            <ul class="footer-social">
                                <?php
                                foreach ($social as $row) {
                                    if ($row['social_url'] != '') {
                                        echo '<li><a href="' . $row['social_url'] . '"><i class="' . $row['social_icon'] . '"></i></a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h3><?php echo FOOTER_4_HEADING; ?></h3>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($setting['footer_address']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($setting['footer_phone']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer-address-item">
                            <div class="icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="text">
                                <span>
                                    <?php echo nl2br($setting['footer_email']); ?>
                                </span>
                            </div>
                        </div>
                        <!-- <ul class="footer-social">
                            <?php
                            foreach ($social as $row) {
                                if ($row['social_url'] != '') {
                                    echo '<li><a href="' . $row['social_url'] . '"><i class="' . $row['social_icon'] . '"></i></a></li>';
                                }
                            }
                            ?>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt_35">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="https://www.4icu.org/" target="_parent"><img src="https://www.4icu.org/i/unirank.org-120x60.png" alt="uniRank" width="80" height="60" border="0"></a>
                    <a href="https://majestic.com/" target="_parent"><img src="https://majestic.com/static/images/majestic/style-guide/majestic-svg.svg" alt="majestic" width=" 80" height="60" border="0" style="background-color: #1c3b51;"></a>
                    <a href="https://ahrefs.com/" target="_parent"><img src="public/images/ahrefs.png" alt="ahrefs" width="40" height="60" border="0"></a>
                    <a href="https://alexa.com/" target="_parent"><img src="https://www.alexa.com/images/alexa-logo.png" alt="alexa" width="120" border="0" style="background-color: #333;"></a>
                    <a href="https://www.webometrics.info/en" target="_parent"><img src="public/images/univer candara bold.png" alt="webometrics" width="120" height="60" border="0"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt_50 pb_50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <div class="footer-menu">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>terms-and-conditions"><?php echo TERMS_AND_CONDITIONS; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>privacy-policy"><?php echo PRIVACY_POLICY; ?></a></li>
                        </ul>
                    </div> -->
                    <div class="copy-text">
                        <p>
                            <?php echo $setting['footer_copyright']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-Area End-->

    <!--Scroll-Top-->
    <div class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--Scroll-Top-->


    <script src="<?php echo base_url(); ?>public/js/custom.js"></script>

    <script>
        $(function() {
            $('.select_lang').selectpicker();
        });
    </script>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    <script type="text/javascript">
        $('.example1').DataTable();
        // $('#example3').DataTable();
        $('.example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });

        $(document).ready(function() {
            $('#tableku').DataTable();
        });
    </script>

    <?php
    if ($this->session->flashdata('success')) :
        echo '
            <script>
            toastr.success(\'' . $this->session->flashdata('success') . '\');
            </script>
            ';
    endif;
    if ($this->session->flashdata('error')) :
        echo '
            <script>
            toastr.error(\'' . $this->session->flashdata('error') . '\');
            </script>
            ';
    endif;
    ?>

    </body>

    </html>