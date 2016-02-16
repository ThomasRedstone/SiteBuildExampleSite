<?php
$config = [
    'tags' => ['SiteBuild', 'home'],
    'date' => '2015-12-10',
    'title' => 'SiteBuild - A Simple Static Site Generator',
    'class' => 'home'
];
$this->layout('templates::template', $config);
?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>SiteBuild</h1>
        <h3>- A Simple Static Site Generator written in PHP</h3>
        <div class="col-sm-6 business equal-top">
            <p>Making use of well supported components, and using PHP for templates, SiteBuild should support moving
            towards a standard dynamically generated PHP site in the future.</p>
        </div>
        <div class="col-sm-6 technical equal-top">
            <h4>Minimal Config</h4>
            <p>As you can see from the
                <a href="https://github.com/ThomasRedstone/SiteBuildExampleSite">repository behind this site</a></p>
        </div>
    </div>
</div>