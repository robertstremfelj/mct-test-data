<?php
$hellobar_data = $args['to_hellobar'];

if (isset($hellobar_data['php_active'])) { ?>

    <!-- top banner -->
    <div id="pp2_barwrap" class="no-print">

		<div style="background-color: #313c52;" class="hidden md:block w-full text-white text-center p-3.5 text-sm font-bold">
		<span id="text">Još samo <span id="demo">00:00:00</span> ⏱️ <a href="https://www.fittijelo.com/shop/">Klikni ovdje i iskoristi Black Friday popuste do -55% 👉</a></span>
		</div>

		<div style="background-color: #313c52;" class="md:hidden w-full text-white text-center p-3.5 text-sm font-bold">
		<span id="text"><span id="demo2">00:00:00</span> ⏱️ Black Friday popusti 🖤<br><a href="https://www.fittijelo.com/shop/">Klikni ovdje i uštedi do -55% 👉</a></span>
		</div>

	</div>
    <!-- end of top banner -->

    <script>
	// Set the date we're counting down to
	var countDownDate = new Date("Nov 30, 2021 23:59:59").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get today's date and time
	  var now = new Date().getTime();

	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;

	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  // Display the result in the element with id="demo"
	  var demo = document.getElementById("demo");
	  if(demo != null) {
		  demo.innerHTML = days + " Dana " + hours + " Sati "
	  + minutes + " Minuta " + seconds + " Sekundi ";
	  }

	  // If the count down is finished, write some text
	  if (distance < 0) {
		clearInterval(x);
		if(demo != null) {
			demo.innerHTML = "00:00:00";
		}
	  }
	}, 1000);
	</script>

	<script>
	// Set the date we're counting down to
	var countDownDate = new Date("Nov 30, 2021 23:59:59").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get today's date and time
	  var now = new Date().getTime();

	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;

	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  // Display the result in the element with id="demo"
	  var demo2 = document.getElementById("demo2");
	  if(demo2 != null) {
		  demo2.innerHTML = days + " Dana " + hours + " Sati "
	  + minutes + " Minuta " + seconds + " Sekundi ";
	  }

	  // If the count down is finished, write some text
	  if (distance < 0) {
		clearInterval(x);
		if(demo2 != null) {
			demo2.innerHTML = "00:00:00";
		}
	  }
	}, 1000);
	</script>

<?php } else { ?>

    <?php if (isset($hellobar_data['desc'])) { ?>

        <div id="pp2_barwrap" class="no-print">
            <div style="background-color: #b48e2f;" class="hidden md:block w-full text-white text-center p-3.5 text-sm font-bold">
                <?php echo $hellobar_data['desc']; ?>
            </div>
        </div>

    <?php } ?>

<?php } ?>
