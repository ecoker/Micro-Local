<?php
$groups = array(
	'3012804' => array(
		'description' => 'Boot up with the Bravery boot from Naturalizer.<br><ul><li>Faux leather upper in a lace up boot style with a round toe<br></li><li>Decorative metal buckles, straps and zipper<br></li><li>Side zip entry<br></li><li>Smooth lining, cushioning insole features N5 comfort elements<br></li><li>Non-slip outsole, 1 1/4 inch heel</li></ul>',
		'rating'   => array( 'number' => 4.2 )
	)
);

$products = array(
		'products' => array(
			array(
	        'id'       => 'EC0202224',
	        'group'    => '3012804',
	        'flags'    => array('sale', 'premium', 'new'),
	        'brand'    => 'BZees',
	        'style'    => 'Bravery',
	        'color'    => 'Burnished Brown',
	        'rating'   => array(
	            'number' => $groups['3012804']['rating']['number']
	        ),
	        'offer'    => array(
	            'percent' => 16
	        ),
	        'price'    => array(
	            'sale' => 99.99,
	            'previous' => 119.00,
	            'save' => 19.01
	        ),
	        'description' => $groups['3012804']['description']
	    ),
	    array(
	        'id'       => 'EC0202222',
	        'group'    => '3012804',
	        'flags'    => array('sale', 'premium', 'new'),
	        'brand'    => 'BZees',
	        'style'    => 'Bravery',
	        'color'    => 'Black Leather',
	        'rating'   => array(
	            'number' => $groups['3012804']['rating']['number']
	        ),
	        'offer'    => array(
	            'percent' => 16
	        ),
	        'price'    => array(
	            'sale' => 99.99,
	            'previous' => 119.00,
	            'save' => 19.01
	        ),
	        'description' => $groups['3012804']['description']
	    )
		)
);