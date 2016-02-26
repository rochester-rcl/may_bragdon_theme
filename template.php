<?php

/**
 * Variables preprocess function for the "page" theming hook.
 */
function may_bragdon_theme_preprocess_page(&$vars) {

    
    $current_path = current_path();
    $url_parts = explode( '/', $current_path);
    
    $last_part = null;
    if(sizeof($url_parts) > 0 ){
        $last_part = $url_parts[sizeof($url_parts) - 1];
    }
    
    // Do we have a node?
    if (isset($vars['node'])) {
        // Ref suggestions.
        $suggests = &$vars['theme_hook_suggestions'];

        // Get path arguments.
        $args = arg();
        // Remove first argument of "node".
        unset($args[0]);

        // Set type.
        $type = "page__type_{$vars['node']->type}";

        // Bring it all together.
        $suggests = array_merge(
                $suggests, array($type), theme_get_suggestions($args, $type)
        );

        // if the url is: 'http://domain.com/node/123/edit'
        // and node type is 'blog'..
        //
    // This will be the suggestions:
        //
    // - page__node
        // - page__node__%
        // - page__node__123
        // - page__node__edit
        // - page__type_blog
        // - page__type_blog__%
        // - page__type_blog__123
        // - page__type_blog__edit
        //
    // Which connects to these templates:
        //
    // - page--node.tpl.php
        // - page--node--%.tpl.php
        // - page--node--123.tpl.php
        // - page--node--edit.tpl.php
        // - page--type-blog.tpl.php
        // - page--type-blog--%.tpl.php
        // - page--type-blog--123.tpl.php
        // - page--type-blog--edit.tpl.php
        //
    // Latter items take precedence.
    } else {
       
        if($last_part == 'pages') {
           
            // Ref suggestions.
            $suggests = &$vars['theme_hook_suggestions'];

            // Get path arguments.
            $args = arg();
            // Remove first argument of "node".
            unset($args[0]);

            // Set type.
            $type = "page__type_pages";

            // Bring it all together.
            $suggests = array_merge(
                    $suggests, array($type), theme_get_suggestions($args, $type)
            );
        } else if (isset($vars['page']['content']['system_main']['islandora_book'])) {
            
            // Ref suggestions.
            $suggests = &$vars['theme_hook_suggestions'];

            // Get path arguments.
            $args = arg();
            // Remove first argument of "node".
            unset($args[0]);

            // Set type.
            $type = "page__type_diary";

            // Bring it all together.
            $suggests = array_merge(
                    $suggests, array($type), theme_get_suggestions($args, $type)
            ); 
            
        } else if (isset($vars['page']['sidebar_second']['islandora_compound_object_compound_navigation'])) {
            
            // Ref suggestions.
            $suggests = &$vars['theme_hook_suggestions'];

            // Get path arguments.
            $args = arg();
            // Remove first argument of "node".
            unset($args[0]);

            // Set type.
            $type = "page__type_inclusion";

            // Bring it all together.
            $suggests = array_merge(
                    $suggests, array($type), theme_get_suggestions($args, $type)
            );
        } else {
            //dpm("don't know");
        }
    }
}
