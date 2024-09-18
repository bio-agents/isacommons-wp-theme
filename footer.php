<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
</div>
	</div><!-- #main -->
<div class="clearfix"></div>


<div id="footer" class="centralPanel">



    <div id="footer_nav_wrapper">

        <div class="col col_wide" align="center">

<img src="/wp-content/themes/isacommons-wp-theme/assets/img/isacommons-footer.svg" alt="Logo" style="width: 50%"/>
        </div>

        <div class="col col_med">
            <h3>Related Links</h3>
            <ul>
                <li><a href="http://www.isa-agents.org" target="_blank">ISA agents</a></li>
                <li><a href="http://www.biosharing.org" target="_blank">BioSharing</a></li>
                <li><a href="http://www.oerc.ox.ac.uk" target="_blank">Oxford e-Research Centre</a></li>
            </ul>
        </div>

        <div class="col col_med">
            <h3>Resources</h3>
            <ul>
                <li><a href="mailto:isaagents@googlegroups.com">Contact us</a></li>
                <li><?php wp_loginout(); ?></li>
                <li><?php wp_register('',''); ?></li>
            </ul>
        </div>


    </div>

    <div id="footer_fineprint" align="center">
        <br/>

        ©2014-Present ISA-Agents | Designed by <a href="http://www.antarctic-design.co.uk" target="_blank"> Antarctic Design</a>.
    </div>

</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/wp-content/themes/isacommons-wp-theme/assets/js/jquery.twitter.min.js"></script>

<script type="text/javascript">
    twitterFetcher.fetch('361827374599389184', 'twitter', 1, true, false, false);
</script>
</html>