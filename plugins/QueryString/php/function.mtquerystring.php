<?php
function smarty_function_mtquerystring ( $args, &$ctx ) {
    $app = $ctx->stash( 'bootstrapper' );
    return $app->query_string;
}
?>