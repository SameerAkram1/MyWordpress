<?php

// Activation Hook
function my_plugin_activate() {
    // Code to execute on activation
}
register_activation_hook(__FILE__, 'my_plugin_activate');

// Deactivation Hook
function my_plugin_deactivate() {
    // Code to execute on deactivation
}
register_deactivation_hook(__FILE__, 'my_plugin_deactivate');
