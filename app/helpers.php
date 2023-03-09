<?php

if (!function_exists('flash_message')) {
    function flash_message(string $message, string $message_type = 'info'): array
    {
        return [
            'flash-message' => $message,
            'flash-message-type' => $message_type
        ];
    }
}
