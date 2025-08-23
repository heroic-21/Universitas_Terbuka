// postcss.config.js
export default (ctx) => {
  const isProduction = ctx.env === "production";

  return {
    plugins: {
      "postcss-import": {},
      "tailwindcss/nesting": {},
      tailwindcss: {},
      autoprefixer: {},
      "postcss-preset-env": {
        stage: 1,
      },
      ...(isProduction
        ? {
            cssnano: { preset: "default" },
          }
        : {}),
    },
  };
};
