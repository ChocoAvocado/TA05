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
<script>
    $(document).ready(function(){
        $("#modalperpanjangan").modal("show");
    });
</script>

<!--mengaktifkan modal perpanjangan-->
<?php if($show_modal_perpanjangan):?>
<script>
    $(document).ready(function(){
        $('#modalperpanjangan').modal('show');
    });
</script>
<?php endif; ?>

<!-- <script> #untuk tombol perpanjangan, masih belum dipakai
$('#saveButton').on('click', function() {

            var $collectedIsVisible = '';

            if ($('#testInput').is(':checked')) {

                $collectedIsVisible = $('#testInput').attr('value', 'true');
            } else {
                $collectedIsVisible = $('#testInput').attr('value', 'false');
            }});
</script> -->