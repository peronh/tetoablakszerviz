<script type="text/javascript">
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<section class="page-header-section set-bg" data-setbg="img/header-bg.jpg">
	<div class="container">
		<h1 class="header-title">Kapcsolat<span>.</span></h1>
	</div>
</section>

<section class="page-section pt100">
	<div class="container pb100">
		<div class="section-title pt-5">
			<h1>Írjon nekünk!</h1>
		</div>
		<div class="row">
			<div class="col-lg-3 contact-info mb-5 mb-lg-0">
				<p><i class="fa fa-user"></i>Zolnai Lajos egyéni vállalkozó</p>
				<p><i class="fa fa-map-marker"></i>4030 Debrecen </p>
				<p><i class="fa fa-phone"></i><a href="tel:+36203164611">+36 20 316 4611</a></p>
				<p><i class="fa fa-envelope"></i><a href="mailto:info@tetoteriablakszerviz.hu">info@tetoteriablakszerviz.hu</a></p>
			</div>
			<div class="col-lg-9">
				<?php include 'mailgun.php';?>
				<?php if(!empty($statusMsg)){ ?>
                    <div class="alert alert-<?php echo $status; ?> alert-dismissible fade show status-msg" role="alert">
						<?php echo $statusMsg; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
				<?php } ?>
				<form class="contact-form" action="" method="post" enctype="multipart/form-data">
					<input type="text" id="name" name="name" placeholder="Kérem adja meg a nevét!">
					<input type="text" id="email" name="email" placeholder="Kérem adja meg az email címét!">
					<textarea id="message" name="message" placeholder="Üzenet"></textarea>
                    <br/>
					<button type="submit" class="site-btn sb-dark"  id="sendmail" name="sendmail" onclick="if($(this).attr('disabled')) return false;">Küldés</button>
				</form>
			</div>
		</div>
	</div>
</section>
<style>
    a {
        color: #727272;
    }
    i {
        width: 20px;
    }
    a:hover, i {
        color: #EA462F;
    }
</style>


