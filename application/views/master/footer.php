<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--end container-->
</section>
            <!-- END CONTENT -->
</div>
</div>
    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <a class="grey-text text-lighten-4" href="<?= base_url() ?>http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank"></a> 
                <span class="right"> <a class="grey-text text-lighten-4" href="<?= base_url() ?>http://geekslabs.com/"></a></span>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->


<!-- ================================================
    Scripts
    ================================================ -->
       
    <!--materialize js-->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
       

<!-- jQuery Library -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


<!-- chartist -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/chartist-js/chartist.min.js"></script>

<!-- chartjs -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/chartjs/chart.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/chartjs/chart-script.js"></script>

<!-- sparkline -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/sparkline/sparkline-script.js"></script>

<!--jvectormap-->
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/jvectormap/vectormap-script.js"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins.js"></script>
<!-- Toast Notification -->
<script type="text/javascript">
    // Toast Notification
    setTimeout(() => {
        $('.select-dropdown').remove()
    }, 200)
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 3000);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5500);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 18000);
    });
</script>
</body>

</html>