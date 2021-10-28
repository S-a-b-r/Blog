/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/scripts.js":
/*!*********************************!*\
  !*** ./resources/js/scripts.js ***!
  \*********************************/
/***/ (() => {

eval("/*!\n* Start Bootstrap - Clean Blog v6.0.6 (https://startbootstrap.com/theme/clean-blog)\n* Copyright 2013-2021 Start Bootstrap\n* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-clean-blog/blob/master/LICENSE)\n*/\nwindow.addEventListener('DOMContentLoaded', function () {\n  var scrollPos = 0;\n  var mainNav = document.getElementById('mainNav');\n  var headerHeight = mainNav.clientHeight;\n  window.addEventListener('scroll', function () {\n    var currentTop = document.body.getBoundingClientRect().top * -1;\n\n    if (currentTop < scrollPos) {\n      // Scrolling Up\n      if (currentTop > 0 && mainNav.classList.contains('is-fixed')) {\n        mainNav.classList.add('is-visible');\n      } else {\n        console.log(123);\n        mainNav.classList.remove('is-visible', 'is-fixed');\n      }\n    } else {\n      // Scrolling Down\n      mainNav.classList.remove(['is-visible']);\n\n      if (currentTop > headerHeight && !mainNav.classList.contains('is-fixed')) {\n        mainNav.classList.add('is-fixed');\n      }\n    }\n\n    scrollPos = currentTop;\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcz9iOGQ4Il0sIm5hbWVzIjpbIndpbmRvdyIsImFkZEV2ZW50TGlzdGVuZXIiLCJzY3JvbGxQb3MiLCJtYWluTmF2IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImhlYWRlckhlaWdodCIsImNsaWVudEhlaWdodCIsImN1cnJlbnRUb3AiLCJib2R5IiwiZ2V0Qm91bmRpbmdDbGllbnRSZWN0IiwidG9wIiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJhZGQiLCJjb25zb2xlIiwibG9nIiwicmVtb3ZlIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0FBLE1BQU0sQ0FBQ0MsZ0JBQVAsQ0FBd0Isa0JBQXhCLEVBQTRDLFlBQU07QUFDOUMsTUFBSUMsU0FBUyxHQUFHLENBQWhCO0FBQ0EsTUFBTUMsT0FBTyxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsU0FBeEIsQ0FBaEI7QUFDQSxNQUFNQyxZQUFZLEdBQUdILE9BQU8sQ0FBQ0ksWUFBN0I7QUFDQVAsRUFBQUEsTUFBTSxDQUFDQyxnQkFBUCxDQUF3QixRQUF4QixFQUFrQyxZQUFXO0FBQ3pDLFFBQU1PLFVBQVUsR0FBR0osUUFBUSxDQUFDSyxJQUFULENBQWNDLHFCQUFkLEdBQXNDQyxHQUF0QyxHQUE0QyxDQUFDLENBQWhFOztBQUNBLFFBQUtILFVBQVUsR0FBR04sU0FBbEIsRUFBNkI7QUFDekI7QUFDQSxVQUFJTSxVQUFVLEdBQUcsQ0FBYixJQUFrQkwsT0FBTyxDQUFDUyxTQUFSLENBQWtCQyxRQUFsQixDQUEyQixVQUEzQixDQUF0QixFQUE4RDtBQUMxRFYsUUFBQUEsT0FBTyxDQUFDUyxTQUFSLENBQWtCRSxHQUFsQixDQUFzQixZQUF0QjtBQUNILE9BRkQsTUFFTztBQUNIQyxRQUFBQSxPQUFPLENBQUNDLEdBQVIsQ0FBWSxHQUFaO0FBQ0FiLFFBQUFBLE9BQU8sQ0FBQ1MsU0FBUixDQUFrQkssTUFBbEIsQ0FBeUIsWUFBekIsRUFBdUMsVUFBdkM7QUFDSDtBQUNKLEtBUkQsTUFRTztBQUNIO0FBQ0FkLE1BQUFBLE9BQU8sQ0FBQ1MsU0FBUixDQUFrQkssTUFBbEIsQ0FBeUIsQ0FBQyxZQUFELENBQXpCOztBQUNBLFVBQUlULFVBQVUsR0FBR0YsWUFBYixJQUE2QixDQUFDSCxPQUFPLENBQUNTLFNBQVIsQ0FBa0JDLFFBQWxCLENBQTJCLFVBQTNCLENBQWxDLEVBQTBFO0FBQ3RFVixRQUFBQSxPQUFPLENBQUNTLFNBQVIsQ0FBa0JFLEdBQWxCLENBQXNCLFVBQXRCO0FBQ0g7QUFDSjs7QUFDRFosSUFBQUEsU0FBUyxHQUFHTSxVQUFaO0FBQ0gsR0FsQkQ7QUFtQkgsQ0F2QkQiLCJzb3VyY2VzQ29udGVudCI6WyIvKiFcbiogU3RhcnQgQm9vdHN0cmFwIC0gQ2xlYW4gQmxvZyB2Ni4wLjYgKGh0dHBzOi8vc3RhcnRib290c3RyYXAuY29tL3RoZW1lL2NsZWFuLWJsb2cpXG4qIENvcHlyaWdodCAyMDEzLTIwMjEgU3RhcnQgQm9vdHN0cmFwXG4qIExpY2Vuc2VkIHVuZGVyIE1JVCAoaHR0cHM6Ly9naXRodWIuY29tL1N0YXJ0Qm9vdHN0cmFwL3N0YXJ0Ym9vdHN0cmFwLWNsZWFuLWJsb2cvYmxvYi9tYXN0ZXIvTElDRU5TRSlcbiovXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsICgpID0+IHtcbiAgICBsZXQgc2Nyb2xsUG9zID0gMDtcbiAgICBjb25zdCBtYWluTmF2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21haW5OYXYnKTtcbiAgICBjb25zdCBoZWFkZXJIZWlnaHQgPSBtYWluTmF2LmNsaWVudEhlaWdodDtcbiAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgZnVuY3Rpb24oKSB7XG4gICAgICAgIGNvbnN0IGN1cnJlbnRUb3AgPSBkb2N1bWVudC5ib2R5LmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLnRvcCAqIC0xO1xuICAgICAgICBpZiAoIGN1cnJlbnRUb3AgPCBzY3JvbGxQb3MpIHtcbiAgICAgICAgICAgIC8vIFNjcm9sbGluZyBVcFxuICAgICAgICAgICAgaWYgKGN1cnJlbnRUb3AgPiAwICYmIG1haW5OYXYuY2xhc3NMaXN0LmNvbnRhaW5zKCdpcy1maXhlZCcpKSB7XG4gICAgICAgICAgICAgICAgbWFpbk5hdi5jbGFzc0xpc3QuYWRkKCdpcy12aXNpYmxlJyk7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKDEyMyk7XG4gICAgICAgICAgICAgICAgbWFpbk5hdi5jbGFzc0xpc3QucmVtb3ZlKCdpcy12aXNpYmxlJywgJ2lzLWZpeGVkJyk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAvLyBTY3JvbGxpbmcgRG93blxuICAgICAgICAgICAgbWFpbk5hdi5jbGFzc0xpc3QucmVtb3ZlKFsnaXMtdmlzaWJsZSddKTtcbiAgICAgICAgICAgIGlmIChjdXJyZW50VG9wID4gaGVhZGVySGVpZ2h0ICYmICFtYWluTmF2LmNsYXNzTGlzdC5jb250YWlucygnaXMtZml4ZWQnKSkge1xuICAgICAgICAgICAgICAgIG1haW5OYXYuY2xhc3NMaXN0LmFkZCgnaXMtZml4ZWQnKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgICBzY3JvbGxQb3MgPSBjdXJyZW50VG9wO1xuICAgIH0pO1xufSlcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/scripts.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/scripts.js"]();
/******/ 	
/******/ })()
;