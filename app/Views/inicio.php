<div id="app">

    <img class="thumbnail" src="https://simpleparallax.b-cdn.net/images/paint_1.jpg" alt="image">

    <section class="hero is-success is-fullheight has-bg-img">
        Hello
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    Title
                </h1>
                <h2 class="subtitle">
                    Subtitle
                </h2>
            </div>
        </div>
    </section>


</div>

<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

<script>
    const simpleParallax = require('simple-parallax-js');
    var image = document.getElementsByClassName('thumbnail');
    new simpleParallax(image, {
        overflow: true
    });

    new WOW().init();
    const app = new Vue({
        el: '#app',
        data: {

        }
    })
</script>