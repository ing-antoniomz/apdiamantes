/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/documentation/general/jstree/customicons.js":
/*!*************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/general/jstree/customicons.js ***!
  \*************************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTJSTreeCustomIcons = function () {\n  // Private functions\n  var exampleCustomIcons = function exampleCustomIcons() {\n    $('#kt_docs_jstree_customicons').jstree({\n      \"core\": {\n        \"themes\": {\n          \"responsive\": false\n        }\n      },\n      \"types\": {\n        \"default\": {\n          \"icon\": \"fa fa-folder text-warning\"\n        },\n        \"file\": {\n          \"icon\": \"fa fa-file  text-warning\"\n        }\n      },\n      \"plugins\": [\"types\"]\n    });\n\n    // handle link clicks in tree nodes(support target=\"_blank\" as well)\n    $('#kt_docs_jstree_customicons').on('select_node.jstree', function (e, data) {\n      var link = $('#' + data.selected).find('a');\n      if (link.attr(\"href\") != \"#\" && link.attr(\"href\") != \"javascript:;\" && link.attr(\"href\") != \"\") {\n        if (link.attr(\"target\") == \"_blank\") {\n          link.attr(\"href\").target = \"_blank\";\n        }\n        document.location.href = link.attr(\"href\");\n        return false;\n      }\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleCustomIcons();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTJSTreeCustomIcons.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qc3RyZWUvY3VzdG9taWNvbnMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSxtQkFBbUIsR0FBRyxZQUFXO0VBQ2pDO0VBQ0EsSUFBSUMsa0JBQWtCLEdBQUcsU0FBckJBLGtCQUFrQkEsQ0FBQSxFQUFjO0lBQ2hDQyxDQUFDLENBQUMsNkJBQTZCLENBQUMsQ0FBQ0MsTUFBTSxDQUFDO01BQ3BDLE1BQU0sRUFBRztRQUNMLFFBQVEsRUFBRztVQUNQLFlBQVksRUFBRTtRQUNsQjtNQUNKLENBQUM7TUFDRCxPQUFPLEVBQUc7UUFDTixTQUFTLEVBQUc7VUFDUixNQUFNLEVBQUc7UUFDYixDQUFDO1FBQ0QsTUFBTSxFQUFHO1VBQ0wsTUFBTSxFQUFHO1FBQ2I7TUFDSixDQUFDO01BQ0QsU0FBUyxFQUFFLENBQUMsT0FBTztJQUN2QixDQUFDLENBQUM7O0lBRUY7SUFDQUQsQ0FBQyxDQUFDLDZCQUE2QixDQUFDLENBQUNFLEVBQUUsQ0FBQyxvQkFBb0IsRUFBRSxVQUFTQyxDQUFDLEVBQUNDLElBQUksRUFBRTtNQUN2RSxJQUFJQyxJQUFJLEdBQUdMLENBQUMsQ0FBQyxHQUFHLEdBQUdJLElBQUksQ0FBQ0UsUUFBUSxDQUFDLENBQUNDLElBQUksQ0FBQyxHQUFHLENBQUM7TUFDM0MsSUFBSUYsSUFBSSxDQUFDRyxJQUFJLENBQUMsTUFBTSxDQUFDLElBQUksR0FBRyxJQUFJSCxJQUFJLENBQUNHLElBQUksQ0FBQyxNQUFNLENBQUMsSUFBSSxjQUFjLElBQUlILElBQUksQ0FBQ0csSUFBSSxDQUFDLE1BQU0sQ0FBQyxJQUFJLEVBQUUsRUFBRTtRQUM1RixJQUFJSCxJQUFJLENBQUNHLElBQUksQ0FBQyxRQUFRLENBQUMsSUFBSSxRQUFRLEVBQUU7VUFDakNILElBQUksQ0FBQ0csSUFBSSxDQUFDLE1BQU0sQ0FBQyxDQUFDQyxNQUFNLEdBQUcsUUFBUTtRQUN2QztRQUNBQyxRQUFRLENBQUNDLFFBQVEsQ0FBQ0MsSUFBSSxHQUFHUCxJQUFJLENBQUNHLElBQUksQ0FBQyxNQUFNLENBQUM7UUFDMUMsT0FBTyxLQUFLO01BQ2hCO0lBQ0osQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBSyxJQUFJLEVBQUUsU0FBTkEsSUFBSUEsQ0FBQSxFQUFhO01BQ2JkLGtCQUFrQixDQUFDLENBQUM7SUFDeEI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxDQUFDLENBQUM7O0FBRUg7QUFDQWUsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFXO0VBQ2pDakIsbUJBQW1CLENBQUNlLElBQUksQ0FBQyxDQUFDO0FBQzlCLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9nZW5lcmFsL2pzdHJlZS9jdXN0b21pY29ucy5qcz82Y2NhIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xuXG4vLyBDbGFzcyBkZWZpbml0aW9uXG52YXIgS1RKU1RyZWVDdXN0b21JY29ucyA9IGZ1bmN0aW9uKCkge1xuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXG4gICAgdmFyIGV4YW1wbGVDdXN0b21JY29ucyA9IGZ1bmN0aW9uKCkge1xuICAgICAgICAkKCcja3RfZG9jc19qc3RyZWVfY3VzdG9taWNvbnMnKS5qc3RyZWUoe1xuICAgICAgICAgICAgXCJjb3JlXCIgOiB7XG4gICAgICAgICAgICAgICAgXCJ0aGVtZXNcIiA6IHtcbiAgICAgICAgICAgICAgICAgICAgXCJyZXNwb25zaXZlXCI6IGZhbHNlXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIFwidHlwZXNcIiA6IHtcbiAgICAgICAgICAgICAgICBcImRlZmF1bHRcIiA6IHtcbiAgICAgICAgICAgICAgICAgICAgXCJpY29uXCIgOiBcImZhIGZhLWZvbGRlciB0ZXh0LXdhcm5pbmdcIlxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgXCJmaWxlXCIgOiB7XG4gICAgICAgICAgICAgICAgICAgIFwiaWNvblwiIDogXCJmYSBmYS1maWxlICB0ZXh0LXdhcm5pbmdcIlxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBcInBsdWdpbnNcIjogW1widHlwZXNcIl1cbiAgICAgICAgfSk7XG5cbiAgICAgICAgLy8gaGFuZGxlIGxpbmsgY2xpY2tzIGluIHRyZWUgbm9kZXMoc3VwcG9ydCB0YXJnZXQ9XCJfYmxhbmtcIiBhcyB3ZWxsKVxuICAgICAgICAkKCcja3RfZG9jc19qc3RyZWVfY3VzdG9taWNvbnMnKS5vbignc2VsZWN0X25vZGUuanN0cmVlJywgZnVuY3Rpb24oZSxkYXRhKSB7XG4gICAgICAgICAgICB2YXIgbGluayA9ICQoJyMnICsgZGF0YS5zZWxlY3RlZCkuZmluZCgnYScpO1xuICAgICAgICAgICAgaWYgKGxpbmsuYXR0cihcImhyZWZcIikgIT0gXCIjXCIgJiYgbGluay5hdHRyKFwiaHJlZlwiKSAhPSBcImphdmFzY3JpcHQ6O1wiICYmIGxpbmsuYXR0cihcImhyZWZcIikgIT0gXCJcIikge1xuICAgICAgICAgICAgICAgIGlmIChsaW5rLmF0dHIoXCJ0YXJnZXRcIikgPT0gXCJfYmxhbmtcIikge1xuICAgICAgICAgICAgICAgICAgICBsaW5rLmF0dHIoXCJocmVmXCIpLnRhcmdldCA9IFwiX2JsYW5rXCI7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIGRvY3VtZW50LmxvY2F0aW9uLmhyZWYgPSBsaW5rLmF0dHIoXCJocmVmXCIpO1xuICAgICAgICAgICAgICAgIHJldHVybiBmYWxzZTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcmV0dXJuIHtcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xuICAgICAgICBpbml0OiBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIGV4YW1wbGVDdXN0b21JY29ucygpO1xuICAgICAgICB9XG4gICAgfTtcbn0oKTtcblxuLy8gT24gZG9jdW1lbnQgcmVhZHlcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24oKSB7XG4gICAgS1RKU1RyZWVDdXN0b21JY29ucy5pbml0KCk7XG59KTtcbiJdLCJuYW1lcyI6WyJLVEpTVHJlZUN1c3RvbUljb25zIiwiZXhhbXBsZUN1c3RvbUljb25zIiwiJCIsImpzdHJlZSIsIm9uIiwiZSIsImRhdGEiLCJsaW5rIiwic2VsZWN0ZWQiLCJmaW5kIiwiYXR0ciIsInRhcmdldCIsImRvY3VtZW50IiwibG9jYXRpb24iLCJocmVmIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/general/jstree/customicons.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/general/jstree/customicons.js"]();
/******/ 	
/******/ })()
;