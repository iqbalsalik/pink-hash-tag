
        <!--  Start footer  -->
        <footer class="tc-footer-st1">
            <div class="container">
                <div class="foot-suscribe text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <a href="#" class="foot-logo th-50 mb-20">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                            <p class="fsz-16 px-lg-5 mx-lg-5"> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vel metus sit amet dolor finibus convallis. </p>
                            <div class="from-group">
                                <input type="text" class="form-control" placeholder="Enter your email address...">
                                <a href="#" class="butn bg-red1 text-white rounded-pill size-1"> <span> Subscribe Now + </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="links-group">
                                <h6 class="fsz-20 mb-30 mt-5 mt-lg-0"> Social </h6>
                                <ul class="links">
                                    <li> <a href="#"> Facebook </a> </li>
                                    <li> <a href="#"> Twitter </a> </li>
                                    <li> <a href="#"> Instagram </a> </li>
                                    <li> <a href="#"> Pinterest </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="links-group">
                                <h6 class="fsz-20 mb-30 mt-5 mt-lg-0"> More Service </h6>
                                <ul class="links">
                                    <li> <a href="#"> About us </a> </li>
                                    <li> <a href="#"> Case Studies </a> </li>
                                    <li> <a href="#"> Privacy Policy </a> </li>
                                    <li> <a href="#"> Contact us </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="links-group">
                                <h6 class="fsz-20 mb-30 mt-5 mt-lg-0"> Working Hours </h6>
                                <ul class="links links-m0">
                                    <li> <a href="#"> SUNDAY TO TUESDAY </a> </li>
                                    <li> <a href="#" class="mb-30"> 7.00am – 6.00pm </a> </li>
                                    <li> <a href="#"> FRIDAY TO SATURDAY </a> </li>
                                    <li> <a href="#"> 8.00am – 6.00pm </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="links-group">
                                <h6 class="fsz-20 mb-30 mt-5 mt-lg-0"> Contact </h6>
                                <ul class="links links-m0">
                                    <li> <a href="#" class="mb-30"> 785 15h Street - Sydney Harbor <br> Bridge of Sydney, #Australia. </a> </li>
                                    <li> <a href="#"> contact@resfolio.com </a> </li>
                                    <li> <a href="#"> +444 3322 111 00 </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="foot">
                    <p> <a href="#" class="text-white"> ThemesCamp </a>© 2024. All Rights Reserved. </p>
                </div>
            </div>
        </footer>
        <!--  End footer  -->


    </div>


    <!--  Start to top button  -->
    <!-- <a href="#" class="to_top" id="to_top">
        <i class="fal fa-angle-up"></i>
    </a> -->
    <!--  End to top button  -->

    <!--  request  -->
    <script src="../common/assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="../common/assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="../common/assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="../common/assets/js/lib/wow.min.js"></script>
    <script src="../common/assets/js/lib/jquery.fancybox.js"></script>
    <script src="../common/assets/js/lib/lity.js"></script>
    <script src="../common/assets/js/lib/swiper8-bundle.min.js"></script>
    <script src="../common/assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="../common/assets/js/lib/jquery.counterup.js"></script>
    <script src="../common/assets/js/lib/smoke.js"></script>
    <script src="../common/assets/js/lib/parallaxie.js"></script>
    <!-- === Gsap === -->
    <script src="../common/assets/js/gsap_lib/gsap.min.js"></script>
    <script src="../common/assets/js/gsap_lib/ScrollSmoother.min.js"></script>
    <script src="../common/assets/js/gsap_lib/ScrollTrigger.min.js"></script>
    <script src="../common/assets/js/gsap_lib/SplitText.min.js"></script>
    <!-- === common === -->
    <script src="../common/assets/js/common_js.js"></script>

    <!-- ===== home scripts ===== -->
    <script src="assets/js/home_1_scripts.js">

var selector = '.nav li';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});




    </script>
    <script>
        $(window).bind('load', function () {
    const raf = function (entry) {
        window.requestAnimationFrame(entry);
    };
    const random = function (min, max) {
        max = max + 1;
        return Math.floor(Math.random() * (max - min) + min);
    }

    var container = $('#container'),
        cContainer = $('#c-container'),
        c = document.getElementById('c'),
        cx = c.getContext('2d'),
        Particle,
        canvas,
        particleIndex = 0,
        particles = {},
        particleNum = 3,
        w,
        h,
        cx,
        mouseX,
        mouseXOld,
        mouseY,
        mouseYOld,
        color1 = 'rgba(4,13,44,1)',
        color2 = 'rgba(76,36,157,1)',
        particlesLoaded = false;

    TweenMax.set(container, {
        opacity: 1
    });

    c.width = $('#c').outerWidth();
    c.height = $('#c').outerHeight();

    w = c.width;
    h = c.height;

    //INITIAL CANVAS DRAW
    cx.fillStyle = 'rgba(0,0,0,1)';
    cx.fillRect(0, 0, c.width, c.height);

    Particle = function () {
        this.w = random(10, 100) * 0.05;
        this.h = this.w;
        this.initialR = this.w / 2;
        this.r = this.w / 2;
        this.rMult = this.r * 0.2;
        this.x = (w / 2) - (this.w / 2);
        this.y = (h / 2) - (this.h / 2);
        this.vxInitial = 5;
        this.vyInitial = this.vxInitial;
        this.vx = this.vxInitial;
        this.vy = this.vyInitial;
        this.gravity = 0.95;
        this.hue = random(0, 360);
        this.saturation = 100;
        this.light = 50;
        this.lightInc = -0.1;
        this.clusterLight = 50;
        this.opacity = 1;
        this.opacityChange = -0.005;
        this.opacityEnd = 0;
        this.opacityReversed = false;

        this.lessThanX = false;
        this.moreThanX = false;
        this.lessThanY = false;
        this.moreThanY = false;

        this.counter = 0;
        this.counterInc = random(1, 10) * 0.0001;
        this.counterRate = random(-20, 20);

        this.reachedXDestination = false;
        this.reachedYDestination = false;

        this.multiplierX = random(-50, 50);
        this.multiplierY = random(-50, 50);

        this.ran = random(0, 10) * 0.002;

        this.placeInCluster = (random(1, 2) === 1);
        particles[particleIndex] = this;
        this.id = particleIndex;
        particleIndex++;
    }

    Particle.prototype.draw = function () {
        if (this.light > this.lightLimit) {
            this.light += this.lightInc;
        }
        this.counter += Math.sin(this.counterInc);
        this.r += this.rMult;
        if (this.r > this.w * 5) {
            this.rMult *= -1;
        }
        if (this.r < this.initialR) {
            this.rMult *= -1;
        }
        if (mouseX != null) {
            this.x += ((mouseX - w / 2) * Math.sin(this.multiplierX)) * Math.sin(this.ran) / 2 * (this.counter * 100);
            this.y += ((mouseY - h / 2) * Math.sin(this.multiplierY)) * Math.sin(this.ran) / 2 * (this.counter * 100);
        } else {
            this.x += ((w * 0.05) * Math.sin(this.multiplierX)) * Math.sin(this.ran) / 2 * (this.counter * 100);
            this.y += ((h * 0.05) * Math.sin(this.multiplierY)) * Math.sin(this.ran) / 2 * (this.counter * 100);
        }
        this.vx *= this.gravity;
        this.opacity += this.opacityChange;
        if ((this.opacity < this.opacityEnd)) {
            delete particles[this.id];
        }
        cx.beginPath();
        cx.fillStyle = `hsla(${this.hue},${this.saturation}%,${this.light}%,${this.opacity})`;
        cx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        cx.fill();
    }

    function canvasFunction() {

        cx.globalCompositeOperation = 'source-over';
        cx.fillStyle = 'rgba(0,0,0,0.03)';
        cx.fillRect(0, 0, w, h);
        if (!particlesLoaded) {
            //                particlesLoaded = true;
            for (var i = 0; i < particleNum; i++) {
                new Particle();
            }
        }
        //        cx.globalCompositeOperation = 'lighter';
        for (var i in particles) {
            particles[i].draw();
        }
        raf(canvasFunction);
    }

    raf(canvasFunction);

    $(window).resize(function initial() {

        c.width = $('#c').outerWidth();
        c.height = $('#c').outerHeight();

        w = c.width;
        h = c.height;

        return initial;
    }());

    function cursorEvents(e) {
        mouseXOld = mouseX;
        mouseYOld = mouseY;
        mouseX = e.clientX;
        mouseY = e.clientY;
    }

    window.addEventListener('mousemove', cursorEvents, false);
});
    </script>

</body>


<!-- Mirrored from uithemez.com/i/restfolio/home1_restaurant_original/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2024 10:14:28 GMT -->
</html>