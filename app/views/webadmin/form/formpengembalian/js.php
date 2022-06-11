
<!-- DAFTAR MODAL -->


<!--mengaktifkan modal pencarian gagal-->
<script>
$(document).ready(function(){
    <?php if(getUrlParam("pengembalian_pencarian_gagal")){?>
$("#modalperpanjangangagal_pencarian").modal("show");
<?php }; ?>
})
</script>

<!--mengaktifkan modal perpanjangan gagal (setelah 2 kali perpanjangan)-->
<script>
$(document).ready(function(){
    <?php if(getUrlParam("perpanjangan_gagal")){?>
$("#modalperpanjangangagal").modal("show");
<?php }; ?>
})
</script>

<!--mengaktifkan modal perpanjangan sukses-->
<script>
$(document).ready(function(){
    <?php if(getUrlParam("perpanjangan_sukses")){?>
$("#modalperpanjangansukses").modal("show");
<?php }; ?>
})
</script>

<!--mengaktifkan modal pengembalian sukses-->
<script>
$(document).ready(function(){
    <?php if(getUrlParam("pengembalian_sukses")){?>
$("#modalpengembaliansukses").modal("show");
<?php }; ?>
})
</script>


<!-- END OF DAFTAR MODAL -->


<script>
var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({
            video: true
        })
        .then(function(stream) {
            video.srcObject = stream;
        })
        .catch(function(err0r) {
            console.log("Something went wrong!");
        });
}
</script>

<script>
$('#picker').datetimepicker({

    timepicker: false,
    datepicker: true,
    format: 'd-m-Y',
    value: 'today'

})
</script>

<script>
$(function() {
    $('#picker').datetimepicker({
        minDate: new Date()
    });
});
</script>
<!-- <script> #untuk tombol perpanjangan, masih belum dipakai
$('#saveButton').on('click', function() {

            var $collectedIsVisible = '';

            if ($('#testInput').is(':checked')) {

                $collectedIsVisible = $('#testInput').attr('value', 'true');
            } else {
                $collectedIsVisible = $('#testInput').attr('value', 'false');
            }});
</script> -->