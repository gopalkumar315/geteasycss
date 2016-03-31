<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 3/30/2016
 * Time: 11:10 PM
 */


$txt = 'Your profile has been registered with gharvasao.com. Please contact +(91)-8699126126,+(91)-8556994553';
$txt = urlencode($txt);
$response = file_get_contents("http://103.27.87.89/send.php?usr=3106&pwd=123456&ph=8591468789&sndr=AxisIn&text=$txt");
exit;
$cssstyle = '';

// setting margin
for($i=0;$i<=100;$i++){

    $cssstyle .= ".mtb-$i{margin:$i"."px 0 !important;}";
    $cssstyle .= ".mlr-$i{margin:0 $i"."px  !important;}";
    $cssstyle .= ".mt-$i{margin-top:$i"."px !important;}";
    $cssstyle .= ".mb-$i{margin-top:$i"."px !important;}";
    $cssstyle .= ".ml-$i{margin-top:$i"."px !important;}";
    $cssstyle .= ".mt-$i{margin-top:$i"."px !important;}";
}

// setting margin
for($i=0;$i<=100;$i++){

    $cssstyle .= ".ptb-$i{padding:$i"."px 0 !important;}";
    $cssstyle .= ".plr-$i{padding:0 $i"."px !important;}";
    $cssstyle .= ".pt-$i{padding-top:$i"."px !important;}";
    $cssstyle .= ".pb-$i{padding-top:$i"."px !important;}";
    $cssstyle .= ".pl-$i{padding-top:$i"."px !important;}";
    $cssstyle .= ".pt-$i{padding-top:$i"."px !important;}";
}

// setting font-size
for($i=0;$i<=100;$i++){
    $cssstyle .= ".ft-$i{font-size:$i"."px !important;}";
}
$cssstyle.= '.fw-n{font-weight:normal !important;}';
$cssstyle.= '.fw-b{font-weight:bold !important;}';
$cssstyle.= '.fw-l{font-weight:light !important;}';


for($i=0;$i<=100;$i++){
    $cssstyle .= ".ft-$i{font-size:$i"."px !important;}";
}

//border radius
for($i=0;$i<=50;$i++){
    $px = $i.'px';
    $cssstyle .= ".r-$i{
        -webkit-border-radius: $px;
        -moz-border-radius: $px;
        border-radius: $px;
    }";

    $cssstyle .= ".rtl-$i{
       -webkit-border-top-left-radius: $px;
        -moz-border-radius-topleft: $px;
        border-top-left-radius: $px;
    }";

    $cssstyle .= ".rbl-$i{
       -webkit-border-bottom-left-radius: $px;
        -moz-border-radius-bottomleft: $px;
        border-bottom-left-radius: $px;
    }";

    $cssstyle .= ".rtr-$i{
        -webkit-border-top-right-radius: $px;
        -moz-border-radius-topright: $px;
        border-top-right-radius: $px;
    }";

    $cssstyle .= ".rbr-$i{
       -webkit-border-bottom-right-radius: $px;
        -moz-border-radius-bottomright: $px;
        border-bottom-right-radius: $px;
    }";
}

// border
for($i=0;$i<=50;$i++){
    $px = $i.'px';
    $cssstyle.= ".bd{border:$px solid #000;}";
    $cssstyle.= ".bdb{border-bottom:$px solid #000;}";
    $cssstyle.= ".bdl{border-left:$px solid #000;}";
    $cssstyle.= ".bdr{border-right:$px solid #000;}";
    $cssstyle.= ".bdt{border-top:$px solid #000;}";
}

$socialColor = file_get_contents('social.css');
$cssstyle.=$socialColor;

// border
for($i=0;$i<=50;$i++){
    $px = $i.'px';
    $cssstyle.= ".bd{border:$px solid #000;}";
    $cssstyle.= ".bdb{border-bottom:$px solid #000;}";
    $cssstyle.= ".bdl{border-left:$px solid #000;}";
    $cssstyle.= ".bdr{border-right:$px solid #000;}";
    $cssstyle.= ".bdt{border-top:$px solid #000;}";
}


///setting effects
for($i=0;$i<=50;$i++){
    $px = $i.'s';
    $cssstyle .= ".effect-$px{
        -webkit-transition: all $px ease;
        -moz-transition: all $px ease;
        -ms-transition: all $px ease;
        -o-transition: all $px ease;
        transition: all $px ease;
    }";
}


echo $cssstyle;
