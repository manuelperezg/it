<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//echo "$lang";
// switch ($lang){
//     case "es":
//         //echo "PAGE ES";
//         include("es/index_es.php");//puede ser header(Location...) u otra cosa
//         break;
//     case "fr":
//         //echo "PAGE FR";
//         include("fr/index_fr.php");//puede ser header(Location...) u otra cosa
//         break;
//     case "it":
//         //echo "PAGE IT";
//         include("it/index_it.php");
//         break;
//     case "en":
//         //echo "PAGE EN";
//         include("en/index_en.php");
//         break;        
//     default:
//         //echo "PAGE EN - Configuración por defecto";
//         include("index.php");//incluye página en inglés, o en otro idioma, si se detecta otro tipo de lengua no indicada en los case
//         break;
// 	}
?>

<!DOCTYPE html>
<html lang='ES'>
<title> ITTEC | Tecnología Inteligente</title>

<link href='index.html' rel='canonical'>
<meta content='ITTEC.' name='DC.Title' xml:lang='ES'>
<meta content='Tecnología al alcance de tu mano.' name='DC.Subject' xml:lang='ES'>
<meta content='Tecnología Inteligente.' name='DC.Description' xml:lang='ES'>
<meta content='ES' name='DC.Language' scheme='dcterms:RFC1766'>
<meta content='Ittec Software' name='DC.Contributor'>
<meta content='text/html' name='DC.Type'>
<meta content='https://ittec.mx/' name='DC.Identifier'>
<meta content='Copyright 2018, Ittec Software, Inc.  All rights reserved.' name='DC.Rights'>
<meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
<meta content='Tecnología Inteligente.' property='og:title'>
<meta content='Tecnología Inteligente.' name='twitter:title'>
<meta content='website' property='og:type'>
<meta content='https://ittec.mx/' property='og:url'>
<meta content='Otorgamos soluciones para emisión y recepción de comprobantes fiscales digitales de uno hasta miles mensuales con posibilidades de integración con sus sistemas de cómputo actuales.' property='og:description'>
<link href='index.html' hreflang='es' rel='alternate'>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1' id='viewport' name='viewport'>

<!-- Favicon de titulo pendiente de cambiar -->
<link href='img/icono_h2.png' rel='shortcut icon' type='image/vnd.microsoft.icon'>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" media="all" href="css/principal.css" type="text/css" />
</head>
<body class='preload' id='home'>
	<div id='viewport'>
		<div class='container-main'>

			<!-- aqui va el header -->
			<script>
			    $(document).ready(function () {
			      $('#header-p').load('header.html');
			    });
			  </script>
			  <header id="header-p">
			  	
			  </header>
			<div id='hero'>
				<div class='container'>
					<div class='text'>
						<h1 class='h1'>Tecnología Inteligente</h1>
						<h2 class='h2 white antialiased'>
							Desde corporativos multinacionales hasta pequeñas empresas, nuestras  
							<a data-hover='soluciones' href='#'>soluciones</a> transforman la operación de las empresas.
							<a data-hover='Desarrollamos' href='#'>Desarrollamos</a> aplicaciones de TI con 
							<a data-hover='visión&nbsp;de&nbsp;futuro' href='#'>visión de futuro</a>
							<!-- <a data-hover=' de' href='#'> de</a> -->
							<!-- <a data-hover=' futuro' href='#'> futuro</a>   que siempre funcionan -->
							
							<!-- <a data-hover='plataformas' href='platform.html'>plataformas</a> y  -->
							<!-- <a data-hover='herramientas' href='products.html'>herramientas</a>  -->
							<!-- que colaboran en el desarrollo tecnológico -->
							<!-- <a data-hover='methodology' href='labs/methodology.html'>methodology</a> -->
							<!-- help you deliver exceptional user experiences. -->
						</h2>
						<p class='sizesixteen uppercase'>
							<a href='about.html'>
								Sobre nosotros
								<i class='fa fa-angle-right'></i>
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class='bg-white'>
				<div class='container'>
					<div id='merrill-featured'>
						<div class='videocontain'>
							<div class='videooverlay'>
								<div class='text'>
									<div class='h2 white bold antialiased'>
										Soler & Palau Ventilation Group es una de las empresas más grandes a nivel mundial lider en ventilación.
									</div>
									<p class='sizesixteen uppercase'>
										<a href='customers/merrill.html'>
											Leer ¿Por qué?
											<i class='fa fa-angle-right'></i>
										</a>
									</p>
								</div>
							</div>
							<div class='videowrap'>

								<!-- <iframe allowfullscreen='true' frameBorder='0' mozallowfullscreen='true' src='http://www.solerpalau.mx/video/video_converted.mp4' webkitallowfullscreen='true' autoplay="1" loop="1"></iframe> -->

								<video src="http://www.solerpalau.mx/video/video_converted.mp4" loop="1" autoplay="1" style="margin:auto; width:100%; max-height:500px"></video>

								<!-- http://www.solerpalau.mx/video/video_converted.mp4 -->
							</div>
						</div>
					</div>
				</div>
				<div id='powering'>
					<div class='container'>
						<div class='fifty'>
							<div class='h1'>La forma en que el futuro se construye.</div>
						</div>
						<div class='fifty'>
							<div class='inner'>
								<div class='h3 antialiased'>Otorgamos soluciones para emisión y recepción de comprobantes fiscales digitales de uno hasta miles mensuales con posibilidades de integración con sus sistemas de cómputo actuales. <br>Aplicaciones a la medida, hospedadas en nuestra infraestructura y administradas 24/7 por nuestro equipo de ingenieros para garantizar la máxima estabilidad del sistema. </div>
							</div>
						</div>
					</div>
				</div>
				<div id='customers'>
					<div class='container'>
						<div id='columns'>
							<div class='fiftywide'>
								<a class='customer' href='customers/orange.html' id='orange' style='background-image: url("https://d1fto35gcfffzn.cloudfront.net/images/home/index/2018/bg-orange-home.jpg")'>
									<div class='overlay'></div>
									<div class='logotextcontainer'>
										<img src='https://d1fto35gcfffzn.cloudfront.net/images/customers/orange/logo-orange-white.svg'>
										<div class='h2'>Embracing customer-led product development.</div>
										<div class='h3 antialiased'>Orange France is transforming software development and defying the naysayers.</div>
									</div>
								</a>
								<a class='customer' href='dish.html' id='dish' style='background-image: url("https://d1fto35gcfffzn.cloudfront.net/images/home/index/photo-dish-full.jpg")'>
									<div class='overlay'></div>
									<div class='logotextcontainer'>
										<svg class='dishlogo' viewbox='0 0 123.79 55.12' xmlns='http://www.w3.org/2000/svg'>
											<path class='a' d='M62.12,27.54c0,6.09,4.46,9.1,9.42,11.91L76,42c2.41,1.36,3.49,2.9,3.49,5,0,2.76-2,4.47-5.31,4.47-6,0-7.86-5-8.84-9.93l-.15-.77h-3V54.55h2.29l.28-.32c.53-.6.53-.6,1-.6a14.22,14.22,0,0,1,3.35.55,24.23,24.23,0,0,0,5.5.83c5,0,12-3.35,12-10.81,0-5.2-3.12-7.53-6.87-9.83l-8.26-4.9a5.11,5.11,0,0,1-2.82-4.61c0-1.61,1.29-4,4.85-4,2.65,0,5.89,1,7.54,8.65l.16.75h2.9l-.36-12.38H81.54l-.28.48a.65.65,0,0,1-.55.36c-.12,0-.77-.22-1.16-.34a19.88,19.88,0,0,0-5.94-1.19c-6.66,0-11.5,4.35-11.5,10.36'></path>
											<path class='a' d='M8.47,34.49c0-9.79,4.59-13.26,8.52-13.26a7,7,0,0,1,6.91,7.15v17c-.53,2.19-3,3.78-5.85,3.78-4.42,0-9.59-3.84-9.59-14.64M30.82.1l-.25.09h0C29.2.68,23.8,2.45,19.44,3.52l-.73.18v3l1.05-.11c2.44-.25,3.37.07,3.72.38s.42,1.1.42,2.26V19.46a11.57,11.57,0,0,0-7.14-2.28,15.69,15.69,0,0,0-11.84,6A21.78,21.78,0,0,0,0,36.93C0,54.5,13.33,55,14.85,55A12.43,12.43,0,0,0,23.9,51.6v2.71l1.1.82,12.34-4.37V47.83l-1,.08c-2.4.19-3.32-.16-3.67-.48s-.42-.91-.42-1.93V.59L30.91.07Z'></path>
											<path class='a' d='M123,51.21c-3.36-.6-3.8-.67-3.8-5.56V30.28c0-8.69-3.48-13.11-10.35-13.11a13.78,13.78,0,0,0-10.27,4.75V.78L97.33,0l-.12,0L96.88.2C95.27.86,89,2.73,86.15,3.53l-.7.19v3l1.06-.12a15.29,15.29,0,0,1,1.81-.07,2.08,2.08,0,0,1,1.5.44,3.29,3.29,0,0,1,.45,2.23V45.49c0,4.88-.3,5.31-4,5.7l-.86.09v3h17.71v-3l-.16,0c-3.42-.36-4.34-.46-4.34-5.63V27.46c.43-.53,3.57-4.24,7.44-4.24,3.36,0,4.85,2.27,4.85,7.38V45.65c0,4.74-.82,5.28-4.31,5.55h-.07v3h17.28v-2.9l-.79-.14'></path>
											<path class='a' d='M49.63,53.54c5.84,0,8.79-3.38,10.87-7.38.14-.26,0-.45-.24-.33a25.22,25.22,0,0,1-10.63,2.61A25.27,25.27,0,0,1,39,45.83c-.26-.12-.37.06-.23.33,2.08,4,5,7.38,10.87,7.38'></path>
											<path class='a' d='M41.08,36.46c1.61,3.12,3.92,5.85,8.54,5.85s6.93-2.73,8.54-5.85c.11-.21,0-.37-.21-.27a19.18,19.18,0,0,1-16.67,0c-.22-.1-.31.06-.21.27'></path>
											<path class='a' d='M43.23,27.57c1.18,2.32,2.91,4.44,6.4,4.44s5.22-2.12,6.4-4.44c.08-.16,0-.29-.17-.21a16,16,0,0,1-12.44,0c-.19-.08-.26.05-.18.21'></path>
											<path class='a' d='M49.63,22.35c2.43,0,3.61-1.56,4.39-3.12.06-.12,0-.23-.15-.17a13.92,13.92,0,0,1-8.48,0c-.16-.06-.21,0-.15.17.78,1.56,2,3.12,4.39,3.12'></path>
											<path class='a' d='M42.58,6.66a6.65,6.65,0,1,1,6.65,6.66,6.66,6.66,0,0,1-6.65-6.66'></path>
										</svg>

										<div class='h2'>Creating a culture of innovation.</div>
										<div class='h3 antialiased'>DISH learned Agile methods to quickly launch new applications&mdash;and attracted top talent by revolutionizing its software development.</div>
									</div>
								</a>
								<a class='customer' href='customers/corelogic.html' id='corelogic' style='background-image: url("https://d1fto35gcfffzn.cloudfront.net/images/home/index/2018/corelogic-still.jpg")'>
									<iframe allowfullscreen='true' frameBorder='0' mozallowfullscreen='true' src='https://player.vimeo.com/video/254784004?color=01786e&amp;title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;background=1' webkitallowfullscreen='true'></iframe>
									<div class='overlay'></div>
									<div class='logotextcontainer'>
										<svg class='corelogiclogo' viewbox='0 0 233.89 178.61' xmlns='http://www.w3.org/2000/svg'>
											<path class='a' d='M0,155.89v-.09a15.79,15.79,0,0,1,15.43-16.14h.67a16.26,16.26,0,0,1,12.22,4.86l-3.52,4.06c-2.5-2.32-5.17-3.88-8.74-3.88-5.93,0-10.3,4.9-10.3,11v.09c0,6.11,4.32,11.06,10.3,11.06,3.83,0,6.29-1.51,9-4l3.53,3.57a16.11,16.11,0,0,1-12.66,5.53A15.7,15.7,0,0,1,0,156.49q0-.3,0-.6'></path>
											<path class='a' d='M51.41,159.77v-.09a7.27,7.27,0,0,0-7-7.57h-.27c-4.32,0-7.09,3.39-7.09,7.48v.09a7.26,7.26,0,0,0,7,7.53h.21c4.37,0,7.13-3.39,7.13-7.45m-19.71,0v-.09a12.55,12.55,0,1,1,25.1-.09v.09a12.31,12.31,0,0,1-12.36,12.26h-.26a12.17,12.17,0,0,1-12.48-11.86q0-.15,0-.3'></path>
											<path class='a' d='M61.84,147.87h5.39v5.34c1.47-3.52,4.19-5.93,8.33-5.75v5.71h-.31c-4.73,0-8,3.08-8,9.32v9H61.84Z'></path>
											<path class='a' d='M96.71,158c-.36-3.48-2.41-6.2-6-6.2-3.3,0-5.62,2.54-6.11,6.2Zm-17.43,1.74v-.09c0-6.74,4.77-12.26,11.5-12.26,7.49,0,11.28,5.88,11.28,12.67a8.62,8.62,0,0,1-.09,1.51H84.67a6.58,6.58,0,0,0,6.78,6,8.56,8.56,0,0,0,6.37-2.81l3.17,2.81A11.92,11.92,0,0,1,91.36,172a11.75,11.75,0,0,1-12.08-11.41q0-.41,0-.81'></path>
											<polygon class='a' points='108.12 140.2 113.6 140.2 113.6 166.41 130.01 166.41 130.01 171.4 108.12 171.4 108.12 140.2'></polygon>
											<path class='a' d='M151.41,159.77v-.09a7.27,7.27,0,0,0-7-7.57h-.27c-4.33,0-7.09,3.39-7.09,7.48v.09a7.26,7.26,0,0,0,7,7.53h.21c4.37,0,7.13-3.39,7.13-7.45m-19.71,0v-.09a12.55,12.55,0,1,1,25.1-.09v.09a12.3,12.3,0,0,1-12.34,12.26h-.28a12.18,12.18,0,0,1-12.49-11.87q0-.15,0-.3'></path>
											<path class='a' d='M179.32,158.48v-.09c0-3.83-3.17-6.46-6.91-6.46a6.36,6.36,0,0,0-6.68,6q0,.22,0,.44v.09a6.42,6.42,0,0,0,6.37,6.47h.32c3.74,0,6.91-2.63,6.91-6.46m-17.88,17.34,2-4.05a15.44,15.44,0,0,0,8.38,2.5c4.81,0,7.45-2.5,7.45-7.23v-1.83a9.86,9.86,0,0,1-8.29,4.33,10.58,10.58,0,0,1-10.71-10.45q0-.27,0-.55v-.08a10.61,10.61,0,0,1,10.13-11.07H171a10.13,10.13,0,0,1,8.25,4v-3.52h5.4v18.72c0,4-1,6.91-3,8.87-2.14,2.13-5.44,3.16-9.67,3.16a20.28,20.28,0,0,1-10.52-2.81'></path>
											<path class='a' d='M191.27,147.86h5.39V171.4h-5.39Zm-.22-8.74h5.79v5.09H191Z'></path>
											<path class='a' d='M202.19,159.77v-.09a12.15,12.15,0,0,1,12-12.3h.26a11.89,11.89,0,0,1,9.41,4.06L220.47,155a7.89,7.89,0,0,0-6.06-2.94c-3.93,0-6.82,3.39-6.82,7.48v.09c0,4.19,2.89,7.54,7,7.54a8.24,8.24,0,0,0,6.11-2.9l3.26,3.21a12.35,12.35,0,0,1-21.8-7.76'></path>
											<path class='a' d='M60.08,29.39,111,58.77l50.89-29.38L111,0Zm54,93.55,47.78-27.58L114.09,67.77Zm-6.23,0V67.77L60.07,95.36ZM57,34.78V89.95l47.78-27.59Z'></path>
											<path class='a' d='M226.67,147.26h0a3.61,3.61,0,1,1,7.22,0h0a3.61,3.61,0,1,1-7.22,0Zm6.8,0h0a3.17,3.17,0,0,0-3.13-3.21h-.06a3.21,3.21,0,0,0-3.2,3.22h0a3.2,3.2,0,1,0,6.39,0Zm-4.6-1.91h1.66c.81,0,1.41.4,1.41,1.16a1.11,1.11,0,0,1-.85,1.12l1,1.39h-.85l-.87-1.26h-.77V149h-.7Zm1.6,1.83c.48,0,.75-.25.75-.6s-.27-.6-.75-.6h-.89v1.2Z'></path>
										</svg>

										<div class='h2'>Improving customer experiences with <nobr>real-time</nobr> data.</div>
										<div class='h3 antialiased'>CoreLogic demystifies real estate for buyers and lenders alike thanks to great data, great analytics, and a great technological process.</div>
									</div>
								</a>
								<a class='customer' href='customers/liberty-mutual.html' id='liberty' style='background-image: url("https://d1fto35gcfffzn.cloudfront.net/images/home/index/2018/bg-home-liberty.jpg")'>
									<div class='overlay'></div>
									<div class='logotextcontainer'>
										<svg class='libertylogo' viewbox='0 0 182.3 98.76' xmlns='http://www.w3.org/2000/svg'>
											<path class='a' d='M77.37,42.31c0,1.77.74,2.33,3.4,2.33s3.88-.81,5.62-4.4H87l-.63,5.62H69.87v-.63c2.48-.63,2.73-1.19,2.73-3.51V27.89c0-1.92-.48-2.48-2.73-3v-.63H80.11v.63c-2.14.56-2.74,1-2.74,2.89Z'></path>
											<path class='a' d='M94,42.87c0,1.4.7,2.18,2.25,2.37v.63H87.47v-.63c1.88-.37,2.33-.89,2.33-2.66V35.14c0-1.7-.48-2.18-2.52-2.59v-.63l6.07-.51H94ZM91.91,22.72a2.4,2.4,0,0,1,2.4,2.4,2.43,2.43,0,0,1-2.4,2.44,2.47,2.47,0,0,1-2.44-2.44,2.43,2.43,0,0,1,2.44-2.4'></path>
											<path class='a' d='M103.07,34.91c1.41-1.29,2.14-1.66,3.25-1.66,2.47,0,4.14,2.37,4.14,5.77,0,4.55-2.07,6.4-5.17,6.4-1.67,0-2.22-.74-2.22-2.33Zm0-12.2h-.63l-5.66.4v.63c1.29.22,2.11.89,2.11,2.07v20a34.85,34.85,0,0,0,6.8.55c6.81,0,9.39-3.54,9.39-7.84,0-4.07-2.88-7.21-6.65-7.21a7.15,7.15,0,0,0-5.36,2.55Z'></path>
											<path class='a' d='M121.22,36.8c.11-2.66,1.25-4.44,3-4.44s3,1.85,3.1,4.44Zm10.58.85a7,7,0,0,0-7.32-6.29A7.55,7.55,0,0,0,116.72,39a7.34,7.34,0,0,0,7.62,7.43,7.9,7.9,0,0,0,7.47-4.84h-.62a5.79,5.79,0,0,1-5,3c-2.59,0-5.18-2.37-5-7Z'></path>
											<path class='a' d='M145.19,36.76C144,35.58,143,35,142,35c-1.26,0-2,.52-3.1,2v5.7c0,1.66.33,2.18,2.36,2.59v.63h-8.87v-.63c1.85-.45,2.33-1,2.33-2.59V35.28c0-1.78-.77-2.59-2.55-2.73v-.63l6.09-.55h.63V35.8H139c1.37-3,2.88-4.44,4.62-4.44a3.25,3.25,0,0,1,2.48,1.18Z'></path>
											<path class='a' d='M168.74,31.92v.63c1.77.37,2.18,1.48.92,4.44l-1.92,4.47-3-6.1c-.86-1.77-.86-2.59.74-2.81v-.63H153.16V26.52h-.7a26.31,26.31,0,0,1-6,5.8V33H149V42c0,3.18,2.11,4.43,4.73,4.43a4.68,4.68,0,0,0,4.47-2.47l-.44-.41a2.61,2.61,0,0,1-2,1.11c-2,0-2.55-1.33-2.55-3.58V33h3.74c2,0,2.63.74,3.51,2.62l5.1,10.76c-1.7,4.59-3.18,6.43-5.76,6.43a5.17,5.17,0,0,1-1.89-.33L157,56.73a7.18,7.18,0,0,0,1.18.07c2.89,0,4.48-1.22,6-4.62l7-16c1.15-2.58,1.59-3.1,3.36-3.58v-.63Z'></path>
											<path class='a' d='M97.18,70.95a3.56,3.56,0,0,0,3.29,3.36v.63H89.79v-.63c2.37-.59,2.77-2,2.37-4.77L90.38,57.19H90.3l-7,17.75H82.5l-7-17.75h-.07L73.59,69.91c-.37,2.52.11,4.22,2.55,4.4v.63H68.3v-.63c2.33-.1,3.32-1.44,3.84-4.77l2.15-14.12a4.75,4.75,0,0,0-3.14-1.48v-.62h7.8l5.66,14.27,5.73-14.27h7.32v.62c-2.22.41-2.74,1.52-2.44,3.52Z'></path>
											<path class='a' d='M102.17,64c0-1.55-.52-2.11-2.18-2.4V61l5.73-.55h.63V70.72a2.29,2.29,0,0,0,2.59,2.44c1.4,0,2.25-.59,3.47-2.51V63.7c0-1.14-.74-1.81-2.18-2.07V61l5.73-.55h.63V71.54c0,1.85.37,2.29,2.22,2.77v.63l-6.4.55v-3.4h-.07c-1.55,2.37-3.29,3.4-5.55,3.4-2.89,0-4.62-1.58-4.62-4.25Z'></path>
											<path class='a' d='M122,62.11h-2.52v-.7a26.22,26.22,0,0,0,6-5.81h.71V61h4.59v1.11h-4.59v8c0,2.26.59,3.59,2.55,3.59a2.63,2.63,0,0,0,2-1.11l.44.41a4.68,4.68,0,0,1-4.47,2.47c-2.63,0-4.73-1.25-4.73-4.44Z'></path>
											<path class='a' d='M133.49,64c0-1.55-.52-2.11-2.18-2.4V61l5.73-.55h.63V70.72a2.29,2.29,0,0,0,2.58,2.44c1.41,0,2.26-.59,3.48-2.51V63.7c0-1.14-.74-1.81-2.18-2.07V61l5.73-.55h.63V71.54c0,1.85.37,2.29,2.22,2.77v.63l-6.4.55v-3.4h-.07c-1.55,2.37-3.29,3.4-5.55,3.4-2.88,0-4.62-1.58-4.62-4.25Z'></path>
											<path class='a' d='M159.67,72.53A3.86,3.86,0,0,1,157,74c-1.15,0-1.92-1-1.92-2.51,0-1.89,1.07-2.73,4.55-4.22Zm4.21-6.88c0-3.85-3.14-5.22-6.14-5.22a6,6,0,0,0-6.25,4.73h.56a4.48,4.48,0,0,1,4.18-2.33c2.51,0,3.48,1.19,3.48,3.66-3.41,1.25-8.95,1.55-8.95,5.32a4,4,0,0,0,4.18,3.66,6,6,0,0,0,4.4-1.66l.33-.29a3.27,3.27,0,0,0,3.37,2c2,0,3.25-1,3.4-2.7h-.59c-.15.85-.52,1.29-1.11,1.29s-.85-.55-.85-1.84Z'></path>
											<path class='a' d='M169.32,55.6c0-2-.63-2.66-2.63-2.78V52.2l6.17-.41h.63V71.54c0,1.85.41,2.29,2.47,2.77v.63h-9.28v-.63c2-.33,2.63-1,2.63-2.77Z'></path>
											<path class='a' d='M179.87,70a2.5,2.5,0,1,1-2.43,2.5,2.43,2.43,0,0,1,2.43-2.5m0,4.45a2,2,0,1,0-1.85-2,1.86,1.86,0,0,0,1.85,2m-.94-3.26h1c.66,0,1,.23,1,.79a.68.68,0,0,1-.68.73l.73,1.18h-.55l-.68-1.17h-.37v1.17h-.5Zm.5,1.16h.47c.32,0,.58,0,.58-.4s-.3-.37-.57-.37h-.47Z'></path>
											<rect class='a' height='0.88' width='107.66' x='68.3' y='81.15'></rect>
											<path class='a' d='M83.94,88.22h1.93V98.5H83.94Z'></path>
											<path class='a' d='M89.85,88.22h1.78l4.32,7.32h0V88.22h1.76V98.5H96l-4.32-7.32h0V98.5H89.85Z'></path>
											<path class='a' d='M102.31,95.41a3.59,3.59,0,0,0,3.1,1.56c.94,0,2.18-.32,2.18-1.31,0-.81-.75-1-2.12-1.36L104.33,94c-1.65-.37-3.09-1-3.09-2.87,0-2.16,2.06-3.21,4-3.21A5.09,5.09,0,0,1,109.51,90l-1.6,1.21a2.88,2.88,0,0,0-2.7-1.49c-1.11,0-1.95.42-1.95,1.14s1,1.05,2.12,1.31l1.26.27c1.53.33,3,1,3,2.9,0,2.51-2.37,3.38-4.5,3.38a5.39,5.39,0,0,1-4.45-2.16Z'></path>
											<path class='a' d='M120.88,95.34c0,2.09-1.66,3.42-4.14,3.42s-4.14-1.33-4.14-3.42V88.22h1.93v6.61c0,1.26.53,2,2.21,2s2.21-.79,2.21-2V88.22h1.93Z'></path>
											<path class='a' d='M124.1,88.22h4.29c2.18,0,3.46,1.3,3.46,3.1a2.89,2.89,0,0,1-2,3l2.3,4.14h-2.24l-2-3.78H126V98.5H124.1ZM126,93h2.11a1.53,1.53,0,0,0,1.69-1.54c0-.94-.63-1.54-2-1.54H126Z'></path>
											<path class='a' d='M137.6,88.22h2.25l3.44,10.28h-2l-.59-2h-3.9l-.59,2h-2Zm1.14,1.88h0L137.3,94.8h2.86Z'></path>
											<path class='a' d='M145.93,88.22h1.78L152,95.54h0V88.22h1.76V98.5H152l-4.32-7.32h0V98.5h-1.76Z'></path>
											<path class='a' d='M163.92,91.67a2.22,2.22,0,0,0-2.27-1.92c-2,0-2.9,1.82-2.9,3.61s.85,3.61,2.9,3.61a2.56,2.56,0,0,0,2.48-2.08l1.76.81a4.26,4.26,0,0,1-4.24,3.06c-3.29,0-4.92-2.5-4.92-5.4s1.85-5.4,4.92-5.4a3.94,3.94,0,0,1,4.13,3.23Z'></path>
											<path class='a' d='M168.63,88.22h7.28V90h-5.34v2.34h4.91v1.7h-4.91v2.66h5.72V98.5h-7.65Z'></path>
											<path class='a b' d='M42.11,34.36a3.17,3.17,0,0,1,.65.36l5.89-6.53a18.83,18.83,0,0,0-6.37-4.57A13.5,13.5,0,0,0,40,22.75L41.4,34.07S41.86,34.23,42.11,34.36Z'></path>
											<path class='a b' d='M22.45,23.79,33,34.06s.4-.2.57-.27a5.67,5.67,0,0,1,.68-.2l1-11.71a27.69,27.69,0,0,0-2.87-.22,22.22,22.22,0,0,0-8.67,1.5A7.21,7.21,0,0,0,22.45,23.79Z'></path>
											<path class='a b' d='M16.19,70.38A66,66,0,0,0,14.52,57c-.46-1.64-4.05-12.54-4.15-12.95s-.19-3.15-.29-5.71a48.22,48.22,0,0,0-2.56,16.2h0c0,9.58,2.47,18.2,7.2,24.27a23.1,23.1,0,0,0,1.47-8.36S16.19,70.4,16.19,70.38Z'></path>
											<path class='a b' d='M29,71.27c4.1-3.52,6.57-4.72,10.94-7C33.48,65.63,26.11,70,22.14,75.09a67.44,67.44,0,0,0-4.55,6.59,12.74,12.74,0,0,0,1.9,1.05A40.31,40.31,0,0,1,29,71.27Z'></path>
											<path class='a b' d='M19.43,25.43a3.07,3.07,0,0,0-.67.6c1.87,4.8,4.42,11.17,5,13,.08.23.16.48.24.73l4.22,2.15.07,0s0-.6,0-.78a6.19,6.19,0,0,1,.12-.76L20.1,25.05A4,4,0,0,0,19.43,25.43Z'></path>
											<path class='a b' d='M30.14,73a57.9,57.9,0,0,0-8.23,10.65l1.41.41C32.91,67,48.14,63.15,56.72,62.79c.11-.48,0,.11.1-.71C50.93,62,39.69,64,30.14,73Z'></path>
											<path class='a b' d='M49.2,39.37a.74.74,0,0,1,.15.19l5.23-2.24a32.2,32.2,0,0,0-2.28-4.59l-3.36,6.43A1.47,1.47,0,0,1,49.2,39.37Z'></path>
											<path class='a b' d='M51.7,47.67a6.39,6.39,0,0,1-.54,1.17l.33,4,4.27,7.05,1.28.21a53.84,53.84,0,0,0,.29-5.57,49.41,49.41,0,0,0-1-11.71l-4.35,3.64S51.83,47.21,51.7,47.67Z'></path>
											<path class='a b' d='M62.4,36.06,51.7,44.3a7.09,7.09,0,0,0-1.31-3.41l12-4.92s.08,0,.1,0S62.4,36.06,62.4,36.06Z'></path>
											<path class='a b' d='M22.13,25.74a.05.05,0,0,1,0-.08.05.05,0,0,1,.08,0L31.32,35a5.58,5.58,0,0,0-2.16,2.74Z'></path>
											<path class='a b' d='M27.43,43.17a3.27,3.27,0,0,0-.26,1.1,3.82,3.82,0,0,0,.19,1.23l-2.75-1.89a8.13,8.13,0,0,0-.06-1.35c0-.06-.08-.74-.1-.82Z'></path>
											<path class='a b' d='M23.11,63.92A20.68,20.68,0,0,1,20.76,72C20,73.35,17.83,76,17.08,77c.82-1.63,1.45-5.57,1.4-8.63,0-2-.64-6.37-.11-9.28a10.63,10.63,0,0,1,3.54-6.8,6.58,6.58,0,0,1,6.36-1.39l2.51,4.73a5.72,5.72,0,0,0-4.32.89C24.23,58.23,23.48,60.54,23.11,63.92Z'></path>
											<path class='a b' d='M23.35,70.36A42.94,42.94,0,0,0,25,63.74c.29-1.69.56-4.15,2.57-5.8a4.2,4.2,0,0,1,3.25-.73L33.67,63a1.69,1.69,0,0,0,1.65.79C32.65,64.66,25.92,67.86,23.35,70.36Z'></path>
											<path class='a b' d='M47.58,51.83a1.79,1.79,0,0,0,0,1.88L49.34,57a17.39,17.39,0,0,0,1.3,2.71c.81,0,1.7,0,2.63,0-1-2.23-3.27-6.54-3.27-6.54l-.32-3.4A7.72,7.72,0,0,0,47.58,51.83Z'></path>
											<path class='a b' d='M37.46,16.2,36,33.29a10,10,0,0,1,3.72.37L37.55,16.2s0-.06-.05-.06S37.46,16.2,37.46,16.2Z'></path>
											<path class='a b' d='M13.76,19.81c-.07-.2-.21-.75-.44-.85s-.8-.42-1.13-.55-.78-.64-1-.64a6.24,6.24,0,0,1-2.86-.68A1.39,1.39,0,0,0,8.59,19a4,4,0,0,0,2.14.68L11,24.71a2.26,2.26,0,0,0,1.63.64v.17l-.89.65c0,.58.82,17.11,1,17.41S16.88,56.13,17,56.88A14.27,14.27,0,0,1,20,51a6.61,6.61,0,0,1,4.33-2,24.85,24.85,0,0,1-1.49-3.4c0-.27-.51-3.84-.65-4.08S13.83,20,13.76,19.81Z'></path>
											<path class='a b' d='M54.76,24.25,44.24,35.54A28.47,28.47,0,0,1,47.46,38l7.38-13.71s0-.05,0-.07S54.76,24.25,54.76,24.25Z'></path>
											<path class='a b' d='M49.29,42.94c-.13-.66-1.79-2.64-4.61-4.78-2.2-1.68-5.43-3.33-8.09-3.31-4.49,0-6.34,3.11-6.68,4.72a5.41,5.41,0,0,0,0,2.6A2.9,2.9,0,0,0,28.83,44a1.9,1.9,0,0,0,.46,1.67,3.31,3.31,0,0,1,.77-1.94,5.24,5.24,0,0,1,1.71-1.15l.1,1.23c-.58.33-1.3,1-1.35,1.42l0,2,1.54-.93.29.62-.56,3.57.87-.15,1.58.65-1.53,1.29v.51a.92.92,0,0,1,.77-.29,8.92,8.92,0,0,1,1.93.65l-.05.31H32.7c-.1.36.22.63.42.78a6.1,6.1,0,0,1,.93-.28c.2,0,.67.12,1.08.17l-.49.66a.92.92,0,0,1-.71.1c-.25-.05-.51.3-.51.6a6.64,6.64,0,0,0,.2,1.08c.25,1.15,1.42.92,1.57.9a23.93,23.93,0,0,0,3.18-.94L36,59.79l1,3.5A57.35,57.35,0,0,1,48.19,60.2c-.54-.91-.64-1.27-1.3-2.62l-2.55-5.87.36-.87a2.44,2.44,0,0,0,2-.66,6.61,6.61,0,0,0,1.48-1.79.84.84,0,0,0-1,.05c-.31.21-.54.6-1,.41s-.24-.7-.19-1.17-.53-.46-.94-.11a1.49,1.49,0,0,1-1.84-.35A37.56,37.56,0,0,0,39,43.87a7.34,7.34,0,0,0-4.64-.76c-.81.14-1.38.5-1.69.35l-1-1.56.16-.1c.36.16.7.44,1.15.29a13.18,13.18,0,0,1,3.27-.51,16,16,0,0,1,5.61,1.18c.05,1.33,2.72,3,3.92,3.16a3.22,3.22,0,0,0,2.25-.51l-2.6-2.29,1.38-1.74s2.2,2.09,2.5,2.5A2,2,0,0,0,49.29,42.94ZM33.62,45.6a9,9,0,0,1,2.18-.87c1.56-.33,3.28.6,4.51,1.56l-.23.37-1.75.41a2.5,2.5,0,0,0-1.69-.41,3.38,3.38,0,0,0-1.12.26l.34.56-.8.2a3.5,3.5,0,0,0-1.43-1.17Zm-2.66-4c-.46-1.54.77-3.06,1.33-3.62l.87,2A12.47,12.47,0,0,0,31,41.57ZM39,39.83c-.82-.56-3.52-.46-4.64-.2l-.82-2.35a5.28,5.28,0,0,1,2.86-.76,7.29,7.29,0,0,1,3.06.66Zm5.3,2.41a25.73,25.73,0,0,0-4-2l1-2.5a36.73,36.73,0,0,1,4.29,2.7Z'></path>
											<path class='a b' d='M8.55,15.75a5.27,5.27,0,0,1,3.95,1.48,2.14,2.14,0,0,0-.78-2.06,5.19,5.19,0,0,0-3.3-.92,4.59,4.59,0,0,0-2.86.9,1.93,1.93,0,0,0-.59,2C5.17,16.5,6.65,15.74,8.55,15.75Z'></path>
											<path class='a b' d='M3.79,3.61A3.78,3.78,0,0,0,4.39,6c.23.31.78.9,1.19.88.58,0,1.12-1.14,2.48-1.09.88,0,1.46,1.28,2.21,1.33.58,0,.89-.54,1.47-.6s.67.2,1,.5A3.27,3.27,0,0,1,14,5.62c.92-.68,4-1.33,5.38-2.52A2.53,2.53,0,0,0,20,.66,4.69,4.69,0,0,1,16.7,2.18a8.24,8.24,0,0,1-2.89-.57A1.75,1.75,0,0,0,14,0a8.55,8.55,0,0,1-3.1.53C10.1.53,8.64.22,7.51.29A3.66,3.66,0,0,0,3.79,3.61Z'></path>
											<path class='a b' d='M5.31,21.64A3.22,3.22,0,0,0,3.77,23a3.46,3.46,0,0,0,1,1.63,3.21,3.21,0,0,1,.83-1.35,6.64,6.64,0,0,1,.95-.54.55.55,0,0,0,.38-.58,1.51,1.51,0,0,0-.18-.75c.27,0,.77,0,.95-.23a1.46,1.46,0,0,0,.25-.85c0-.31-.14-.37-.44-.41a12.67,12.67,0,0,0-1.64,0l.89-.46A.63.63,0,0,0,7,18.92a3.06,3.06,0,0,0-.07-1,7.67,7.67,0,0,0-3.3,1.36l.38.92-.68,0a2.78,2.78,0,0,0,.17,1.59A8.22,8.22,0,0,1,5.31,21.64Z'></path>
											<path class='a b' d='M11.26,29.53c0-.37-.3-.58-.58-.81a11.75,11.75,0,0,0,.11-2.45,3.58,3.58,0,0,0-.68-1.94,8.66,8.66,0,0,0-1.81-1.84.68.68,0,0,1-.49.71,12,12,0,0,0-1.59,1l.26,4.46h0l0,0a1.42,1.42,0,0,0-.89,1.42c.08.68.64,1.2,1.69,1.43l.45.09,0-.23a3.35,3.35,0,0,1-.38-.08c-1.05-.27-1.23-1-.56-1.33a5.1,5.1,0,0,1,1.85-.38,5.31,5.31,0,0,1,2.42.75A1.35,1.35,0,0,0,11.26,29.53Z'></path>
											<path class='a b' d='M16.77,14.09c0-.54-.85-2.07-.88-2.58a4.39,4.39,0,0,1,.2-1.33c-.34.07-1.53.55-2,.14s-.17-1.53-.88-1.8-1.83.58-2.55.48S9.29,7.9,8.54,7.9,7.42,8.81,6.5,9c-.71.16-1.88-.38-2.35-.34s-.82.43-1,.92a1.23,1.23,0,0,1-1,.84c-.48.12-1.16-.3-1.5-.23A2.12,2.12,0,0,1,1,11.31c0,1.37-1,1.86-1,3.93,0,2.25,2.39,3.32,2.39,3.32l.28-.2A3.16,3.16,0,0,1,1,15.61a2.86,2.86,0,0,1,0-.33,3.58,3.58,0,0,1,1.1-2l0,0c1.33-1.25,3.68-2,6.61-1.91,5.37.1,7.8,2.58,7.87,4.63A3.88,3.88,0,0,0,16.77,14.09Z'></path>
										</svg>

										<div class='h2'>Developing the technology to keep up with evolving risk models.</div>
										<div class='h3 antialiased'>Liberty Mutual learned to speed its development processes to build the right software and deliver the right services at the right time.</div>
									</div>
								</a>
								<!-- %p.sizesixteen.uppercase#seemorestorieslink -->
								<!-- %a{href:"/customers"} -->
								<!-- =t(:seemorecustomerstories) -->
								<!-- %i.fa.fa-angle-right -->
							</div>
							<div class='fiftywide'>
								<!-- %a.customer#merrillhome{:style => "background-image: url(https://d1fto35gcfffzn.cloudfront.net/images/home/index/2018/bg-home-merrill.jpg)", href: "/customers/merrill"} -->
								<!-- .overlay -->
								<!-- .logotextcontainer -->
								<!-- =render 'shared/svg/logomerrill' -->
								<!-- .h2=raw v[:merrillboxtitle] -->
								<!-- .h3.antialiased=raw v[:merrillboxtext] -->
								<a class='customer' href='customers/ford.html' id='ford' style='background-image: url("https://d1fto35gcfffzn.cloudfront.net/images/home/index/2018/bg-home-ford.jpg")'>
									<div class='overlay'></div>
									<div class='logotextcontainer'>
										<img src='https://d1fto35gcfffzn.cloudfront.net/images/home/index/2018/logo-ford-white-oval.svg'>
										<div class='h2'>Betting big on mobility.</div>
										<div class='h3 antialiased'>Ford is transforming itself into the world’s most trusted mobility company.</div>
									</div>
								</a>
								<a class='customer' href='citi.html' id='citi' style='background-image: url("https://d1fto35gcfffzn.cloudfront.net/images/home/index/2018/citi-still.jpg")'>
									<iframe allowfullscreen='true' frameBorder='0' mozallowfullscreen='true' src='https://player.vimeo.com/video/254782859?color=01786e&amp;title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;background=1' webkitallowfullscreen='true'></iframe>
									<div class='overlay'></div>
									<div class='logotextcontainer'>
										<svg class='citilogo' viewbox='0 0 203.5 116.48' xmlns='http://www.w3.org/2000/svg'>
											<path class='cls-1' d='M55.06,93.91l-.32.33c-5.2,5.32-11.24,8.14-17.46,8.14-13,0-22.41-9.74-22.41-23.17S24.3,56,37.28,56c6.22,0,12.25,2.81,17.46,8.14l.32.33,8.36-10.1-.22-.26c-6.94-8.21-15.29-12.2-25.51-12.2S18,45.38,11.22,51.63C3.88,58.39,0,67.93,0,79.2S3.88,100,11.22,106.78c6.79,6.25,16.19,9.69,26.47,9.69s18.57-4,25.51-12.2l.22-.26Z'></path>
											<polygon class='cls-1' points='71.86 43.1 71.86 115.1 86.6 115.1 86.6 109.27 86.6 43.1 71.86 43.1'></polygon>
											<path class='cls-1' d='M144.39,99.44c-3.93,2.39-7.6,3.61-10.9,3.61-4.78,0-6.9-2.51-6.9-8.12V56.73h15V43.17h-15V20.75L112.12,28.5V43.17H99.64V56.73h12.47V97.36c0,11.08,6.57,18.64,16.36,18.83a22.92,22.92,0,0,0,13.08-3.31l.14-.09,3.56-13.88Z'></path>
											<polygon class='cls-1' points='156.6 43.1 156.6 115.1 171.35 115.1 171.35 109.27 171.35 43.1 156.6 43.1'></polygon>
											<path class='cls-2' d='M180.63,31.45C168.33,13,145.61,0,121.36,0a72.81,72.81,0,0,0-59.3,31.45H79C90.58,19.53,105.58,13,121.36,13c15.49,0,30.74,6.49,42.32,18.41Z'></path>
											<path class='cls-1' d='M202.26,27.39a6.5,6.5,0,1,1-6.5-6.5A6.38,6.38,0,0,1,202.26,27.39Zm1.25,0a7.75,7.75,0,0,0-15.49,0,7.75,7.75,0,0,0,15.49,0Zm-4.21-1.82A2.48,2.48,0,0,0,196.53,23h-3.71v8.45h1.44V28.2h1.63l1.65,3.26h1.7l-1.74-3.41A2.41,2.41,0,0,0,199.3,25.56Zm-1.46,0c0,.84-.58,1.2-1.35,1.2h-2.23V24.4h2.23A1.19,1.19,0,0,1,197.84,25.61Z'></path>
										</svg>

										<div class='h2'>Building software like they've always dreamed.</div>
										<div class='h3 antialiased'>The future of banking will come from a 200+ year-old bank. Citi now not only modernizes legacy software but functions in a forward-compatible manner.</div>
									</div>
								</a>
								<a class='customer' href='charity-water.html' id='charitywater' style='background-image: url("https://d1fto35gcfffzn.cloudfront.net/images/home/index/2018/bg-charitywater.jpg")'>
									<div class='overlay'></div>
									<div class='logotextcontainer'>
										<svg class='charitywaterlogo' viewbox='0 0 163.51 19.08' xmlns='http://www.w3.org/2000/svg'>
											<path class='a' d='M27.31,12.35h.41a3,3,0,0,1-3.26,2.23,3.86,3.86,0,0,1-2.82-1.14,4.08,4.08,0,0,1-1.14-3A4.16,4.16,0,0,1,21.73,7.3a4.14,4.14,0,0,1,4.79-.75c.57.29.85.66.85,1.09a.75.75,0,0,1-.16.45.53.53,0,0,1-.45.21c-.42,0-.68-.25-.78-.74a1.5,1.5,0,0,0-.35-.78,1.53,1.53,0,0,0-1-.22,2.24,2.24,0,0,0-1.93.89,4.59,4.59,0,0,0-.65,2.68,5.21,5.21,0,0,0,.7,2.89,2.37,2.37,0,0,0,2.11,1A2.28,2.28,0,0,0,27.31,12.35Z' transform='translate(0 0)'></path>
											<path class='a' d='M33.9,7.72a4.14,4.14,0,0,1,1.29-1.21,3.09,3.09,0,0,1,1.57-.4,3,3,0,0,1,1.6.4,1.86,1.86,0,0,1,.83,1,6.82,6.82,0,0,1,.19,1.91v2.16a13.47,13.47,0,0,0,0,1.68.57.57,0,0,0,.31.44,2.27,2.27,0,0,0,1,.14v.44H36.65v-.44h.18a1.37,1.37,0,0,0,.9-.2.76.76,0,0,0,.24-.47V9.22a6.4,6.4,0,0,0-.11-1.45A1.31,1.31,0,0,0,37.35,7a1.84,1.84,0,0,0-1.07-.31,2.24,2.24,0,0,0-1.34.44,3.58,3.58,0,0,0-1,1.31v4.77a.62.62,0,0,0,.29.46,1.78,1.78,0,0,0,.91.16v.44h-4v-.44h.2a1.37,1.37,0,0,0,.9-.2.76.76,0,0,0,.24-.47V3.76a3.08,3.08,0,0,0-.23-1.5c-.15-.21-.51-.32-1.08-.32V1.5a6.5,6.5,0,0,0,2.47-.4h.2Z' transform='translate(0 0)'></path>
											<path class='a' d='M52.51,12.83h.35c-.06,1.09-.59,1.64-1.6,1.64a1.47,1.47,0,0,1-1-.34,1.73,1.73,0,0,1-.49-1,9.77,9.77,0,0,1-1.75,1,3.7,3.7,0,0,1-1.42.34A2.1,2.1,0,0,1,45.2,14a1.48,1.48,0,0,1-.58-1.22,2.13,2.13,0,0,1,1-1.72,11.81,11.81,0,0,1,2.66-1.44L49.73,9V8.64a4.68,4.68,0,0,0-.11-1.18,1.18,1.18,0,0,0-.55-.65,2,2,0,0,0-1.16-.29c-1,0-1.49.33-1.6,1s-.37,1-.8,1A.5.5,0,0,1,44.93,8a1.66,1.66,0,0,1,.77-1.17,3.81,3.81,0,0,1,2.41-.63A3.83,3.83,0,0,1,50,6.49a2,2,0,0,1,.88.87,4,4,0,0,1,.22,1.49V12a5.29,5.29,0,0,0,.12,1.43.46.46,0,0,0,.5.31C52.14,13.76,52.4,13.46,52.51,12.83ZM49.73,9.48l-1,.42c-1.65.67-2.48,1.51-2.48,2.53a1.45,1.45,0,0,0,.32,1,1,1,0,0,0,.83.37,2.52,2.52,0,0,0,1-.3,7.61,7.61,0,0,0,1.34-.89Z' transform='translate(0 0)'></path>
											<path class='a' d='M59.06,8.11a3.21,3.21,0,0,1,1.06-1.43,2.29,2.29,0,0,1,1.43-.57,1.3,1.3,0,0,1,1,.39,1.17,1.17,0,0,1,.36.8.71.71,0,0,1-.19.48.61.61,0,0,1-.46.2c-.32,0-.56-.24-.73-.71C61.42,7,61.25,6.8,61,6.8a1.54,1.54,0,0,0-1,.56,2.55,2.55,0,0,0-.74,1.16,6.59,6.59,0,0,0-.16,1.66v3a.67.67,0,0,0,.27.5,1.5,1.5,0,0,0,.86.17h.27v.44H56.4v-.44h.2a1.55,1.55,0,0,0,.82-.16.64.64,0,0,0,.29-.44,15.14,15.14,0,0,0,0-1.65V7.78a.67.67,0,0,0-.27-.5,1.49,1.49,0,0,0-.85-.18h-.2V6.67a13.4,13.4,0,0,0,2.35-.56A6.49,6.49,0,0,1,59.06,8.11Z' transform='translate(0 0)'></path>
											<path class='a' d='M68.86,6.11v7.05a.71.71,0,0,0,.28.5,1.48,1.48,0,0,0,.85.17h.2v.44H66v-.44h.33a1.33,1.33,0,0,0,.89-.2.76.76,0,0,0,.24-.47v-4a6.37,6.37,0,0,0-.13-1.69A.62.62,0,0,0,67,7.13a2.7,2.7,0,0,0-.75-.08H66V6.61a11.85,11.85,0,0,0,2.64-.51ZM67,2.1a1,1,0,0,1,.29-.71,1,1,0,0,1,.7-.3,1,1,0,0,1,.7.3,1,1,0,0,1,0,1.43,1,1,0,0,1-.7.3,1,1,0,0,1-.7-.3A1,1,0,0,1,67,2.1Z' transform='translate(0 0)'></path>
											<path class='a' d='M78.73,6.85H76.36v4.74a7.27,7.27,0,0,0,.1,1.47,1,1,0,0,0,.41.61,1.06,1.06,0,0,0,.66.23,1.44,1.44,0,0,0,1.2-.79l.31.18a2,2,0,0,1-.88,1,2.53,2.53,0,0,1-1.17.32,1.89,1.89,0,0,1-1.21-.41,1.7,1.7,0,0,1-.65-1A9.3,9.3,0,0,1,75,11.3V6.85H73.86V6.42a2,2,0,0,0,1.41-.66A3.15,3.15,0,0,0,76.06,4h.31V6.41h2.37Z' transform='translate(0 0)'></path>
											<path class='a' d='M86.89,12.78l1.83-4.35a6.85,6.85,0,0,0,.39-1.07c0-.32-.36-.49-1.07-.5V6.42H90.8v.44a1.35,1.35,0,0,0-.94.34,4.92,4.92,0,0,0-.74,1.37L85.62,17a6.33,6.33,0,0,1-.88,1.64,1.15,1.15,0,0,1-.84.44c-.41,0-.62-.19-.62-.57s.33-.75,1-1.1A2.85,2.85,0,0,0,85,17a1.92,1.92,0,0,0,.39-.66l.75-1.86L83.25,8.14a3.36,3.36,0,0,0-.65-1.05,1.37,1.37,0,0,0-.88-.22V6.42h3.6v.44c-.63,0-.95.15-.95.39a4,4,0,0,0,.37.94Z' transform='translate(0 0)'></path>
											<path class='a' d='M95,6.91a1,1,0,1,1,2,0,1,1,0,0,1-.31.72,1,1,0,0,1-1.46,0A1,1,0,0,1,95,6.91Zm0,6.64a1,1,0,1,1,1.78.71l0,.05a1,1,0,0,1-1.46,0A1,1,0,0,1,95,13.55Z' transform='translate(0 0)'></path>
											<path class='a' d='M118.27,14.58h-.44l-2.34-6.22-2.39,6.22h-.4l-2.41-6.23a5.19,5.19,0,0,0-.61-1.28,1.14,1.14,0,0,0-.8-.21V6.42h3.58v.44a2.14,2.14,0,0,0-.83.11.4.4,0,0,0-.22.38,4.93,4.93,0,0,0,.38,1.12l1.6,4.21,2.43-6.26h.37l2.36,6.26,1.73-4.46a4.23,4.23,0,0,0,.28-.85c0-.31-.33-.48-1-.51V6.42h2.55v.44a1.4,1.4,0,0,0-.72.18,1.54,1.54,0,0,0-.48.75l-.21.56Z' transform='translate(0 0)'></path>
											<path class='a' d='M133.51,12.83h.35c-.06,1.09-.59,1.64-1.6,1.64a1.47,1.47,0,0,1-1-.34,1.73,1.73,0,0,1-.49-1,9.77,9.77,0,0,1-1.75,1,3.7,3.7,0,0,1-1.42.34,2.1,2.1,0,0,1-1.4-.47,1.48,1.48,0,0,1-.58-1.22,2.13,2.13,0,0,1,1-1.72,12.22,12.22,0,0,1,2.66-1.44l1.49-.6V8.64a4.68,4.68,0,0,0-.11-1.18,1.18,1.18,0,0,0-.55-.65A2,2,0,0,0,129,6.52c-1,0-1.49.33-1.6,1s-.37,1-.8,1S126,8.33,126,8a1.68,1.68,0,0,1,.78-1.17,4.89,4.89,0,0,1,4.3-.24,2,2,0,0,1,.89.87,3.77,3.77,0,0,1,.21,1.49V12a5.28,5.28,0,0,0,.11,1.43.48.48,0,0,0,.5.31C133.16,13.76,133.41,13.46,133.51,12.83Zm-2.77-3.35-1,.42c-1.65.67-2.48,1.51-2.48,2.53a1.45,1.45,0,0,0,.32,1,1,1,0,0,0,.83.37,2.52,2.52,0,0,0,1-.3,7.91,7.91,0,0,0,1.33-.89Z' transform='translate(0 0)'></path>
											<path class='a' d='M142,6.85h-2.37v4.74a7.26,7.26,0,0,0,.09,1.47,1.13,1.13,0,0,0,1.08.84,1.44,1.44,0,0,0,1.2-.79l.31.18a2,2,0,0,1-.88,1,2.53,2.53,0,0,1-1.17.32,1.89,1.89,0,0,1-1.21-.41,1.7,1.7,0,0,1-.65-1,9.39,9.39,0,0,1-.13-1.91V6.85h-1.13V6.42a2,2,0,0,0,1.41-.66,3.17,3.17,0,0,0,.79-1.8h.31V6.41H142Z' transform='translate(0 0)'></path>
											<path class='a' d='M152.91,9.08h-5.48v.84A6,6,0,0,0,148,13a2.14,2.14,0,0,0,1.93,1,2.54,2.54,0,0,0,2.48-1.56h.46A2.64,2.64,0,0,1,151.69,14a3.83,3.83,0,0,1-3.87,0,4,4,0,0,1-1.45-1.42,4.17,4.17,0,0,1-.57-2.23,4.47,4.47,0,0,1,1.09-3.09A3.49,3.49,0,0,1,149.62,6,3,3,0,0,1,152,7,3.2,3.2,0,0,1,152.91,9.08Zm-1.68-.39a2.54,2.54,0,0,0,0-.39,1.65,1.65,0,0,0-1.52-1.77h-.19c-1.17,0-1.86.72-2.08,2.16Z' transform='translate(0 0)'></path>
											<path class='a' d='M159.66,8.11a3.21,3.21,0,0,1,1.06-1.43,2.29,2.29,0,0,1,1.43-.57,1.3,1.3,0,0,1,1,.39,1.17,1.17,0,0,1,.36.8.71.71,0,0,1-.19.48.61.61,0,0,1-.46.2c-.32,0-.56-.24-.73-.71-.11-.32-.29-.48-.52-.48a1.54,1.54,0,0,0-1,.56,2.55,2.55,0,0,0-.74,1.16,6.59,6.59,0,0,0-.16,1.66v3a.68.68,0,0,0,.28.5,1.5,1.5,0,0,0,.86.17h.27v.44H157v-.44h.2a1.55,1.55,0,0,0,.82-.16.64.64,0,0,0,.29-.44,15.14,15.14,0,0,0,0-1.65V7.78a.67.67,0,0,0-.27-.5,1.49,1.49,0,0,0-.85-.18H157V6.67a13.4,13.4,0,0,0,2.35-.56A6.48,6.48,0,0,1,159.66,8.11Z' transform='translate(0 0)'></path>
											<path class='a' d='M8.21,9H5.27a.47.47,0,0,0-.47.47h0v1.27a.47.47,0,0,0,.47.47H8.21a.47.47,0,0,0,.47-.47h0V9.44A.47.47,0,0,0,8.21,9ZM13,2.39l-.66-1.3.31-.18c.1,0,.17-.11,0-.36s-.28-.19-.28-.19L12,.57A1.21,1.21,0,0,0,11,0h-.72A.48.48,0,0,0,10,.1a.46.46,0,0,1-.4.15H4.51a.72.72,0,0,0-.78.08L3.19,1a.83.83,0,0,1-.48.29.18.18,0,0,0,0-.2l0-.19.1-.28h.09L2.8.45,2.63.52c-.11,0-.11.1-.11.1a.19.19,0,0,1-.18.19L2,.21c0-.07-.09-.29-1,.22s-.72.71-.72.71l.32.63-.1.08.24.47-.27.17A.73.73,0,0,0,0,3.12V16.8c0,1,.29,1.5,1.44,1.5H11.9c.68,0,1.32-.35,1.32-1.53V3.25C13.23,2.58,13.1,2.57,13,2.39ZM5.5,1.25H9A.54.54,0,0,1,9,2.33H5.5a.54.54,0,0,1,0-1.08ZM9.91,12s1.17,2,1.41,2.5-.12.88-.12.88a.66.66,0,0,1-.88-.23c-.25-.45-1.06-1.89-1.35-2.33s-.53-.77-1-.77H5.49c-.5,0-.66.2-1,.77S3.38,14.7,3.13,15.15a.67.67,0,0,1-.89.23s-.44-.26-.12-.88C2.33,14.05,3.5,12,3.5,12a1.9,1.9,0,0,0,.3-.82V8.91a1.9,1.9,0,0,0-.3-.82s-1.18-2-1.42-2.5.12-.88.12-.88a.67.67,0,0,1,.89.23c.25.45,1.07,1.88,1.36,2.32S5,8,5.49,8H8c.5,0,.66-.2,1-.76s1.1-1.87,1.35-2.32a.66.66,0,0,1,.88-.23s.44.26.12.88c-.24.47-1.41,2.5-1.41,2.5a1.88,1.88,0,0,0-.29.82v2.28A1.9,1.9,0,0,0,9.91,12Z' transform='translate(0 0)'></path>
										</svg>

										<div class='h2'>Building software that helps improve the world.</div>
										<div class='h3 antialiased'>charity: water is building a software platform that helps ensure every human has access to clean and safe drinking water.</div>
									</div>
								</a>
								<p class='sizesixteen uppercase customer' id='seemorestorieslink'>
									<a href='customers.html'>
										See more customer stories
										<i class='fa fa-angle-right'></i>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='bg-smint hundredpad' id='upnext'>
				<div class='container'>
					<div class='h2 bold antialiased white center'>
						Estamos transformando la forma en que el mundo construye el software. 
						<a data-hover='Learn how' href='about.html'>Aprender cómo.</a>.
					</div>
				</div>
			</div>
			<!-- %a#floatinghiring.transition{href:"/careers", onClick: "ga('send', 'event', 'homepage', 'click', 'recruiting-2018');"} -->
			<!-- %img{src:"https://d1fto35gcfffzn.cloudfront.net/images/home/index/2018/Hiring-Animation.gif"} -->

			<div class='bg-gradientblue' id='footer'>
				<div class='container'>
					<div class='twentywide removeformobile'>
						<ul class='footer-nav'>
							<li>
								<a href='learn.html'>Aprende</a>
								<ul class='footer-nav-menu'>
									<li>
										<a href='topics.html'>Topics</a>
									</li>
									<li>
										<a href='products.html'>Products</a>
									</li>
									<li>
										<a href='labs.html'>Pivotal Labs</a>
									</li>
									<li>
										<a href='industries.html'>Industries</a>
									</li>
									<li>
										<a href='https://content.pivotal.io/resources'>Resources</a>
									</li>
									<li>
										<a href='https://content.pivotal.io/webinars'>Webinars</a>
									</li>
									<li>
										<a href='customers.html'>Customers</a>
									</li>
									<li>
										<a href='partners.html'>Partners</a>
									</li>
									<li>
										<a href='training.html'>Training</a>
									</li>
									<li>
										<a href='platform-acceleration-lab.html'>Platform Acceleration Lab</a>
									</li>

								</ul>
							</li>
						</ul>
					</div>
					<div class='twentywide removeformobile'>
						<ul class='footer-nav'>
							<li>
								<a href='build.html'>Construye</a>
								<ul class='footer-nav-menu'>
									<li>
										<a href='platform/pcf-tutorials/getting-started-with-pivotal-cloud-foundry.html' onClick='ga(&#39;send&#39;, &#39;event&#39;, &#39;footermenu&#39;, &#39;click&#39;, &#39;gettingstartedwithpcf&#39;);'>Tutorials</a>
									</li>
									<li>
										<a href='https://run.pivotal.io'>PWS</a>
									</li>
									<li>
										<a href='pcf-dev.html'>PCF Dev</a>
									</li>
									<li>
										<a href='https://docs.pivotal.io/'>Documentation</a>
									</li>
									<li>
										<a href='https://network.pivotal.io/'>Downloads</a>
									</li>
									<li>
										<a href='https://community.pivotal.io'>Knowledge Base</a>
									</li>
									<li>
										<a href='support.html'>Support</a>
									</li>
									<li>
										<a href='platform/services-marketplace.html'>Pivotal Services Marketplace</a>
									</li>

								</ul>
							</li>
						</ul>
					</div>
					<div class='twentywide removeformobile'>
						<ul class='footer-nav'>
							<li>
								<a href='connect.html'>Conecta</a>
								<ul class='footer-nav-menu'>
									<li>
										<a href='advocates.html'>Advocates</a>
									</li>
									<li>
										<a href='events.html'>Events</a>
									</li>
									<li>
										<a href='office-hours.html'>Product Consultation</a>
									</li>
									<li>
										<a href='imapivot.html'>#ImAPivot Community</a>
									</li>
									<li>
										<a href='https://content.pivotal.io'>Blog</a>
									</li>
									<li>
										<a href='https://content.pivotal.io/podcasts'>Podcasts</a>
									</li>
									<li>
										<a href='https://content.pivotal.io/social'><span class="translation_missing" title="translation missing: en.social">Social</span></a>
									</li>
									<li>
										<a href='newsletter-subscription.html'>Newsletter</a>
									</li>
									<li>
										<a href='subscription-management.html'>Subscription Management</a>
									</li>

								</ul>
							</li>
						</ul>
					</div>
					<div class='twentywide removeformobile'>
						<ul class='footer-nav'>
							<li>
								<a href='about.html'>Company</a>
								<ul class='footer-nav-menu'>
									<li>
										<a class='active' href='about.html'>About Us</a>
										<i class='fa fa-angle-right'></i>
									</li>
									<li>
										<a href='careers.html'>Careers</a>
									</li>
									<li>
										<a href='contact.html'>Contact</a>
									</li>
									<li>
										<a href='team.html'>Executive Team</a>
									</li>
									<li>
										<a href='https://pivotal.io/investors'>Investors</a>
									</li>
									<li>
										<a href='legal.html'>Legal</a>
									</li>
									<li>
										<a href='locations.html' id='locationslink'>Locations</a>
									</li>
									<li>
										<a href='press-center.html'>Press Center</a>
									</li>

								</ul>
							</li>
						</ul>
					</div>
					<!-- <div class='twentywide'>
						<a class='removeformobile' href='https://springoneplatform.io' id='s1p-footer'>
							<img class='lazy' data-original='https://d1fto35gcfffzn.cloudfront.net/images/global/S1P-Promo-Footer.svg' data-style='background-image: url(https://d1fto35gcfffzn.cloudfront.net/images/global/S1P-Promo-Footer.svg);'>
						</a>
						<div class='social-icons'>
							<a href='https://twitter.com/pivotal'>
								<i class='fa fa-twitter'></i>
							</a>
							<a href='https://www.linkedin.com/company/3048967'>
								<i class='fa fa-linkedin'></i>
							</a>
							<a href='https://medium.com/built-to-adapt'>
								<svg class='mediumicon' height='35' viewbox='0 0 35 35' width='35' xmlns='http://www.w3.org/2000/svg'>
									<path class='a' d='M0,35V0H35V35ZM8.56,22.37a1.19,1.19,0,0,1-.32,1l-2.46,3v.4h7v-.4l-2.46-3a1.23,1.23,0,0,1-.34-1v-9l6.13,13.36h.71l5.26-13.36V24.06c0,.29,0,.34-.18.53L20,26.39v.4h9.19v-.4l-1.82-1.8a.55.55,0,0,1-.21-.53V10.94a.55.55,0,0,1,.21-.53l1.82-1.8v-.4H22.74L18.12,19.76,12.92,8.22H6.13v.4l2.14,2.64a.91.91,0,0,1,.29.77V22.37Z'></path>
								</svg>
							</a>
							<a href='https://www.youtube.com/c/pivotal'>
								<i class='fa fa-youtube-play'></i>
							</a>
							<a href='https://www.instagram.com/pivotalsoftware/'>
								<i class='fa fa-instagram'></i>
							</a>
							<a href='https://www.facebook.com/pivotalsoftware'>
								<i class='fa fa-facebook'></i>
							</a>
						</div>
					</div> -->
				</div>
				<div class='copyright'>
					<div class='container relative'>
						<hr>
						&copy; Copyright
						<script>
							var d = new Date();
							document.write(d.getFullYear());
						</script>
						ITTEC Software, Inc.
						Todos los Derechos Reservados
						<span class='removeformobile'>&bullet;</span>
						<!-- <a href='privacy-policy.html'>Privacy Policy</a>
						&bullet;
						<a href='legal.html'>Terms of Use</a> -->
						<style>#teconsent a:before{content:"•";margin: 0 3px;}</style>
						<div id="teconsent" style='display:inline-block;'></div>
						
						
						<div data-language='' id='languages'>
							<a class='language' data-language='cn' href='cn/index.html'>中文</a>
							<a class='language' data-language='jp' href='jp/index.html'>日本語</a>
							<a class='language' data-language='jp' href='indu/index.html'>हिन्दू</a>
							<a class='language' data-language='fr' href='fr/index.html'>Français</a>
							<a class='language' data-language='kr' href='en/index.html'>English</a>
							<a class='active language' href='index.html'>Español</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
<script src="js/effects.js" async="async" type="text/javascript"></script>
</html>
