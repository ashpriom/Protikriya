
<div style="clear:both"></div>

<div class="footer-container">
	<div class='footer-wrap col-md-8'>
		<div class='footer-inner col-md-8'>
			<ul id="footer-link-list" class="clearfix">
				
			</ul>
			<p class="small"><?php $timezone  = +6; echo gmdate(" j/m/Y/ H:i ", time() + 3600*($timezone+date("I"))); ?> © <a href='<?php echo home_url(); ?>'><?php bloginfo('name'); ?></a>  </p>
		</div>
	</div>
</div>

</div> <!-- / col-md-8 maincontent toppad -->
</div> <!-- / main row -->
</div> <!-- / main wrapper -->

<div id="modal-content" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Error</h3>
            </div>
            <div class="modal-body">
                <p>
                    Your form entries are not valid. Please check and try again.
                </p>
            </div>
            <div class="modal-footer"> 
                <a href="#" class="btn" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

<!-- Google Tracker -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57965998-1', 'auto');
  ga('send', 'pageview');
</script>


</body>
</html>