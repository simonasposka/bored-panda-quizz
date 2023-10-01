export default {
  preset: '@vue/cli-plugin-unit-jest/presets/typescript-and-babel',
  //preset: 'vite-jest',

  testMatch: [
    '**/Tests/Unit/**/*.spec.js',
  ],

  moduleFileExtensions: ['js', 'vue'],

  //roots: ['<rootDir>/resources/js/Tests/'],

  testEnvironment: 'jsdom'
}
