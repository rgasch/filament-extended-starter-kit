const colors = require('tailwindcss/colors')

module.exports = {
    content: [
	    './resources/**/*.blade.php', 
	    './vendor/filament/**/*.blade.php',
	    './vendor/savannabits/filament-flatpickr/**/*.blade.php'
    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },
}
