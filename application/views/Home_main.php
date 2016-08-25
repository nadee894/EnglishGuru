<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/25/2016
 * Time: 8:23 AM
 */
?>
</br>
</br>
</br>

<body>
<H2 class="text-center">Spell Checker</H2>
</br>
<p class="text-center">Online spell checking has never been easier. Simply type (or paste in) your text  and hit the Check Spell Mistakes button. The spell checker will show  spelling mistakes and show our suggestions.

</p>

<div class="text-center">





    <form action="<?php echo site_url('home/checkSpell')?>">
        <input type="submit" class="btn btn-info btn-lg" value="Spell Checker" />
    </form>
</div>

</br>
</br>
</br>


<H2 class="text-center">Grammar Checker</H2>
</br>
<p class="text-center">Online Grammar checking has never been easier. Simply type (or paste in) your sentence  and hit the Check Grammar Mistakes button. The grammar checker will show  spelling mistakes,grammar mistakes and show error and  our suggestions.

</p>

<div class="text-center">





    <form action="<?php echo site_url('home/grammarChecker')?>">
        <input type="submit" class="btn btn-info btn-lg" value="Grammar Checker" />
    </form>
</div>
</body>