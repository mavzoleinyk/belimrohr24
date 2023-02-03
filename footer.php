<footer class="footer">
                <div class="container">
                    <div class="container-header">
                        <div class="container-header__lists">
                            <a href="" class="container-header__link">Über uns</a>
                            <a href="/datenschutz/" class="container-header__link">DATENSCHUTZ</a>
                            <a href="/impressum/" class="container-header__link">impressum</a>
                            <a href="/kontakt/" class="container-header__link">Kontakt</a>
                        </div>
                        <div class="footer__bottom">
                            <div class="footer__bottom-column">
                                <div class="title">UNSERE ADRESSE:</div>
                                <div class="info">Landsberger Allee 214 10367 Berlin</div>
                                <div class="info">BELIMROHR24 - Rohrreinigung Preise und Kosten für Berlin und Umland</div>
                            </div>
                            <div class="footer__bottom-column">
                                <div class="title">ÖFFNUNGSZEITEN:</div>
                                <div class="info">Mo-So: 7.00 – 23:00</div>
                            </div>
                            <div class="footer__bottom-column">
                                <div class="title">EMAIL:</div>
                                <div class="info"><a href="mailto:belimrohr24@gmail.com">belimrohr24@gmail.com</a></div>
                            </div>
                            <div class="footer__bottom-column">
                                <div class="title">TELEFON:</div>
                                <div class="info"><a href="tel:+493052014211">+49 305 201-42-11</a></div>
                            </div>
                        </div>
                        <div class="footer__bottom">
                            <div class="footer__social">
                                <a href="https://www.facebook.com/profile.php?id=100083384472628" target="_blank">Facebook</a>
                                <a href="https://www.instagram.com/p/CYzt_CtMfSI/?igshid=YmMyMTA2M2Y=" target="_blank">Instagram</a>
                            </div>
                        </div>
                        <div class="copywrite">© 2018-2022 Belimrohr24. Alle Rechte vorbehalten.</div>
                    </div>
    
                </div>
            </footer>
        <!-- js -->
        <script src="/wp-content/themes/b24/js/app.min.js?var=1.0.3"></script> 
       
<script>
    document.addEventListener("DOMContentLoaded", function () {
	let sw_scr = document.querySelector('.swiper');
   // alert('dsfsdg');
	if (sw_scr) {
        //alert('dsfsdg');
		let new_script = document.createElement('script');
		new_script.src = "https://unpkg.com/swiper/swiper-bundle.min.js";
		new_script.classList.add("swiper-script-loaded");
		document.body.appendChild(new_script);
		new_script.onload = function () {
			const swiper = new Swiper('.swiper', {
				direction: "horizontal",
                loop: !0,
                slidesPerView: 1,
                spaceBetween: 20,
                breakpoints: { 560: { slidesPerView: 2, spaceBetween: 20 }, 968: { slidesPerView: 3, spaceBetween: 20 } },
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},

				loop: true,

				scrollbar: {
					el: '.swiper-scrollbar',
					draggable: true,
				},
			});
		}
	}
    
            const blicks = document.querySelectorAll(".blick");
            const op = [{
                x: [120, 220],
                y: [-50, 50]
            }, {
                x: [-50, 0],
                y: [-50, 150]
            }];
            const rnd = arr => {
                let [min, max] = arr;
                return Math.trunc(min + Math.random() * (max - min))
            }
            const pos = i => {
                let { x, y } = op[i];
                x = rnd(x);
                y = rnd(y);
                return { x, y }
            }
            const show = _ => blicks.forEach(el => {
                let { x, y } = pos(Math.random() * 2 | 0);
                let obj = {
                    left: `${x}px`,
                    top: `${y}px`
                }
                Object.assign(el.style, obj)
            })
            setInterval(show, 3000)
});
</script>
<?php wp_footer(); ?>
    </body>
</html>