<?php



add_action('z-wc-widget', 'wc_widget_template', 10); //wc widget at top navbar


add_action('znew-items', 'znews_before', 10);
add_action('znew-items', 'znews_head', 20);
add_action('znew-items', 'znews_before_body', 30);
add_action('znew-items', 'znews_body', 40);
add_action('znew-items', 'znews_after_body', 50);
add_action('znew-items', 'znews_after', 60);


