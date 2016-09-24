<html xmlns="http://www.w3.org/1999/html">
<div class="jumbotron text-center">
    <h1>Text To Speech (TTS)</h1>

</div>
<head>
    <script>
        // This demo is licensed under the GNU GPL.
    </script>
    <script src="<?php echo base_url('speakClient.js')?>"></script>
</head>
<body>

<form onsubmit="speak(text.value, { amplitude: amplitude.value, wordgap: workdgap.value, pitch: pitch.value, speed: speed.value }); return false">
   <div class="col-md-12">
    <label for="inputdefault">Text: </label> <input  class="form-control" type="text" name="text" size=50 value="Never gonna give, you, up.">
   </div>
    </br>
    <div class="col-md-12 text-center"></br></br></div>
    <div class="col-md-12 text-center">
        <div class="col-md-3">
    <label for="inputdefault">Amplitude: </label> <input class="form-control"  type="text" name="amplitude" size=5 value="100">
        </div>
        <div class="col-md-3">
    <label for="inputdefault">Pitch: </label><input class="form-control"  type="text" name="pitch" size=5 value="50">
        </div> <div class="col-md-3">
    <label for="inputdefault">Speed: </label><input class="form-control"  type="text" name="speed" size=5 value="175">
        </div>   <div class="col-md-3">
    <label for="inputdefault">Word gap: </label><input class="form-control"  type="text" name="workdgap" size=5 value="0">
        </div>
    <div class="col-md-12 text-center"></br></br></div>
    <div class="col-md-12 text-center">
    <input type="submit"  class="btn btn-primary btn-lg" value="SPEAK!">
        </div>
</form>
<hr>




<div id="audio"></div>
</body>
</html>
<script>

    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from
                                           //previously active menu item
        $('#tts').addClass('active');
        //for demo
        //$('#demo').addClass('active');
        //for sale
        //$('#sale').addClass('active');
    });
</script>


