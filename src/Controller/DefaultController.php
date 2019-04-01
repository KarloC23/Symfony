<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/", name="homepage")
     * @return Response
     *
     */
    public function homepageAction()
    {
        return new Response('<!DOCTYPE >
<html>
<style>
body {
    background-color: #ccf5f5;
}

#gameholder {
    width: 600px;
    margin-left: auto;
    margin-right: auto;
}

#title {
    width: 600px;
    height: 150px;
    background-image:url(https://picsum.photos/200/300/?random);

.penguin1 {
    width: 200px;
    height: 200px;
    float: left;
    background-image:url(https://picsum.photos/200/300/?random);
}
body {
    background-color: #ccf5f5;
}

#gameholder {
    width: 600px;
    margin-left: auto;
    margin-right: auto;
}

#title {
    width: 600px;
    height: 150px;
    background-image:url(https://picsum.photos/200/300/?random);
}

.penguin1 {
    width: 200px;
    height: 200px;
    float: left;
    background-image:url(https://picsum.photos/200/300/?random);
}
.penguin1:hover {
    background-image:url(\'\');
    cursor: pointer;
}
.penguin1:active {
    background-image:url(https://picsum.photos/200/300/?random);
}
</style>
<body>


    <div id="gameholder">
        <div id="title"></div>
        <div class="penguin1"></div>
        <div class="penguin2"></div>
        <div class="penguin3"></div>
        <div class="penguin4"></div>
        <div class="penguin5"></div>
        <div class="penguin6"></div>
        <div class="penguin7"></div>
        <div class="penguin8"></div>
        <div class="yeti"></div>
    </div>
 </body>
 </html>');
    }
    /**
     * @Route("/terms", name="term_of_service")
     * @return Response
     *
     */
    public function TermsofServiceAction()
    {
        return new Response('These are the terms...');
    }


}