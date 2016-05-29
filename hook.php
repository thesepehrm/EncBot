<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '222942975:AAGV3w63SwXLZMoFa6rKnkYVrP5cICcKTzA';
$BOT_NAME = 'encrypbot';
$commands_path = __DIR__ . '/Commands/';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);
    $telegram->addCommandsPath($commands_path);
    
    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    // echo $e;
}
