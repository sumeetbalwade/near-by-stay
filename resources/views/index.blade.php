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

<style>
/* for desktop */
.whatsapp_float {
	position:fixed;
	width:60px;
	height:60px;
	bottom:80px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
        font-size:30px;
	box-shadow: 2px 2px 3px #999;
        z-index:100;
}

.whatsapp-icon {
	margin-top:16px;
}
/* for mobile
@media screen and (max-width: 767px){
     .whatsapp-icon {
	 margin-top:10px;
     }
    .whatsapp_float {
        width: 40px;
        height: 40px;
        bottom: 20px;
        right: 10px;
        font-size: 22px;
    }
} */
</style>
<a href="https://wa.me/+918888987679" class="whatsapp_float d-flex justify-content-center align-items-center" target="_blank"> <i class="fab fa-whatsapp"></i></a>

   
    {{-- <!-- gallery light box -->
    <script src="lib/js/smoothbox.jquery2.js"></script>
    <!-- //gallery light box --> --}}

    <!-- smooth scrolling -->
    <script src="lib/js/SmoothScroll.min.js"></script>
    <!-- //smooth scrolling -->

    <!-- move-top -->
    <script src="lib/js/move-top.js"></script>
    <!-- easing -->
    <script src="lib/js/easing.js"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="lib/js/snacks.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <!-- //Js files -->



</body>

</html>
