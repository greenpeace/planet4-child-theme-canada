<?php

add_action('wp_enqueue_scripts', 'enqueue_child_styles', 99);
add_action('wp_head', 'include_fundraiseup_script');

function enqueue_child_styles() {
	$css_creation = filectime(get_stylesheet_directory() . '/style.css');
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', [], $css_creation);
}

function include_fundraiseup_script() {
?>
<!-- Begin Fundraise Up -->
<script>(function(w,d,s,n,a){if(!w[n]){var l='call,catch,on,once,set,then,track'
.split(','),i,o=function(n){return'function'==typeof n?o.l.push([arguments])&&o
:function(){return o.l.push([n,arguments])&&o}},t=d.getElementsByTagName(s)[0],
j=d.createElement(s);j.async=!0;j.src='https://cdn.fundraiseup.com/widget/'+a;
t.parentNode.insertBefore(j,t);o.s=Date.now();o.v=4;o.h=w.location.href;o.l=[];
for(i=0;i<7;i++)o[l[i]]=o(l[i]);w[n]=o}
})(window,document,'script','FundraiseUp','AVGLZKMV');</script>
<!-- End Fundraise Up -->
<?php
}
