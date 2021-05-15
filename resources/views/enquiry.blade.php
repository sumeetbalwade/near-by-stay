<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nery By Stay | Enquiry</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/enquiry/vendor/bootstrap/css/bootstrap.min.css') }}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/enquiry/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/enquiry/vendor/animate/animate.css') }}" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/enquiry/vendor/css-hamburgers/hamburgers.min.css') }}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/enquiry/vendor/select2/select2.min.css') }}"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/enquiry/css/util.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/enquiry/css/main.css') }}" />
    <!--===============================================================================================-->
  </head>

  <body>
    {{-- @if (!Session::has('sdata'))
        <script>window.location = "/";</script>
    @endif --}}
    @php
    $flag = 0;
    if (Session::has('sdata')) {
        $sdata = Session::get('sdata');
        $flag = 1;
    }
    
    @endphp
    <div
      class="bg-contact100"
      style="background-image: url('{{ asset('assets/enquiry/images/bg-01.jpg') }}')"
    >
      <div class="container-contact100">
        <div class="wrap-contact100">
            <div class="col">
                <div class="row">
                    <i class="fa fa-500px logo  pt-4 px-2" aria-hidden="true"></i>

                    <span class="contact100-form-title pt-4 stay-title"> NearBy Stays </span>
                </div>
              <div class="contact100-pic js-tilt" data-tilt>
                <img src="{{ asset('assets/enquiry/images/img-01.png') }}" alt="IMG" />
              </div>
            </div>
         
          <form class="contact100-form" action="/getenquiry" method="POST">
            @csrf
            <span class="contact100-form-title"> Get in touch </span>
            <input type="hidden" name="id" value="{{ $property->id }}">
            

            <div
              class="wrap-input100 validate-input"
              data-validate="Name is required"
            >
              <input
                class="input100"
                type="text"
                name="name"
                placeholder="Name" required
              />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
              </span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Mobile no is required"
            >
              <input
                class="input100"
                type="text"
                name="mobile_number"
                placeholder="Mobile Number" required
              />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
            </div>
            <div
              class="wrap-input100 validate-input"
              data-validate="Valid email is required: ex@abc.xyz"
            >
              <input
                class="input100"
                type="text"
                name="email"
                placeholder="Email" required
              />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>
            <div
              class="wrap-input100"
            >
              <input
                class="input100"
                type="text"
                name="travel_with"
                placeholder=" Travelling with" required
              />
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-users" aria-hidden="true"></i>
              </span>
            </div>

            <span class="contact100-form-title pt-4 pb-2"> Enquiry Details </span>
            <div class="row">
                <div class="col-6" >
                    <p>Property Name : <strong>{{ $property->name }}</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-6" >
                    @if ($flag == 1 && $sdata['check-in'] != '')
                    <p>Check-in : <strong>{{ $sdata['check-in'] }}</strong></p>
                    @endif    
                </div>
                <div class="col-6">
                    @if ($flag == 1 && $sdata['check-out'] != '')
                        <p>Check-out : <strong>{{ $sdata['check-out'] }}</strong></p>
                    @endif  
                </div>
            </div>

            <div class="row">
                <div class="col-6" >
                    @if ($flag == 1 && $price)
                    <p>Price : <strong>{{ $price }}</strong></p>
                    @endif  
                </div>
                <div class="col-6">
                    @if ($flag == 1 && $sdata['adult'] && $sdata['child'])
                    <p>Guest : <strong>{{ $sdata['adult'] + $sdata['child'] }}</strong></p>
                    @endif  
                </div>
            </div>

            <div class="container-contact100-form-btn">
              <button type="submit" class="contact100-form-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('assets/enquiry/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/enquiry/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/enquiry/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/enquiry/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/enquiry/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
      $('.js-tilt').tilt({
        scale: 1.1,
      });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}""></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
  </body>
</html>
