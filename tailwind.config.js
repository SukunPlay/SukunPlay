module.exports = {
    theme: {
        extend: {
            colors: {
                sbtnprm: {
                    light: '#8CD790',
                    dark: '#00A651',
                },
                sukun:{
                    official: '#00A651',
                    green:{
                        '100': '#D7FFF1',
                        '200': '#8CD790',
                        '300': '#77AF9C',
                        '400': '#285943',
                    },
                    black: {
                        '100': '#777777',
                        '200': '#444444',
                        '300': '#242424',
                    },
                },
            },
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
    ],
}
