
<footer class="footer-section">
<?php /* ?>
	<div class="footer-social">
		<div class="social-links">
			<a href="#"><i class="fa fa-pinterest"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
		</div>
	</div>
  <?php */ ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 offset-lg-3">
				<div class="row">
					<div class="col-md-6">
						<div class="footer-item">
							<ul>
                                <li>
                                    Rólunk
                                    <ul>
                                        <li class="mt-3"><a href="/fooldal">Főoldal</a></li>
                                        <li><a href="/szolgaltatasok">Szolgáltatások</a></li>
                                        <li><a href="/kapcsolat">Kapcsolat</a></li>
                                    </ul>
                                </li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="footer-item">
                            <ul>
                                <li>
                                    Elérhetőségek
                                    <ul>
                                        <li class="mt-3"><i class="fa fa-map-marker"></i><a href="#" aria-disabled="true">4281 Létavértes </a></li>
                                        <li><i class="fa fa-phone"></i><a href="tel:+36203164611">+36 20 316 4611</a></li>
                                        <li><i class="fa fa-envelope"></i><a href="mailto:info@tetoteriablakszerviz.hu">info@tetoteriablakszerviz.hu</a></li>
                                    </ul>
                                </li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="copyright mb-1"><small>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://tetoteriablakszerviz.hu"  style=" color: #727272;" target="_blank"> tetoteriablakszerviz.hu</a>
    <br/>
        Minden jog fenntartva!
    <br/>
        Design & solution by <a href="https://webron.hu" target="_blank"><span style="color: rgb(132,155,89)">Web</span><span style="color: rgb(188,237,72)">ron</span></a>
        </small></div>
</footer>

<style>
    .footer-item ul,
    .footer-item ul li a,
    .footer-item li {
        color: #FFFFFF;
    }
</style>

<!--====== Javascripts & Jquery ======-->
<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/isotope.pkgd.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.owl-filter.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/circle-progress.min.js"></script>
<script src="/js/main.js?v=<?php echo time() ?>"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script>

    $(function() {
        $("form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                name: {
                    required: "Kérem adja meg a nevét!",
                    minlength: "A név minimum 5 karakter legyen!"
                },
                message: {
                    required: "Kérem írja meg üzenetét!",
                    minlength: "Az üzenet minimum 5 karakter legyen!"
                },
                email: {
                    required: "Kérem adja meg email címét!",
                    email: "Ügyeljen a helyes e-mail formátumra!"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
</body>
</html>