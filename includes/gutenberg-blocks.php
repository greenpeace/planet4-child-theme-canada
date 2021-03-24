<?php

/**
 * Whitelists Gutenberg Blocks
 *
 * @param $allowed_blocks
 * @param $post
 *
 * @return array
 */
function p4_child_theme_gpca_whitelist_blocks( $allowed_blocks, $post ) {
	array_push($allowed_blocks, 'cards-block/card', 'cards-block/category', 'cards-block/list');
	return $allowed_blocks;
}

add_filter( 'allowed_block_types', 'p4_child_theme_gpca_whitelist_blocks', 10, 2 );
