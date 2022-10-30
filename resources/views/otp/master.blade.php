<!DOCTYPE html>
<html>
<head>
	<title>Number Auth Server Room</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
            
    @vite('resources/css/app.css')

    <!-- Styles -->
    <style> body {font-family: 'Poppins', sans-serif;} </style>

    <link crossorigin="anonymous" href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet"/>
    <script crossorigin="anonymous" defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

	<body class="p-5 min-h-screen min-w-screen  bg-purple-200">
        <div class="px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
            <div class="max-w-4xl p-6 mt-5 mx-auto bg-white rounded-lg shadow-lg">
	            
                @yield('container')

            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
    
        <script>
            const firebaseConfig = {
                apiKey: "AIzaSyCRsR5bkAQBu6t_WVSVggLYbc5Ima9q0M4",
                authDomain: "server-otp.firebaseapp.com",
                projectId: "server-otp",
                storageBucket: "server-otp.appspot.com",
                messagingSenderId: "299764472347",
                appId: "1:299764472347:web:7ddca20ce32395ec33f6be"
            };
            firebase.initializeApp(firebaseConfig);
        </script>

        <script type="text/javascript">
            window.onload = function () {
                render();
            };
            function render() {
                window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
                recaptchaVerifier.render();
                $("#verify_input").hide();
            }
            function sendOTP() {
                const number = $("#phone_number").val();
                firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
                    window.confirmationResult = confirmationResult;
                    coderesult = confirmationResult;
                    console.log(coderesult);
                    $("#phone_input").hide();
                    $("#verify_input").show();
                }).catch(function (error) {
                    $("#error").text(error.message);
                    $("#error").show();
                });
            }
            function verify() {
            const code = $("#verification").val();
            coderesult.confirm(code).then(function (result) {
                const user = result.user;
                console.log(user);
                $("#successOtpAuth").text("Auth is successful");
                $("#successOtpAuth").show();
                window.location.href = "{{url('/wizard')}}";
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
            }
        </script>

    </body>

</html>