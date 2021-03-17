//FIRST SPARKLE GROW/SHRINK
var $img = $('#spark1'),
    scale = 1.1,
    //h = $img.height(),
	h = 60,
    sh = h*scale;

function scaleUp($elt)
{
    $elt.animate({height: sh}, function ()
    {
        scaleDown($elt);
    });
}

function scaleDown($elt)
{
    $elt.animate({height: h}, function ()
    {
        scaleUp($elt);
    });
}

scaleUp($img);

//SECOND SPARKLE GROW/SHRINK
var $img2 = $('#spark2'),
    scale2 = 1.1,
    //h = $img.height(),
	h2 = 30,
    sh2 = h2*scale2;

function scaleUp2($elt2)
{
    $elt2.animate({height: sh2}, function ()
    {
        scaleDown2($elt2);
    });
}

function scaleDown2($elt2)
{
    $elt2.animate({height: h2}, function ()
    {
        scaleUp2($elt2);
    });
}

scaleUp2($img2);

//THIRD SPARKLE GROW/SHRINK
var $img3 = $('#spark3'),
    scale3 = 1.1,
    //h = $img.height(),
	h3 = 50,
    sh3 = h3*scale3;

function scaleUp3($elt3)
{
    $elt3.animate({height: sh3}, function ()
    {
        scaleDown3($elt3);
    });
}

function scaleDown3($elt3)
{
    $elt3.animate({height: h3}, function ()
    {
        scaleUp3($elt3);
    });
}

scaleUp3($img3);

//THIRD EDIT SPARKLE GROW/SHRINK
var $img4 = $('#spark4'),
    scale4 = 1.1,
    //h = $img.height(),
	h4 = 20,
    sh4 = h4*scale4;

function scaleUp4($elt4)
{
    $elt4.animate({height: sh4}, function ()
    {
        scaleDown4($elt4);
    });
}

function scaleDown4($elt4)
{
    $elt4.animate({height: h4}, function ()
    {
        scaleUp4($elt4);
    });
}

scaleUp4($img4);

