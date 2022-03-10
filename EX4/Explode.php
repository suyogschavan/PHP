<?php
  
    // original string
    $name = "Hello, My name is Suyog";
      
    // Without optional parameter NoOfElements
    print_r(explode(" ",$name));

    //with positive NoOfElements
    print_r(explode(" ",$name, 3));

    //with negetive NoOfElements
    print_r(explode(" ",$name, -1));

    ?>