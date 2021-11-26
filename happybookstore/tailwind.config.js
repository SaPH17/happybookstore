module.exports = {
	purge: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
	],
	darkMode: false,
	theme: {
		minWidth: {
			0: "0",
			"1/4": "25%",
			"1/6": "16%",
			"1/2": "50%",
			"3/4": "75%",
			"2/3": "66%",
			full: "100%",
		},
		pagination: (theme) => ({
			// Customize the color only. (optional)
			color: theme("colors.gray.300"),

			// Customize styling using @apply. (optional)
			// Customize styling using CSS-in-JS. (optional)
		}),
	},
	variants: {
		extend: {},
	},
	plugins: [require("tailwindcss-plugins/pagination")],
}
