<?php
function name(){
    $my_name="MUGARURA ABUBAKAR";
    return $my_name;
}
function my_age($c_year,$birth_year){
    $dob=9/3/2000;
    $age=$c_year-$birth_year;
    return $age;
}
function my_address(){
    $address="KIHIHI-KANUNGU";
    return $address;
}

print("welcome ".name()." to ".my_address());
print("<br> You are ".my_age(2024,2001)." years old");



?>