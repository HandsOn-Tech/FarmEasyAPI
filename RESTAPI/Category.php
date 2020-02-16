<?php 
    require("dbconn.php");

    $query =  "Select * from Category";
    $result = mysqli_query($link, $query);
    $array = array();
    if($result){
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $array[$i] = $row;
            $i++;
        }
        echo json_encode($array);
    }else{
        echo array("errorCode"=>405, "errorDescription"=>"Error with cat.");
    }


/*
    [
{
"id": "1",
"catname": "Pesticides",
"catdesc": "Pesticides are substances that are meant to control pests, including weeds. The term pesticide includes all of the following: herbicide, insecticides nematicide, molluscicide, piscicide, avicide, rodenticide, bactericide, insect repellent, animal repellent, antimicrobial, and fungicide",
"catimag": "https://5.imimg.com/data5/SP/HJ/MY-3940029/pesticides-residue-testing-services-500x500.jpg"
},
{
"id": "2",
"catname": "Manure",
"catdesc": "Manure is organic matter that is used as organic fertilizer in agriculture. Most manure consists of animal feces; other sources include compost and green manure.",
"catimag": "https://5.imimg.com/data5/AN/QT/MY-4225278/neem-based-packaging-pouch-500x500.jpg"
}
]
*/

?>
