<?php

/*A cookie is often used to identify a user.
    A cookie is a small file that the 
    server embeds on the user's computer.
     Each time the same computer requests 
     a page with a browser,
      it will send the cookie too. 
      With PHP, you can both create 
      and retrieve cookie values
*/
 
// How to set cookies
// setcookie(name, value, expire, path, domain, secure, httponly);
// Only the name parameter is required


/*

Note: The setcookie() function must
 appear BEFORE the <html> tag.

Note: The value of the cookie is automatically 
URLencoded when sending the cookie,
 and automatically decoded 
 when received (to prevent URLencoding,
  use setrawcookie() instead).



*/



echo "welcom to world of cookies!"."<br>";
setcookie("name", "vikky",time()+60,"/");
echo "cookie is set!"."<br>";




// get cookie 
// $_COOKIE -- globle varible where all cookies list are present









// How to update cookie

// How to delete cookie

