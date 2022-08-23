<?php
//added by Mabast to resolve reflectionException error
if (method_exists($class_name, "get_site_editor_type")) {
    $reflection = new \ReflectionClass( $class_name );
    $method = $reflection->getMethod( 'get_site_editor_type' );

    // It's own method, use it.
    if ( $class_name === $method->class ) {
        return static::get_site_editor_type();
    }
}
?>