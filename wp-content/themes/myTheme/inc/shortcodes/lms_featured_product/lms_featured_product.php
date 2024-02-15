<?php

// register the shortCode
// lms_featured_product : the name of the shortCode
// generate_shortcode : the name of the function
add_shortcode('lms_featured_product', 'generate_shortcode');

function generate_shortcode($atts){

	extract(shortcode_atts(
					array(
						'title' => 'title',
						'description' => 'description',
						'image' => '',
						'rating' => '',
						'color_star' => '',
					), $atts));

	$img_link = wp_get_attachment_image_src($image);
	
    $stars_to_show = '';
    for ($i=1; $i <= $rating; $i++) { 
        $stars_to_show .= '<i class="text-warning fa fa-star" style="color: '.$color_star.' !important;"></i>';
    }


	printr($rating);

    return '
	<div class="card h-100">
	<a href="shop-single.html">
		<img src="'. $img_link[0] .'" class="card-img-top" alt="...">
	</a>
	<div class="card-body">
		<ul class="list-unstyled d-flex justify-content-between">
			<li>
				'.$stars_to_show.'
			</li>
			<li class="text-muted text-right">$240.00</li>
		</ul>
		<a href="shop-single.html" class="h2 text-decoration-none text-dark">'.$title.'</a>
		<p class="card-text">
			'.$description.'
        </p>
		</p>
		<p class="text-muted">Reviews (24)</p>
	</div>
</div>
	';
}

// generate_vc : the name of the function to be executed in the action (vc_before_init)
add_action('vc_before_init', 'generate_vc');

function generate_vc(){
	vc_map( 
		array(
			"name" =>"Featured Products",
			"base" => "lms_featured_product",
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
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" =>"Description",
				"param_name" => "description",
				"value" => "",
				"description" => "the Description of the product"
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" =>"Image",
				"param_name" => "image",
				"value" => "",
				"description" => "the Image of the product"
			),
            array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" =>"Rating",
				"param_name" => "rating",
				"value" => array(
                    "5 Star" => 5,
                    "4 Star" => 4,
                    "3 Star" => 3,
                    "2 Star" => 2,
                    "1 Star" => 1,
                    "N0 Star" => '',
                ),
				"description" => "the rating of the product"
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" =>"Stars Color",
				"param_name" => "color_star",
				"value" => "#ede861",
				"description" => "the Color of the product Stars",
                'dependency' => array(
                    'element' => 'rating',
                    'not_empty' => true
                )
			),
			)
	   	)
	);
}

?>