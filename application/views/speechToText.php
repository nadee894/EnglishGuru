<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


<div class="jumbotron text-center">
    <h1>Speech To Text (STT)</h1>

</div>

</br>
</br>
<!--<div class="col-md-12">-->
<!--    <div class="col-md-3"> </div>-->
<!--<form name="myform" id="myform" action="home/checkSpelling/" method="post">-->
<!--    Enter your word or words-->
<!--    <input type="text" name="val1" id="val1" value="--><?php // if(isset($id)){echo $id;}?><!--">-->
<!---->
<!--    </br>-->
<!--    </br>-->
<!---->
<!--    <button type="submit" class="btn btn-primary" value="check">Check</button>-->
<!---->
<!---->
<!--</form>-->
<!--    <div class="col-md-3"> </div>-->
<!--</div>-->


<div class="container">

    <h3>Hold Microphone and Speak</h3>

    <form role="form" name="myform" id="myform" action="#" method="post">
        <div class="form-group">



            <input class="form-control" type="text" x-webkit-speech />
            </br>     </br>

            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="10"
                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span class="sr-only">70% Complete</span>
                </div>
            </div>
            </br>     </br>
            <div class="player text-center">
                <button type="button" id="button_play" class="btn" onclick='buttonPlayPress()'>
                    <i class="fa fa-play"></i>
                </button>

                <button type="button" id="button_stop" class="btn" onclick='buttonStopPress()'>
                    <i class="fa fa-stop"></i>
                </button>


            </div>
        </div>



    </form>
</div>
<script>
if (document.createElement("input").webkitSpeech === undefined) {
alert("Speech input is not supported in your browser.");
}
</script>
<script>

    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from
                                           //previously active menu item
        $('#sst').addClass('active');
        //for demo
        //$('#demo').addClass('active');
        //for sale
        //$('#sale').addClass('active');
    });
</script>

<script>var state = 'stop';

    function buttonBackPress() {
        console.log("button back invoked.");
    }

    function buttonForwardPress() {
        console.log("button forward invoked.");
    }

    function buttonRewindPress() {
        console.log("button rewind invoked.");
    }

    function buttonFastforwardPress() {
        console.log("button fast forward invoked.");
    }

    function buttonPlayPress() {
        if(state=='stop'){
            state='play';
            var button = d3.select("#button_play").classed('btn-success', true);
            button.select("i").attr('class', "fa fa-pause");
        }
        else if(state=='play' || state=='resume'){
            state = 'pause';
            d3.select("#button_play i").attr('class', "fa fa-play");
        }
        else if(state=='pause'){
            state = 'resume';
            d3.select("#button_play i").attr('class', "fa fa-pause");
        }
        console.log("button play pressed, play was "+state);
    }

    function buttonStopPress(){
        state = 'stop';
        var button = d3.select("#button_play").classed('btn-success', false);
        button.select("i").attr('class', "fa fa-play");
        console.log("button stop invoked.");
    }</script>