/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ 34:
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: Error: ENOENT: no such file or directory, open '/Users/simpel/dev/Github/privat/statera/node_modules/tailwindcss/lib/lib/../../css/preflight.css'\n    at Object.openSync (fs.js:439:3)\n    at Object.readFileSync (fs.js:344:35)\n    at css.walkAtRules.atRule (/Users/simpel/dev/Github/privat/statera/node_modules/tailwindcss/lib/lib/substituteTailwindAtRules.js:11:68)\n    at /Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/container.js:304:28\n    at /Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/container.js:144:26\n    at Root.each (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/container.js:110:22)\n    at Root.walk (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/container.js:143:21)\n    at Root.walkAtRules (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/container.js:302:25)\n    at /Users/simpel/dev/Github/privat/statera/node_modules/tailwindcss/lib/lib/substituteTailwindAtRules.js:9:9\n    at LazyResult.run (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:277:20)\n    at LazyResult.asyncTick (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:192:32)\n    at /Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:231:20\n    at new Promise (<anonymous>)\n    at LazyResult.async (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:228:27)\n    at LazyResult.then (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:134:21)\n    at LazyResult.asyncTick (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:196:25)\n    at LazyResult.asyncTick (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:204:22)\n    at /Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:231:20\n    at new Promise (<anonymous>)\n    at LazyResult.async (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:228:27)\n    at LazyResult.then (/Users/simpel/dev/Github/privat/statera/node_modules/postcss/lib/lazy-result.js:134:21)\n    at Promise.resolve.then.then (/Users/simpel/dev/Github/privat/statera/node_modules/postcss-loader/lib/index.js:145:8)\n    at process._tickCallback (internal/process/next_tick.js:68:7)\n    at runLoaders (/Users/simpel/dev/Github/privat/statera/node_modules/webpack/lib/NormalModule.js:195:19)\n    at /Users/simpel/dev/Github/privat/statera/node_modules/loader-runner/lib/LoaderRunner.js:364:11\n    at /Users/simpel/dev/Github/privat/statera/node_modules/loader-runner/lib/LoaderRunner.js:230:18\n    at context.callback (/Users/simpel/dev/Github/privat/statera/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Promise.resolve.then.then.catch (/Users/simpel/dev/Github/privat/statera/node_modules/postcss-loader/lib/index.js:194:71)\n    at process._tickCallback (internal/process/next_tick.js:68:7)");

/***/ }),

/***/ 8:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(9);
module.exports = __webpack_require__(34);


/***/ }),

/***/ 9:
/***/ (function(module, exports) {

throw new Error("Module build failed: ReferenceError: Unknown plugin \"transform-object-rest-spread\" specified in \"base\" at 0, attempted to resolve relative to \"/Users/simpel/dev/Github/privat/statera/resources/js\"\n    at /Users/simpel/dev/Github/privat/statera/node_modules/babel-core/lib/transformation/file/options/option-manager.js:180:17\n    at Array.map (<anonymous>)\n    at Function.normalisePlugins (/Users/simpel/dev/Github/privat/statera/node_modules/babel-core/lib/transformation/file/options/option-manager.js:158:20)\n    at OptionManager.mergeOptions (/Users/simpel/dev/Github/privat/statera/node_modules/babel-core/lib/transformation/file/options/option-manager.js:234:36)\n    at OptionManager.init (/Users/simpel/dev/Github/privat/statera/node_modules/babel-core/lib/transformation/file/options/option-manager.js:368:12)\n    at File.initOptions (/Users/simpel/dev/Github/privat/statera/node_modules/babel-core/lib/transformation/file/index.js:212:65)\n    at new File (/Users/simpel/dev/Github/privat/statera/node_modules/babel-core/lib/transformation/file/index.js:135:24)\n    at Pipeline.transform (/Users/simpel/dev/Github/privat/statera/node_modules/babel-core/lib/transformation/pipeline.js:46:16)\n    at transpile (/Users/simpel/dev/Github/privat/statera/node_modules/babel-loader/lib/index.js:50:20)\n    at /Users/simpel/dev/Github/privat/statera/node_modules/babel-loader/lib/fs-cache.js:118:18\n    at ReadFileContext.callback (/Users/simpel/dev/Github/privat/statera/node_modules/babel-loader/lib/fs-cache.js:31:21)\n    at FSReqWrap.readFileAfterOpen [as oncomplete] (fs.js:238:13)");

/***/ })

/******/ });