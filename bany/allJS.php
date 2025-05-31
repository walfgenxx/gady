<!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
    </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style>
	#hidden {
  display: none;
}
#hidden2 {
  display: none;
}
.is-hidden{
  display: none;
}
</style>
<script>
 $(document).ready(()=>{
  $('.js-revealer').on('change', function(){
    var $select = $(this);
    var $selected = $select.find('option:selected');
    var hideSelector = $selected.data('r-hide-target');
    var showSelector = $selected.data('r-show-target');
    
    $(hideSelector).addClass('is-hidden');
    $(showSelector).removeClass('is-hidden');
  });
});
 </script>
<script>
var el = document.querySelector('input.khodexcomma');
el.addEventListener('keyup', function (event) {
  if (event.which >= 37 && event.which <= 40) return;

  this.value = this.value.replace(/\D/g, '')
                         .replace(/\B(?=(\d{3})+(?!\d))/g, ',');
});</script>

<script>$(document).ready(function () {
    $('#example').DataTable();
});</script>
<script>
function Hide() {
            if (document.getElementById('main')) {

                if (document.getElementById('main').style.display == 'none') {
                    document.getElementById('main').style.display = 'block';
                    document.getElementById('hidden').style.display = 'none';
                }
                else {
                    document.getElementById('main').style.display = 'none';
                    document.getElementById('hidden').style.display = 'block';
                }
            }
}
</script>
<script>
function Hide2() {
            if (document.getElementById('main2')) {

                if (document.getElementById('main2').style.display == 'none') {
                    document.getElementById('main2').style.display = 'block';
                    document.getElementById('hidden2').style.display = 'none';
                }
                else {
                    document.getElementById('main2').style.display = 'none';
                    document.getElementById('hidden2').style.display = 'block';
                }
            }
}
</script>
<?php if(isset($_SESSION['user']['userid'])){echo html_entity_decode($ad);}?>
</body>
</html>