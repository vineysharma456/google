
<?php    
$bar = array(
    "birds" => array(
        "Eagle",
        "Parrot",
        "Swan"
    ),
    "mammals" => array(
        "Human",
        "cat" => array(
            "Lion",
            "Tiger",
            "Jaguar"
        ),
        "Elephant",
        "Monkey"
    ),
    "reptiles" => array(
        "snake" => array(
            "Cobra" => array(
                "King Cobra",
                "Egyptian cobra"
            ),
            "Viper",
            "Anaconda"
        ),
        "Crocodile",
        "Dinosaur" => array(
            "T-rex",
            "Alamosaurus"
        )
    )
);

function recursive($bar){
    foreach($bar as $key => $value){
        //$value is an array.
        if(is_array($value)){
            //loop through it.
            recursive($value);  
        } else{
            //It is not an array, so print it out.
            echo $value.',';
        }
    }
} 
echo  recursive($bar);
?>