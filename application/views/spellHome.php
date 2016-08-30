<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<div class="jumbotron text-center">
    <h1>SPELL CHECKER</h1>
    <h3>(en_US)</h3>

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

    <h3>Type a word to check spelling mistakes</h3>

    <form role="form" name="myform" id="myform" action="<?php echo base_url('home/checkSpelling')?>" method="post">
        <div class="form-group">

            <textarea class="form-control" rows="2" name="val1" id="val1" placeholder="type a word..."><?php if(isset($id)){echo $id;}?></textarea>
        </div>
        <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-lg" value="check">Check Spells Mistakes</button>
            </div>
    </form>
</div>

<script>

    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from
                                           //previously active menu item
        $('#spell').addClass('active');
        //for demo
        //$('#demo').addClass('active');
        //for sale
        //$('#sale').addClass('active');
    });
</script>


<script>

</script>