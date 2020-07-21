<!DOCTYPE html>


<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Givings - CeAbuja Ministry Center</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="" />

<meta name="keywords" content="" />



<!-- Google Fonts -->

<link href="/https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic" rel='stylesheet' type='text/css'>

<link href="/https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic" rel='stylesheet' type='text/css'>

<!-- Styles -->

<link href="/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />

<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="/css/owl-carousel.css" type="text/css" />

<link rel="stylesheet" href="/css/style.css" type="text/css" />

<link href="/css/responsive.css" rel="stylesheet" type="text/css" />



<link rel="stylesheet" type="text/css" href="/css/colors/red.css" title="color1" />

<link rel="alternate stylesheet" type="text/css" href="/css/colors/wedgewood.css" title="color2" />

<link rel="alternate stylesheet" type="text/css" href="/css/colors/blue.css" title="color3" />

<link rel="alternate stylesheet" type="text/css" href="/css/colors/green.css" title="color4" />

<link rel="alternate stylesheet" type="text/css" href="/css/colors/darkgreen.css" title="color5" />

	<link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" type="text/css" media="all" />

</head>



<body>

<div class="theme-layout">

<!--- HEADER -->



<!-- Responsive Header -->

<!-- Responsive Menu -->
	@include("inc.header")



<div class="page-top">

	<div class="parallax" style="background:url(images/parallax1.jpg);"></div>	

	<div class="container"> 

		<h1><span>GIVINGS</span></h1>



	</div>

</div>



<section>

	<div class="block">

		<div class="container">

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">

						<div class="checkout-block">

							<h5>Please Fill the form accurately</h5>

							@if(Auth::check())

								<div class="alert alert-warning">If you have a membership account, please click
									<a href="/{{route("members_givings")}}"><button class="btn btn-info"> here</button></a> to make
									your givings
								</div>
							@endif
							<div class="checkout-content">



								<div>

									<div class="row">

										<div class="col-md-6">

											<h4 style="font-size: 12px; margin-bottom: 12px; font-weight: bold">First Name</h4>

										<input type="text" name="last_name" class="form-control" placeholder="" value="@if(Auth::check()){{Auth::user()
                                               ->first_name}}@endif" />

									</div>
										<div class="col-md-6">
											<h4 style="font-size: 12px; margin-bottom: 12px; font-weight: bold">Last Name</h4>

											<input type="text" name="first_name" class="form-control" placeholder="" value="@if(Auth::check()){{Auth::user()
                                               ->last_name}}@endif"/>

										</div>
										<div class="space"></div>

										<div class="col-md-12">
											<h4 style="font-size: 12px; margin-bottom: 12px; font-weight: bold">Email</h4>
											<input type="email" name="email" class="form-control" placeholder="" value="@if(Auth::check()){{Auth::user()
                                               ->email}}@endif"/>
										</div>
										<br />

										<div class="col-md-12">
											<div class="space"></div>
											<h4 style="font-size: 12px; margin-bottom: 12px; font-weight: bold">Purpose of Giving</h4>
										</div>

										<div class="col-md-12">
											<select  class="form-control" name="purpose" id="mycategory">
												<option value="">Please Select a category </option>
												<option value="Offering">Offering</option>
												<option value="Partnership">Partnership</option>
												<option value="Special Projects">Special Projects</option>
											</select>
										</div>

										<div id="subHolder">

										</div>

										<div class="col-md-12">
											<div class="space"></div>
											<h4 style="font-size: 12px; margin-bottom: 12px; font-weight: bold">Amount</h4>

											<input type="number" name="amount" id="amount" class="form-control"
												   placeholder="amount" />

										</div>
										<div class="space"></div>
										<div class="col-md-12">
											<input class="pull-left" type="submit"  value="PAY" onclick="payWithPaystack()
" />
										</div>


									</div>


								</div>

 							</div>

						</div><!-- LOGIN -->
				</div>
				<div class="col-md-2"></div>

			</div>

		</div>

	</div>

</section>



<!-- FOOTER -->



@include("inc.footer")<!-- BOTTOM FOOTER STRIP -->


</div>



	<!-- SCRIPTS-->

	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="/js/modernizr.custom.17475.js"></script>



	<script src="/js/jquery.1.10.2.js" type="text/javascript"></script>

<script src="/js/notify.js"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>

    <script src="/js/bootstrap.min.js"></script>

	<script src="/js/jquery.poptrox.min.js" type="text/javascript"></script>

	<script src="/js/enscroll-0.5.2.min.js"></script>

    <script src="/js/script.js"></script>

    <script src="/js/styleswitcher.js"></script>

	<script type="text/javascript" src="/js/jquery.downCount.js"></script> 

	<script src="/js/jquery.minimalect.min.js" type="text/javascript"></script>


	<script>


        $("#suboffering").hide();
        $("#subpartnerships").hide();
        $("#subspecial").hide();

        $("#mycategory").change(function (){



            var amountex =   $(this).children("option:selected").attr("value");

            var suboffering = `<div class="col-md-12" id="suboffering">
            <div class="space"></div>
                <h4 style="font-size: 12px; margin-bottom: 12px; font-weight: bold">Offering Options</h4>
            <select class="form-control" name="subcat" id="subcat">
                <option value="">Please select</option>
            	<option value="Offering">Offering</option>
                <option value="Tithe">Tithe</option>
                <option value="Seed">Seed</option>
                <option value="Thanksgiving">Thanksgiving</option>
                <option value="First fruit">First fruit</option>
            	<option value="Cell Offering">Cell Offering</option>
            </select>
            </div>`


			var subpartnerships = `<div class="col-md-12" id="subpartnerships">
											<div class="space"></div>
											<h4 style="font-size: 12px; margin-bottom: 12px; font-weight: bold">Partnership Options</h4>
											<select class="form-control" name="subcat" id="subcat">
												<option value="">Please select</option>
												<option value="Rhapsody of Realities">Rhapsody of Realities</option>
												<option value="Healing School">Healing School</option>
												<option value="Ministry Program Sponsorship">Ministry Program Sponsorship</option>
												<option value="Loveworld Plus">Loveworld Plus</option>
												<option value="Innercity Mission">Innercity Mission</option>
												<option value="Campus Ministry">Campus Ministry</option>
												<option value="LTM and Loveworld Radio">LTM and Loveworld Radio</option>
												<option value="Loveworld Music and Arts Ministry">Loveworld Music and Arts Ministry</option>
											</select>
										</div>`

			var subspecial = `<div class="col-md-12" id="subspecial" >
											<div class="space"></div>
											<h4 style="font-size: 12px; margin-bottom: 12px; font-weight: bold">Special Projects Options</h4>
											<select class="form-control" name="subcat" id="subcat">
												<option value="">Please select</option>
												<option value="Building Project">Building Projects</option>
												<option value="Other Project">Other Projects</option>
											</select>
										</div>`

           // console.log(amountex)

            if(amountex == "Offering"){
                $("#subHolder").html(suboffering);
            }

            if(amountex == "Partnership"){
                $("#subHolder").html(subpartnerships);

            }

            if(amountex == "Special Projects"){
                $("#subHolder").html(subspecial);

            }

        });




        $(document).ready(function(){

			$("#country").minimalect({ theme: "bubble", placeholder: "Select Country" });

			$("#state").minimalect({ theme: "bubble", placeholder: "Select State" });

			$("#country2").minimalect({ theme: "bubble", placeholder: "Select Country" });

			$("#state2").minimalect({ theme: "bubble", placeholder: "Select State" });

		});

	</script>

<script>
    function payWithPaystack(){



        var first_name = $('input[name=first_name]').val();
        var last_name = $('input[name=last_name]').val();
        var email = $('input[name=email]').val();
        var category = $( "#mycategory" ).val();
        var subcategory =  $( "#subcat" ).val();
        var amount = $('input[name=amount]').val();



        if(first_name != "" && last_name != "" && email != "" && category != "" && subcategory != "" && amount !=
            ""){

            NProgress.start();
            event.preventDefault();

            $.notify("Connecting to gateway... Please wait ...", {className: 'warning',autoHide: true,} );
            //$.notify("Connecting to gateway... Please wait ...", "warn");
            $("#payee").hide(500);

            var handler = PaystackPop.setup({
                key: 'pk_live_afc36d2acd1833682eae90bcf41170ebe8198c1d',
                email: email,
                amount: amount * 100,
                currency: "NGN",
                //ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                metadata: {
                    custom_fields: [
                        {
                            display_name: "Mobile Number",
                            variable_name: "mobile_number",

                        }
                    ]
                },
                callback: function(response){
                    $.notify("... Verifying Payment ... Please wait ...", {className: 'warning',
                        autoHide: true,} );
                    submit_form(response.reference)
                    //alert('success. transaction ref is ' + response.reference);
                },
                onClose: function(){
                    $.notify("...Payment window closed", {className: 'warning',
                        autoHide: true,} );
                }
            });

            handler.openIframe();

            // here we will handle errors and validation messages


            // here we will handle errors and validation messages
        }

        // stop the form from submitting the normal way and refreshing the page

        else{
            $.notify("All fields are compulsory", {className: 'error',
                autoHide: true,} );

        }



    }



    function submit_form(response) {


        var first_name = $('input[name=first_name]').val();
        var last_name = $('input[name=last_name]').val();
        var email = $('input[name=email]').val();
        var category = $( "#mycategory" ).val();
        var subcategory =  $( "#subcat" ).val();
        var amount = $('input[name=amount]').val();

        var formData = {

            'first_name'     : first_name,
            'last_name'      : last_name,
            'email'          : email,
            'category'       : category,
            'subcategory'    : subcategory,
            'amount'         : $('input[name=amount]').val(),
			'reference'      :response
        };

        //alert("I got here");

        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '/verify/payment', // the url where we want to POST
            data        : formData,
            // dataType    : 'json', // what type of data do we expect back from the server
            encode          : true
        })

        //  NProgress.start()
        // using the done promise callback
            .done(function(data) {

                // alert("I dididid")
                // log data to the console so we can see
                // console.log("I got here too just now");
//
//                    //if number is on kingschat then process
                if(data.status){
                    NProgress.done();
                    $.notify(data.message, {className: 'success',autoHide: false,
                    } );

                    //reset form
                    $('input[name=first_name]').val("");
                    $('input[name=last_name]').val("");
                    $('input[name=email]').val("");
					$('input[name=amount]').val("");

                }else{
                    NProgress.done();
                    $.notify(data.message, {className: 'error',autoHide: false,
                    } );
                    $("#payee").show(500);
                }

                // here we will handle errors and validation messages
            });



    }
</script>


@include("inc.scripts")
</body>