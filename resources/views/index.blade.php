

<!DOCTYPE html>
<html lang="en">

<head>
	<title>NearBy - Plan your Happiness</title>
    @include("components.head")

</head>

<body>
    @include("components.header")

    @include("components.banner")


    @include("components.nearbyplace")

    @include("components.celebrates")

    @include("components.selectorhome")

    @include("components.bestplace")

    @include("components.gallery")



    @include("components.footer")


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="lib/js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="lib/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- //banner slider -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- gallery light box -->
	<script src="lib/js/smoothbox.jquery2.js"></script>
	<!-- //gallery light box -->

	<!-- smooth scrolling -->
	<script src="lib/js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="lib/js/move-top.js"></script>
	<!-- easing -->
	<script src="lib/js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="lib/js/snacks.js"></script>

	<script src="lib/js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->



</body>

</html>
