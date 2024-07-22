import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            stroke: (theme) => ({
                custom: theme("colors.black"),
                strokeWithe: "#ffffff",
                strokeAzul: "#2E609D",
            }),
            fill: (theme) => ({
                fillWhite: "#FFFFFF",
                fillGrisStrong: "#575756",
                fillGrisSuave: "#565555",
                fillVerde: "#289A7B",
                fillAzul: "#007FC8",
            }),
            fontWeight: {
                medium: "500",
                regular: "400",
                semibold: "600",
            },
            keyframes: {
                FadeInUp: {
                  "0%": { transform: "translateY(15px)", opacity: "0" },
                  "100%": { transform: "translateY(0px)", opacity: "1" },
                },
            },
            animation: {
                fade: "FadeInUp 700ms ease 1 forwards",
            },
            boxShadow: {
                DEFAULT:
                    "0 1px 3px 0 rgba(0, 0, 0, 0.08), 0 1px 2px 0 rgba(0, 0, 0, 0.02)",
                md: "0 4px 6px -1px rgba(0, 0, 0, 0.08), 0 2px 4px -1px rgba(0, 0, 0, 0.02)",
                lg: "0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(0, 0, 0, 0.01)",
                xl: "0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 10px 10px -5px rgba(0, 0, 0, 0.01)",
            },
            outline: {
                blue: "2px solid rgba(0, 112, 244, 0.5)",
            },
            fontFamily: {
                jakartaExtraBold: ["jakartaExtraBold", "sans-serif"],
                jakartaBold: ["jakartaBold", "sans-serif"],
                jakartaSemiBold: ["jakartaSemiBold", "sans-serif"],
                jakartaMedium: ["jakartaMedium", "sans-serif"],
                jakartaRegular: ["jakartaRegular", "sans-serif"],
                jakartaExtraBoldItalic: ["jakartaExtraBoldItalic", "sans-serif"],

                outfitExtraBold: ["outfitExtraBold", "sans-serif"],
                outfitBold: ["outfitBold", "sans-serif"],
                outfitSemiBold: ["outfitSemiBold", "sans-serif"],
                outfitMedium: ["outfitMedium", "sans-serif"],
                outfitRegular: ["outfitRegular", "sans-serif"],
                outfitLight: ["outfitLight", "sans-serif"],
                outfitExtraLight: ["outfitExtraLight", "sans-serif"],

            },
            fontSize: {
                primary: "70px",
                secondary: "54px",
                
            },

            backgroundColor: {
                primario: "#EB1717",
                secundario: "#007FC8",
                terciario: "#080101",
                cardflip: "#F5F6F7"
            },
            textColor: {
                primario: "#EB1717",
                secundario: "#007FC8",
                terciario: "#080101",
            },
            borderColor: {
                selectCheck: "#173525",
                borderOrange: "#E38533",
                borderverde: "#33BF82",
            },
            screens: {
                "xs": "500px",
                sm: "640px",
                "2sm": "700px",
                md: "768px",
                "1md": "850px",
                "2md": "900px",
                "3md": "980px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1536px",
            },
            minWidth: {
                36: "9rem",
                44: "11rem",
                56: "14rem",
                60: "15rem",
                72: "18rem",
                80: "20rem",
            },
            maxWidth: {
                "8xl": "88rem",
                "9xl": "96rem",
            },
            height: {
                '700': '700px', 
                '600': '600px', 
                '400': '400px', 
                '500': '500px', 
                
            },
            backgroundSize: {
                'auto': 'auto',
                'cover': 'cover',
                'contain': 'contain',
                '100%': '100%',
                '16': '4rem',
            },

            animation: {
                'infinite-scroll': 'infinite-scroll 25s linear infinite',
            },
            
            keyframes: {
                'infinite-scroll': {
                  from: { transform: 'translateX(0)' },
                  to: { transform: 'translateX(-100%)' },
                }
            },

            backgroundImage: {
                'textura1': "url('/images/svg/textura1.svg')",
            },
        },
    },

    plugins: [
        forms,
        typography,
        // add custom variant for expanding sidebar
        plugin(({ addVariant, e }) => {
            addVariant("sidebar-expanded", ({ modifySelectors, separator }) => {
                modifySelectors(
                    ({ className }) =>
                        `.sidebar-expanded .${e(
                            `sidebar-expanded${separator}${className}`
                        )}`
                );
            });
        }),
    ],
};
