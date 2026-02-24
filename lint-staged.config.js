export default {
    "**/*.php*": [
        "php vendor/bin/duster fix"
    ],
    "resources/**/*.{js,ts,blade.php,css}": [
        "prettier --write"
    ]
}
