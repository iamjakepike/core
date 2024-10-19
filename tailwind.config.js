module.exports = {
	content: require("fast-glob").sync(["./**/*.{html,php}"]),
	safelist: [],
	theme: {
		extend: {
			colors: {
				black: "var(--black)",
				white: "var(--white)",
				"core-bg": "var(--core-bg)",
				"core-text": "var(--core-text)",
			},
			fontFamily: {
				sans: "var(--default-sans)",
				serif: "var(--default-serif)",
			},
		},
	},
	plugins: [],
};
