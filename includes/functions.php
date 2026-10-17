<?php
/** Escape output for safe HTML printing. */
function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/**
 * Find the profile photo. Tries the configured file first, then common names
 * in assets/images/, images/ and the site root. Falls back to a placeholder.
 */
function profile_photo(string $configured): string
{
    $root = dirname(__DIR__) . '/';
    $candidates = $configured !== '' ? [$configured] : [];
    foreach (['assets/images/', 'images/', ''] as $folder) {
        foreach (['profile', 'photo', 'me', 'guiner'] as $name) {
            foreach (['png', 'jpg', 'jpeg', 'webp'] as $ext) {
                $candidates[] = $folder . $name . '.' . $ext;
            }
        }
    }
    foreach ($candidates as $path) {
        if (is_file($root . $path)) {
            return $path;
        }
    }
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><rect width="200" height="200" fill="#101323"/><circle cx="100" cy="78" r="36" fill="#8b5cf6"/><path d="M30 190c8-44 40-62 70-62s62 18 70 62z" fill="#6366f1"/></svg>';
    return 'data:image/svg+xml;base64,' . base64_encode($svg);
}
