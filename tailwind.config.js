const colors = require('tailwindcss/colors')

module.exports = {
    content: ['./resources/**/*.blade.php', './vendor/filament/**/*.blade.php'],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "rgb(var(--theme-primary-color-var-50) / <alpha-value>)",
                    100: "rgb(var(--theme-primary-color-var-100) / <alpha-value>)",
                    200: "rgb(var(--theme-primary-color-var-200) / <alpha-value>)",
                    300: "rgb(var(--theme-primary-color-var-300) / <alpha-value>)",
                    400: "rgb(var(--theme-primary-color-var-400) / <alpha-value>)",
                    500: "rgb(var(--theme-primary-color-var-500) / <alpha-value>)",
                    600: "rgb(var(--theme-primary-color-var-600) / <alpha-value>)",
                    700: "rgb(var(--theme-primary-color-var-700) / <alpha-value>)",
                    800: "rgb(var(--theme-primary-color-var-800) / <alpha-value>)",
                    900: "rgb(var(--theme-primary-color-var-900) / <alpha-value>)",
                },
                secondary: {
                    50: "rgb(var(--theme-secondary-color-var-50) / <alpha-value>)",
                    100: "rgb(var(--theme-secondary-color-var-100) / <alpha-value>)",
                    200: "rgb(var(--theme-secondary-color-var-200) / <alpha-value>)",
                    300: "rgb(var(--theme-secondary-color-var-300) / <alpha-value>)",
                    400: "rgb(var(--theme-secondary-color-var-400) / <alpha-value>)",
                    500: "rgb(var(--theme-secondary-color-var-500) / <alpha-value>)",
                    600: "rgb(var(--theme-secondary-color-var-600) / <alpha-value>)",
                    700: "rgb(var(--theme-secondary-color-var-700) / <alpha-value>)",
                    800: "rgb(var(--theme-secondary-color-var-800) / <alpha-value>)",
                    900: "rgb(var(--theme-secondary-color-var-900) / <alpha-value>)",
                },
                danger: colors.rose,
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },
}
