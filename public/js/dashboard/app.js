/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/dashboard/utils/charts.js":
/*!************************************************!*\
  !*** ./resources/js/dashboard/utils/charts.js ***!
  \************************************************/
/***/ (() => {

(function () {
  if (document.getElementById("get-current-year")) {
    document.getElementById("get-current-year").innerHTML = new Date().getFullYear();
  }
})();

(function () {
  /* Chart initialisations */

  /* Line Chart */
  var config = {
    type: "line",
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
        label: new Date().getFullYear(),
        backgroundColor: "#4c51bf",
        borderColor: "#4c51bf",
        data: [65, 78, 66, 44, 56, 67, 75],
        fill: false
      }, {
        label: new Date().getFullYear() - 1,
        fill: false,
        backgroundColor: "#fff",
        borderColor: "#fff",
        data: [40, 68, 86, 74, 56, 60, 87]
      }]
    },
    options: {
      maintainAspectRatio: false,
      responsive: true,
      title: {
        display: false,
        text: "Sales Charts",
        fontColor: "white"
      },
      legend: {
        labels: {
          fontColor: "white"
        },
        align: "end",
        position: "bottom"
      },
      tooltips: {
        mode: "index",
        intersect: false
      },
      hover: {
        mode: "nearest",
        intersect: true
      },
      scales: {
        xAxes: [{
          ticks: {
            fontColor: "rgba(255,255,255,.7)"
          },
          display: true,
          scaleLabel: {
            display: false,
            labelString: "Month",
            fontColor: "white"
          },
          gridLines: {
            display: false,
            borderDash: [2],
            borderDashOffset: [2],
            color: "rgba(33, 37, 41, 0.3)",
            zeroLineColor: "rgba(0, 0, 0, 0)",
            zeroLineBorderDash: [2],
            zeroLineBorderDashOffset: [2]
          }
        }],
        yAxes: [{
          ticks: {
            fontColor: "rgba(255,255,255,.7)"
          },
          display: true,
          scaleLabel: {
            display: false,
            labelString: "Value",
            fontColor: "white"
          },
          gridLines: {
            borderDash: [3],
            borderDashOffset: [3],
            drawBorder: false,
            color: "rgba(255, 255, 255, 0.15)",
            zeroLineColor: "rgba(33, 37, 41, 0)",
            zeroLineBorderDash: [2],
            zeroLineBorderDashOffset: [2]
          }
        }]
      }
    }
  };
  var ctx = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(ctx, config);
  /* Bar Chart */

  config = {
    type: "bar",
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
        label: new Date().getFullYear(),
        backgroundColor: "#ed64a6",
        borderColor: "#ed64a6",
        data: [30, 78, 56, 34, 100, 45, 13],
        fill: false,
        barThickness: 8
      }, {
        label: new Date().getFullYear() - 1,
        fill: false,
        backgroundColor: "#4c51bf",
        borderColor: "#4c51bf",
        data: [27, 68, 86, 74, 10, 4, 87],
        barThickness: 8
      }]
    },
    options: {
      maintainAspectRatio: false,
      responsive: true,
      title: {
        display: false,
        text: "Orders Chart"
      },
      tooltips: {
        mode: "index",
        intersect: false
      },
      hover: {
        mode: "nearest",
        intersect: true
      },
      legend: {
        labels: {
          fontColor: "rgba(0,0,0,.4)"
        },
        align: "end",
        position: "bottom"
      },
      scales: {
        xAxes: [{
          display: false,
          scaleLabel: {
            display: true,
            labelString: "Month"
          },
          gridLines: {
            borderDash: [2],
            borderDashOffset: [2],
            color: "rgba(33, 37, 41, 0.3)",
            zeroLineColor: "rgba(33, 37, 41, 0.3)",
            zeroLineBorderDash: [2],
            zeroLineBorderDashOffset: [2]
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: false,
            labelString: "Value"
          },
          gridLines: {
            borderDash: [2],
            drawBorder: false,
            borderDashOffset: [2],
            color: "rgba(33, 37, 41, 0.2)",
            zeroLineColor: "rgba(33, 37, 41, 0.15)",
            zeroLineBorderDash: [2],
            zeroLineBorderDashOffset: [2]
          }
        }]
      }
    }
  };
  ctx = document.getElementById("bar-chart").getContext("2d");
  window.myBar = new Chart(ctx, config);
})();

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!***************************************!*\
  !*** ./resources/js/dashboard/app.js ***!
  \***************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _utils_charts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./utils/charts */ "./resources/js/dashboard/utils/charts.js");
/* harmony import */ var _utils_charts__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_utils_charts__WEBPACK_IMPORTED_MODULE_0__);

})();

/******/ })()
;