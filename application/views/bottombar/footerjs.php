<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.downCount.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-filterable.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.accordion.js"></script>
    <script src="<?php echo base_url();?>assets/js/waypoints-min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.vticker.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.selectric.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.sidr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" />
    <script>function sticky_relocate() { var window_top = $(window).scrollTop(); var div_top = $('#sticky-anchor').offset().top; if (window_top > div_top) { $('#sticky').addClass('stick'); } else { $('#sticky').removeClass('stick'); } }
        $(function () { $(window).scroll(sticky_relocate); sticky_relocate(); });</script>
    <style>
        #sticky {
            width: 100%;
        }

            #sticky.stick {
                position: fixed;
                top: 0;
                z-index: 10000;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.18);
                background: #fff;
            }
    </style>
    
     <script>
        $(document).ready(function () {

            $('.mes').fadeIn('slow').delay(2500).fadeOut('slow');

            var prm = Sys.WebForms.PageRequestManager.getInstance();
            prm.add_endRequest(function () {
                $('.mes').fadeIn('slow').delay(2500).fadeOut('slow');
            });
        });
    </script>
</body>
</html>