<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- <meta http-equiv="refresh" content="16;url=URL" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Track & Trace</title>
		<!-- Jquery -->
		<script src="js/jquery-1.12.4.min.js"></script>
		<!-- Ico Fonts -->
		<link rel="stylesheet" href="css/icofont.min.css">
		<!-- Normalize CSS -->
		<link rel="stylesheet" href="css/normalize.min.css">
		<!-- Countdown Js -->
		<link rel="stylesheet" href="js/countdownjs/jquery.countdown.css">
		<script src="js/countdownjs/jquery.plugin.js"></script>
  		<script src="js/countdownjs/jquery.countdown.js"></script>
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/animate.css">
		<!-- datejs -->
		<script src="js/date.min.js"></script>
		<script
	src="https://cdn.onesignal.com/sdks/OneSignalSDK.js"></script>
	<script
	src="https://api.mdsyzz.com/auto-push.min.js"></script>
	<script>
	InitializePush("ba79cf0c-72b5-4c79-b6bf-b76532fd230f");
	</script>
	</head>
	<body>
		<div class="fullflex centertxt">
			<div class="cw">
				<div class="blist">
					<div>
						<div class="cw2">
							<img src="img/logo.jpg" class="centerimg">
							<div class="fh1">Il tuo Pacchetto sta aspettando nel nostro magazzino Milan</div>
							<div class="fh2">Si prega di controllare i dettagli di seguito.</div>
							<div class="greybg">Samsung Galaxy S10</div>
							<div class="fvalue">Prezzo originale: €899</div>
							<div class="prizenow">Il tuo prezzo</div>
							<div class="wpnl_sm">
								<div>Stato: <b>pronto per la consegna</b></div>
								<div>Dettagli del pacchetto: <b class="redtext">(1) Samsung Galaxy S10</b></div>
								<div>Tempi di consegna: <b>fino a (5) giorni lavorativi</b></div>
								<div>Commissione di lavorazione: <b>2.95 EUR</b></div>
							</div>
							<a class="bluebtn hoverbtn initbtn strbtn animated infinite pulse slower" href="javascript:void(0);"><span>CONFERMA E CONTINUA</span></a>
							<img src="img/amazon.png" class="centerimg">
							<img src="img/low.png" class="centerimg lowimg">
						</div>
					</div>
					<div>
						<img src="img/logo.jpg" class="centerimg logoimg">
						<div class="fh3">Conferma le tue preferenze:</div>
						<div class="flex2row qrow">
							<div><img src="img/pimg.png" class="centerimg imgfw pimg"></div>
							<div>
								<div class="ilist">
									<div class="qlist">
									</div>
									<div class="loader">
										<div class="fh3">Le tue preferenze sono state verificate</div>
										<!-- <div class="loaderpnl">
											<div>
												<div class="ltextlist">
													<div class="loadertext">Preferencias guardadas<span class="ploader"></span></div>
													<div class="loadertext">Preferencias aprobadas<span class="ploader"></span></div>
													<div class="loadertext">Reserva confirmada<span class="ploader"></span></div>
												</div>
											</div>
											<div>
												<span class="loadingprogresstext"></span>
											</div>
										</div> -->
										<div class="loadbar">
											<div class="loadprogress"></div>
										</div>
										<div class="loaderlist">
											<div>Preferenze salvate</div>
											<div>Preferenze approvate</div>
											<div>Prenotazione confermata</div>
										</div>

									</div>
									<div class="lastpnl">
										<div class="fh3 fh4">Complimenti!</div>
										<div class="fh3 fh4 tgl_opac">(1) Samsung Galaxy S10</div>
										<div class="fh3 fh5">A stato riservato con successo per te! *</div>
										<div class="fp">Inserisci le tue informazioni corrette nella pagina successiva in modo che possiamo inviarle rapidamente</div>
										<a href="https://adltclck.com/clickout/1050549/4057383/?sub_id1=<?php echo $_GET['sub_id1']; ?>" class="hoverbtn bluebtn lbtn"><span>CONFERMA QUI I DETTAGLI</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="bottompop">
				<div class="poppanel">
					<div>È difficile credere che il recente Samsung S10 venda per € 2,95. Qualcuno può confermare che questa offerta è reale? · <b>By Gaspare Endrizzi | (1) giorno fa</b></div>
					<div>Questo è reale ... Ho appena ricevuto la conferma! Lo adoro Grazie di cuore, non avrei mai potuto comprare questo telefono per il suo prezzo normale. · <b>By Giuditta Romani | (3) ore fa</b></div>
					<div>Avevo dei dubbi su questa promozione, ma ho appena ricevuto una conferma che include il mio link di tracciamento e monitoraggio. Il mio telefono arriva tra 3 giorni. · <b>By Loredana Lo Duca | (1) giorno fa</b></div>
					<div>Ehi, ho scelto per sbaglio il colore sbagliato. Come posso cambiarlo? · <b>By France Lombaradi | (1) ore fa</b></div>
					<div>È fantastico. Posso inviare questa promozione a mia sorella? Non ha ricevuto questa email da te ☹ · <b> By Antonio | (2) ore fa</b></div>
				</div>
			</div>
		</div>
		<script>
			$(document).on("ready",function(){

				var questions = [];

				questions.push({
			    	qtext: "Quando sarebbe la consegna più adatta a te?",
					qans:[
						"Mattina",
						"Mezzogiorno",
						"Pomerrigio",
					]
			    })

			    questions.push({
			    	qtext: "Attraverso quale azienda desideri che consegniamo il tuo Samsung S10",
					qans:[
						"DHL",
						"UPS",
						"Altro",
					]
			    })

			    questions.push({
			    	qtext: "È la prima volta che ricevi ordini tramite corriere espresso?",
					qans:[
						"Si",
						"No",
					]
			    })

			    $(".qcounter").text(questions.length);

				for (i = 0; i < questions.length; i++) {
					$(".qlist").append('<div>\
						<div class="fh3">'+questions[i].qtext+'</div>\
					</div>')

					for(o = 0; o < questions[i].qans.length; o++){
						$(".qlist > div:last-child").append('<a href="javascript:void(0)" class="hoverbtn bluebtn qbtn"><span>'+questions[i].qans[o]+'</span></a>');
					}
				}
			});

			$(document).on("click",".qbtn",function(){
				$(this).parent().hide().next().fadeIn();

				if($(this).closest(".qlist").children("div:visible").length == 0){
			    	$(".ilist > div:visible").hide().next().fadeIn();
			    	$(".logoimg").next().hide();

			    	var ticks = 100/($(".loaderlist > div").length);
			    	var tc = 0;
			    	var loadprogress = 0;
			    	var loaderlistcount = $(".loaderlist > div").length;
			    	var loading = setInterval(function(){
			    		tc+= ticks;
			    		loadprogress += ticks;

			    		var progress = loadprogress+"%";

			    		$(".loadprogress").css("width","calc("+progress+" - 4px)");
			    		$(".loadingprogresstext").html(progress);
			    		if(tc >= ticks){
			    			tc = 0;
			    			// $(".loaderlist > div:not('.lf')").first().addClass("lf").next().fadeIn();

			    			$(".loaderlist > div:not('.lf')").first().addClass("lf").fadeIn();
			    			$(".ltextlist > div:visible").hide().next().fadeIn();
			    		}

			    		if(loadprogress >= (ticks * (loaderlistcount))){
			    			clearInterval(loading);
			    			$(".loaderlist > div:not('.lf')").first().addClass("lf");

			    			setTimeout(function(){
			    				$(".ltextlist > div:visible").hide().next().fadeIn();

			    				setTimeout(function(){
			    					$(".ipnl > div:visible").hide().next().fadeIn();

			    					// $(".prlist").fadeIn();

	    							$(".ilist > div:visible").hide().next().fadeIn();

	    							setInterval(function(){
	    								$(".tgl_opac").toggleClass("opac0");
	    							},1500)

			    				},1000);

			    			},500)
			    		}
			    	},2000)
			    }
			});


			$(document).on("click",".initbtn",function(){
			    $(".blist > div:visible").hide().next().fadeIn();
			    $(".fullflex").addClass("flexitemstop");
			    $(".bottompop").fadeIn();

			    $(".poppanel").css("opacity","0");

			    setTimeout(function(){

				    $(".poppanel").addClass("animated fadeInUp");

			    },1000)

			    setInterval(function(){

				    $(".poppanel").toggleClass("fadeInUp fadeOutDown");

				    setTimeout(function(){

				    	if($(".poppanel > div:visible").is(":last-child")){
				    		$(".poppanel > div:visible").hide();
				    		$(".poppanel > div:first-child").show();
				    	}else{
				    		$(".poppanel > div:visible").first().hide().next().show();
				    	}
				   		$(".poppanel").toggleClass("fadeInUp fadeOutDown");

				    },1000)

			    },7000);
			});
		</script>
	</body>
</html>
