module.exports = {
    theme: {
        extend: {
            width: {
                '120': '120px',
                '450': '450px',
                '360': '360px',
                '260': '260px',
            },
            height: {
                '120': '120px',
                '450': '450px',
                '360': '360px',
                '260': '260px',
            },
            colors: {
                sbtnprm: {
                    light: '#8CD790',
                    dark: '#00A651',
                },
                sukun: {
                    official: '#00A651',
                },
                sukungreen: {
                    '100': '#D7FFF1',
                    '200': '#6be1a4',
                    '300': '#58db97',
                    '400': '#8CD790',
                    '500': '#77AF9C',
                    '600': '#285943',
                },
                sukunblack: {
                    '100': '#777777',
                    '200': '#444444',
                    '300': '#242424',
                },
            },

            order: {
                '13': '13',
                '14': '14',
                '15': '15',
                '16': '16',
                '17': '17',
                '18': '18',
            },
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
    ],
}
