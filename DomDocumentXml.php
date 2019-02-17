<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/14
 * Time: 22:43
 */

/**
 * @param string $path
 */
function validateXmlContentNew($path) {
    $doc = new  DOMDocument();
    $doc->load($path);
    //获取LoandFont后面的id
    //echo  $doc->getElementsByTagName("LoadFont")->item(0)->attributes->item(0)->nodeValue;
    //获取LoandFont后面的URI
    //echo  $doc->getElementsByTagName("LoadFont")->item(0)->attributes->item(1)->nodeValue;
    //修改URI的值
    //$doc->getElementsByTagName("LoadFont")->item(0)->attributes->item(1)->nodeValue = 'aa';
    //$doc->save($path);
    //获取movie的值
    //$movieTitle =   $doc->getElementsByTagName('MovieTitle')->item(0)->nodeValue;
    // 循环Subtitle
    $subtitleDom =  $doc->getElementsByTagName('Subtitle');

    foreach($subtitleDom as $sub) {
        echo $text = $sub->getElementsByTagName("Text")->item(0)->nodeValue;
        echo '</br>';
    }
}

validateXmlContentNew('Popcorn_TH-2D_S_f-g_ch_R1.xml');
