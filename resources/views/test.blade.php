
<style>
    html,body {
        margin: 0;
        padding: 0;
    }

    * {
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
    }

    body {
        font-family: "Merriweather", serif;
        font-size: 16px;
        line-height: 1.5;
    }

    .hero {
        text-align: center;
        position: relative;
        height: auto;
        padding-bottom: 80px;
        background: #4f2f60 url("http://miguelquispe.com/pen/images/hero.jpg") center top no-repeat;
        background-size: cover;
        color: #fff;
        overflow: hidden;
    }
    .hero h1 {
        margin: 50px 0 20px;
        font-family: "Montserrat", sans-serif;
        font-size: 35px;
    }
    .hero h1 span {
        font: 700 60px/1 "Dancing Script", cursive;
        display: block;
    }
    .hero h2 {
        margin-left: auto;
        margin-right: auto;
        font-size: 1em;
        font-weight: 400;
        padding: 20px;
    }
    @media only screen and (min-width: 37.5em) {
        .hero {
            height: 40vh;
        }
        .hero h1 {
            font-size: 50px;
        }
        .hero h1 span {
            font-size: 76px;
        }
        .hero h2 {
            width: 76%;
            font-size: 18px;
        }
    }

    .wrapper {
        margin: 0 auto;
        width: 96%;
        max-width: 1120px;
    }

    .section {
        padding: 60px 0;
    }
    .section__title {
        font-size: 24px;
        color: #3b3b58;
        text-align: center;
        font-family: "Montserrat", sans-serif;
        margin: 14px 0;
    }
    .section__intro {
        display: block;
        text-align: center;
        margin: 0 5% 30px;
    }
    @media only screen and (min-width: 43.75em) {
        .section__intro {
            margin-left: 15%;
            margin-right: 15%;
        }
    }
    .section--cta {
        color: #454545;
        background: #f1f1f1;
    }

    .box {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -webkit-flex: 1 0 100%;
        -ms-flex: 1 0 100%;
        flex: 1 0 100%;
        margin-bottom: 20px;
        background: #f9f9f9;
    }
    .box__grid {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
    .box__title {
        font-family: "Montserrat", sans-serif;
    }
    .box__more {
        color: #ff4e5c;
    }
    .box__content {
        color: #454545;
        text-align: center;
        padding: 20px;
    }
    .box__content > i {
        color: #3b3b58;
    }
    .box__content:hover .box__more {
        color: #ff3545;
    }
    .box__content:hover .box__more i {
        padding-left: 4px;
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
    @media only screen and (min-width: 43.75em) {
        .box {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 30%;
            -ms-flex: 0 0 30%;
            flex: 0 0 30%;
        }
    }

    .btn {
        color: #fff;
        font-family: "Montserrat", sans-serif;
        text-align: center;
        display: block;
        margin: 0 auto;
        max-width: 300px;
        padding: 12px 18px;
        border-radius: 100px;
        background: #ff4e5c;
    }
    .btn:hover {
        background: #ff3545;
    }

    .footer {
        color: #fff;
        text-align: center;
        padding: 10px 0;
        background: #3b3b58;
    }
    .footer p {
        opacity: .65;
    }

</style>

<section class="hero">
    <h1><span>logo test</span>test</h1>
    <h2>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor.</h2>
</section>
<section class="section">
    <div class="wrapper">
        <h2 class="section__title">SOME TITLE</h2>
        <p class="section__intro">
            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor.


        </p>
        <div class="box__grid">
            <article class="box"><a href="#" class="box__content"><i class="fa fa-lightbulb-o fa-3x"></i>
                    <h3 class="box__title">Creative Idea</h3>
                    <p>Duis neque leo cursus ac libero ac imperdiet bibendum nisl mauris neque diam vulputate nem.</p><span class="box__more">Read more <i class="fa fa-arrow-right"></i></span></a></article>
            <article class="box"><a href="#" class="box__content"><i class="fa fa-code fa-3x"></i>
                    <h3 class="box__title">Creative Idea</h3>
                    <p>Duis neque leo cursus ac libero ac imperdiet bibendum nisl mauris neque diam vulputate nem.</p><span class="box__more">Read more <i class="fa fa-arrow-right"></i></span></a>
            </article>
            <article class="box"><a href="#" class="box__content"><i class="fa fa-mobile fa-3x"></i>
                    <h3 class="box__title">Creative Idea</h3>
                    <p>Duis neque leo cursus ac libero ac imperdiet bibendum nisl mauris neque diam vulputate nem.</p><span class="box__more">Read more <i class="fa fa-arrow-right"></i></span></a></article>
        </div>
    </div>
</section>
<div class="section section--cta">
    <div class="wrapper">
        <h2 class="section__title">SOME TITLE</h2>
        <p class="section__intro">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor.</p><a href="#" class="btn">TEXT BUTTON</a>
    </div>
</div>
<div class="footer">
    <p>&copy; 2016 copyright</p>
</div>