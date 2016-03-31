</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#divPrenotazione").click(function () {
            $("#panelPrenotazione").toggleClass("show");
            $("#overlay").toggleClass("show");
        });
        $("#divPrenotazioneTop").click(function () {
            $("#panelPrenotazione").addClass("show");
            $("#overlay").addClass("show");
        });
        $("#closeDivPrenotazione").click(function() {
            $("#panelPrenotazione").removeClass("show");
            $("#overlay").removeClass("show");
        })
    });
</script>
</body>
</html>