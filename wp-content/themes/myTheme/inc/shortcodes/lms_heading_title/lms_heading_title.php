<?php

// register the shortCode
// lms_heading_title : the name of the shortCode
// generate_shortcode : the name of the function
add_shortcode('lms_heading_title', 'generate_shortcode_lms_heading_title');

function generate_shortcode_lms_heading_title($atts, $content){

	extract(shortcode_atts(
					array(
						'title' => 'title',
						'content' => $content,
						'level' => '',
						
					), $atts));

	//printr($content);

    return '
	<div class="card h-100">
	<div class="card-body">
        <'.$level.'>'.$title.'</'.$level.'>
		<p class="card-text">
			'.$content.'
        </p>
		</p>
		<p class="text-muted">Reviews (24)</p>
	</div>
</div>
	';
}

// generate_vc : the name of the function to be executed in the action (vc_before_init)
add_action('vc_before_init', 'generate_vc_lms_heading_title');

function generate_vc_lms_heading_title(){
	vc_map( 
		array(
			"name" =>"Heading Title",
			"base" => "lms_heading_title",
			"class" => "",
			"category" => "Shortcodes",
		
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" =>"Title",
				"param_name" => "title",
				"value" => "",
				"description" => "the title of the product"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" =>"Description",
				"param_name" => "content",
				"value" => "",
				"description" => "the Description of the product"
			),
            array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" =>"level",
				"param_name" => "level",
				"value" => array(
                    "paragraph" => "p",
                    "Heading 1" => "h1",
                    "Heading 2" => "h2",
                    "Heading 3" => "h3",
                    "Heading 4" => "h4",
                    "Heading 5" => "h5",
                    "Heading 6" => "h6",
                ),
				"description" => "the level of the title Heading"
			),
			
			)
	   	)
	);
}

?>