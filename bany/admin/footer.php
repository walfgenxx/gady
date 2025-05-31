
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
              <p>Copyright &copy; <?= $sitename;?>, Designed &amp; Developed by <a href="https://m.me/donkhodex" target="_blank">Khodex Adey</a> <?= date('Y');?></p>
            </div>
        </div>

        
    </div>
    <!-- Required vendors -->
   <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Swiper-js -->
	<script src="vendor/swiper/js/swiper-bundle.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script>
var el = document.querySelector('input.khodexcomma');
el.addEventListener('keyup', function (event) {
  if (event.which >= 37 && event.which <= 40) return;

  this.value = this.value.replace(/\D/g, '')
                         .replace(/\B(?=(\d{3})+(?!\d))/g, ',');
});</script>
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<style>
.DZ-bt-buy-now {
	display: none;
}
.DZ-bt-support-now {
	display: none;
}
a.DZ-bt-buy-now {
	display: none;
}
a.DZ-bt-support-now {
	display: none;
}
</style>
	<script src="vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
	
	<script>
		$(function () {
		  $("#datepicker").datepicker({ 
				autoclose: true, 
				todayHighlight: true
		  }).datepicker('update', new Date());
		});

	</script>
	<script>
	 var swiper = new Swiper(".front-view-slider", {
        slidesPerView: 5,
        spaceBetween: 30,
		centeredSlides: true,
		loop:true,
        pagination: {
          el: ".room-swiper-pagination",
          clickable: true,
        },
		breakpoints: {
		  360: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
		  575: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
          },
		  1400: {
            slidesPerView: 5,
            spaceBetween: 20,
          },
		  1600: {
            slidesPerView: 5,
            spaceBetween: 30,
          },
		}
      });
	</script>
	<script>
		(function () {
		  'use strict'

		  // Fetch all the forms we want to apply custom Bootstrap validation styles to
		  var forms = document.querySelectorAll('.needs-validation')

		  // Loop over them and prevent submission
		  Array.prototype.slice.call(forms)
			.forEach(function (form) {
			  form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				  event.preventDefault()
				  event.stopPropagation()
				}

				form.classList.add('was-validated')
			  }, false)
			})
		})()

	</script>
</body>
</html>