<?php
/**
 * This File use to test and show all Session Variables
 * Created by PhpStorm.
 * User: henry
 * Date: 3/10/18
 * Time: 22:50
 */

function out($var) {
    echo "
    <script>
    console.log('$var');
    </script>
    ";
}

function alert($var) {
    echo "
    <script>
    alert('$var');
    </script>
    ";
}

?>

<div class="jumbotron">
    <h1 class="display-4">Test</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>