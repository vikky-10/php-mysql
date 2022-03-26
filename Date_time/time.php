<?php 


    /**
     * Time validation, determines if the string passed is a valid time.
     * Validates time as 24hr (HH:MM[:SS][.FFFFFF]) or am/pm ([H]H:MM[a|p]m)
     *
     * Seconds and fractional seconds (microseconds) are allowed but optional
     * in 24hr format.
     *
     * @param mixed $check a valid time string/object
     * @return bool Success
     */
   
  //  $foo="1:00";

      //   $meridianClockRegex = '^((0?[1-9]|1[012])(:[0-5]\d){0,2} ?([AP]M|[ap]m))$';
      //   $standardClockRegex = '^([01]\d|2[0-3])((:[0-5]\d){1,2}|(:[0-5]\d){2}\.\d{0,6})$';
      //  $new=$meridianClockRegex|$standardClockRegex;
        // echo preg_match('(/^(0?[1-9]|1[012])(:[0-5]\d) [APap][mM]$/)'||"(^([01]\d|2[0-3])((:[0-5]\d){1,2}|(:[0-5]\d){2}\.\d{0,6})$)", $foo);
        // return static::_check($check, '%' . $meridianClockRegex . '|' . $standardClockRegex . '%');
//      if(preg_match("/^(0?[1-9]|1[012])(:[0-5]\d) [APap][mM]$/", $foo)){
// echo "true from am pm";
//      }else{
//   if(preg_match("/^([01]\d|2[0-3])((:[0-5]\d){1,2}|(:[0-5]\d){2}\.\d{0,6})$/",$foo)){
//     echo "true ";
//   }else{
//     echo "false";
//   }
//      }


$foo="13 am";

// echo preg_match("/^([0-1]?\d|2[0-3])(?::([0-5]?\d))?(?::([0-5]?\d))$/",$foo);
echo preg_match("/^(0?[1-9]|1[0-2])(?::([0-5]?\d))?(?::([0-5]?\d))?\s?((?:A|P)\.?M\.?)|(?:[01]\d|2[0123]):(?:[012345]\d):(?:[012345]\d)?$/im", $foo);
