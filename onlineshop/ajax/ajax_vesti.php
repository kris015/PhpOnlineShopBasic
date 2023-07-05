<?php
if(isset($_POST['sajt'])){
    $xml=simplexml_load_file($_POST['sajt']);
    $kanal=$xml->channel;
    /*echo "<h3>{$kanal->title}</h3>";
    echo "<div>{$kanal->description}</div>";
    echo "<img src='{$kanal->image->url}' height='30'><br>";
    $datum=date("d.m.Y H:i:s", strtotime($kanal->pubDate));
    echo "<i>{$datum}</i>";
    echo "<hr>";*/
    $vesti=$kanal->item;
    //echo "Broj vesti: {$vesti->count()}<br>";
    $i=0;
    foreach($vesti as $vest){
        echo "<div class='najnovije'>";
        echo "<div><a href='{$vest->link}' target='_blank'>{$vest->title}</a></div>";
        //echo "<p>{$vest->description}</p>";
        echo "<div><i>{$vest->pubDate}</i></div>";
        //echo "<a href='{$vest->link}' target='_blank'>Link ka vesti</a>";
        echo "</div>";
        $i++;
        if($i==5)break; 
    }
}
?>