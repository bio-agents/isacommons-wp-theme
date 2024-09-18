<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content" style="width:100%">
		<div id="content" role="main" >



                            <div class="name" style="font-weight:bolder; font-size: 1.3em" align="center">
                                <a href="<?php echo get_post_meta( get_the_ID(), 'project_info_project_url', true ) ?>" target="_blank" style="font-size: 1.7em; font-weight: lighter; color: #4FBA6F"><?php echo the_title() ?>
                                </a><br/><br/>

                                <?php

$str .= '<div class="institute" style="font-size: .7em; font-weight: bolder; color: #4FBA6F"><a href="' . get_post_meta( get_the_ID(), 'project_info_institution_url', true ) . '" target="_blank">' . get_post_meta( get_the_ID(), 'project_info_institution', true ) . ', ' . get_post_meta( get_the_ID(), 'project_info_country', true ) . '</a></div><br/><br/>';

$str .= '<div class="tags" >';
$tags = preg_split( "/[;,]+/", get_post_meta( get_the_ID(), 'project_info_dataset_types', true ) );

foreach ( $tags as $key => $val ) {
    $str .= '<span class="tag"><i class="fa fa-tag"></i> ' . $val . '</span>';
}

$str .= '</div>';

echo $str;
?>

                                </div>

<div class="clearfix"></div>
                            <div class="description">

                            <?php echo $post->post_content ?>

                            </div>


                    </div>

             </div>

</div>


               <div class="cf"></div>
               <br/><br/>
               <?php edit_post_link( __( 'Edit Project', 'projects' ), '<span class="edit-link">', '</span>' ); ?>
               <div class="cf"></div>
               <br/><br/>


		</div><!-- #content -->
	</div><!-- #primary -->


<style>
    .person-detail-image {
        width: 150px;
        height: 150px;

    }

    .contact-details a {
        color: #414241;
    }
</style>
<?php get_footer(); ?>