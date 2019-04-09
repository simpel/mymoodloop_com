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
/******/ 	return __webpack_require__(__webpack_require__.s = 223);
/******/ })
/************************************************************************/
/******/ ({

/***/ 223:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(224);


/***/ }),

/***/ 224:
/***/ (function(module, exports) {



var percentColors = [{ percentage: 0.0, color: { r: 0xf0, g: 0xb4, b: 0xb4 } }, { percentage: 0.25, color: { r: 0xF8, g: 0xF8, b: 0xb4 } }, { percentage: 0.5, color: { r: 0xb5, g: 0xF0, b: 0xb4 } }, { percentage: 0.75, color: { r: 0xF8, g: 0xF8, b: 0xb4 } }, { percentage: 1.0, color: { r: 0xf0, g: 0xb4, b: 0xb4 } }];

var getColorForPercentage = function getColorForPercentage(percentage) {
    for (var i = 1; i < percentColors.length - 1; i++) {
        if (percentage < percentColors[i].percentage) {
            break;
        }
    }
    var lower = percentColors[i - 1];
    var upper = percentColors[i];
    var range = upper.percentage - lower.percentage;
    var rangepercentage = (percentage - lower.percentage) / range;
    var percentageLower = 1 - rangepercentage;
    var percentageUpper = rangepercentage;
    var color = {
        r: Math.floor(lower.color.r * percentageLower + upper.color.r * percentageUpper),
        g: Math.floor(lower.color.g * percentageLower + upper.color.g * percentageUpper),
        b: Math.floor(lower.color.b * percentageLower + upper.color.b * percentageUpper)
    };
    return 'rgb(' + [color.r, color.g, color.b].join(',') + ')';
    // or output as hex if preferred
};

var onInput = function onInput(e) {

    var slider = e.target;
    var minVal = Number(slider.min);
    var maxVal = Number(slider.max);

    var percentage = (slider.value - minVal) / (maxVal - minVal);

    var color = getColorForPercentage(percentage);
    slider.setAttribute("style", "background-color:" + color + ";");

    //document.querySelector('#value_'+slider.id).innerHTML = slider.value;
};

document.querySelectorAll('.slider').forEach(function (slider) {
    slider.addEventListener('input', onInput);
});

/***/ })

/******/ });