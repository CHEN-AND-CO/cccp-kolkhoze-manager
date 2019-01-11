(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["styles"],{

/***/ "./node_modules/@angular-devkit/build-angular/src/angular-cli-files/plugins/raw-css-loader.js!./node_modules/postcss-loader/src/index.js?!./src/styles.css":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/@angular-devkit/build-angular/src/angular-cli-files/plugins/raw-css-loader.js!./node_modules/postcss-loader/src??embedded!./src/styles.css ***!
  \*****************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = [[module.i, "\n\n@import url('https://fonts.googleapis.com/css?family=Roboto');\n/* You can add global styles to this file, and also import other style files */\n:root\n{\n    --theme-main: #c72121;\n    --theme-back: #eeeeee;\n    --theme-text: #868686;\n    --theme-accent: white;\n\n    --theme-font: \"Roboto\", \"Open Sans\", \"Verdana\", \"Helvetica\", Arial, serif;\n}\nhtml, body\n{\n    width: 100vw;\n    min-height: 100vh;\n\n    padding: 0;\n    margin: 0;\n\n    font-family: var(--theme-font);\n    font-size: 14px;\n\n    background-color: var(--theme-back);\n    color: var(--theme-text);\n}\nheader\n{\n    display: flex;\n    flex-direction: row;\n    justify-content: space-between;\n    align-items: center;\n\n    height: 4em;\n    padding: 0 2em;\n\n    font-size: 14px;\n\n    background-color: var(--theme-main);\n    color: var(--theme-accent);\n\n    box-shadow: 0 0 10px rgba(0, 0, 0, 0.479);\n}\nheader h1\n{\n    margin: 0;\n    padding: 0;\n\n    font-size: 14px;\n}\nheader .menu a\n{\n    color: white;\n    height: 2em;\n    padding: 1em;\n    font-size: 1em;\n    text-decoration: none;\n}\nheader .menu a:hover\n{\n    background-color: #f0f8ff38;\n}\nmain\n{\n    box-sizing: border-box;\n    height: 100%;\n    width: 80%;\n    margin: 2em auto;\n}\ntable\n{\n    border-collapse: collapse;\n}\ntable thead\n{\n    background-color: var(--theme-main);\n    color: var(--theme-accent);\n}\ntable td, table th\n{\n    padding: 0.5em 1.5em;\n}\ntable tbody tr:nth-child(even)\n{\n    background-color: #e6e6e6;\n}\ntable tbody tr:nth-child(odd)\n{\n    background-color: #dbdbdb;\n}\n.material-button\n{\n    position: relative;\n\n    padding: 0.7em 1.2em;\n\n    border-radius: 4px;\n    font-weight: bold;\n}\n.material-button-fab\n{\n    position: absolute;\n    \n    width: 2em;\n    height: 2em;\n\n    display: inline-block;\n    text-align: center;\n    line-height: 2em;\n\n    font-size: 2em;\n    font-weight: normal;\n\n    border-radius: 100%;\n}\n.material-button, .material-button-fab\n{\n    background-color: var(--theme-main);\n    color: var(--theme-accent);\n}\n.material-button.light, .material-button-fab.light\n{\n    background-color: var(--theme-accent);\n    color: var(--theme-main);\n}\n*[class*=\"material-button\"], *[class*=\"material-button\"]::before\n{\n    text-decoration: none;\n    \n    box-sizing: border-box;\n    outline: none;\n\n    box-shadow: 0 0 5px rgba(0, 0, 0, 0.493);\n\n    transition: opacity 0.2s;\n}\n*[class*=\"material-button\"]::before\n{\n    position: absolute;\n    top: 0;\n    left: 0;\n    right: 0;\n    bottom: 0;\n\n    content: \"\";\n    background-color: var(--theme-accent);\n    opacity: 0;\n}\n*[class*=\"material-button\"].light::before\n{\n    background-color: var(--theme-main);\n}\n*[class*=\"material-button\"]:hover::before\n{\n    opacity: 0.04;\n}\n*[class*=\"material-button\"].light:hover::before\n{\n    opacity: 0.15;\n}\n/*Original code belongs to Google. Minor tweak by G. Leroy-Ferrec.*/\n@font-face {\n  font-family: 'Material Icons';\n  font-style: normal;\n  font-weight: 400;\n  src: url(https://fonts.gstatic.com/s/materialicons/v41/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');\n}\n.material-icons {\n  font-family: 'Material Icons';\n  font-weight: normal;\n  font-style: normal;\n  font-size: 24px;\n  line-height: 1;\n  letter-spacing: normal;\n  text-transform: none;\n  display: inline-table;\n  vertical-align: bottom; /* fix icon misaligning with text baseline in inline elements*/\n  white-space: nowrap;\n  word-wrap: normal;\n  direction: ltr;\n  -moz-font-feature-settings: 'liga';\n  -moz-osx-font-smoothing: grayscale;\n}\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9zdHlsZXMuY3NzIiwic3JjL2Nzcy90aGVtZWRlZnMuY3NzIiwic3JjL2Nzcy9tYWluLmNzcyIsInNyYy9jc3MvbWF0ZXJpYWwtYnV0dG9uLmNzcyIsInNyYy9jc3MvbWF0ZXJpYWwtaWNvbnMuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7O0FBRUEsOERBQThEO0FBRjlELCtFQUErRTtBQ0EvRTs7SUFFSSxzQkFBc0I7SUFDdEIsc0JBQXNCO0lBQ3RCLHNCQUFzQjtJQUN0QixzQkFBc0I7O0lBRXRCLDBFQUEwRTtDQUM3RTtBQ1JEOztJQUVJLGFBQWE7SUFDYixrQkFBa0I7O0lBRWxCLFdBQVc7SUFDWCxVQUFVOztJQUVWLCtCQUErQjtJQUMvQixnQkFBZ0I7O0lBRWhCLG9DQUFvQztJQUNwQyx5QkFBeUI7Q0FDNUI7QUFFRDs7SUFFSSxjQUFjO0lBQ2Qsb0JBQW9CO0lBQ3BCLCtCQUErQjtJQUMvQixvQkFBb0I7O0lBRXBCLFlBQVk7SUFDWixlQUFlOztJQUVmLGdCQUFnQjs7SUFFaEIsb0NBQW9DO0lBQ3BDLDJCQUEyQjs7SUFFM0IsMENBQTBDO0NBQzdDO0FBRUQ7O0lBRUksVUFBVTtJQUNWLFdBQVc7O0lBRVgsZ0JBQWdCO0NBQ25CO0FBRUQ7O0lBRUksYUFBYTtJQUNiLFlBQVk7SUFDWixhQUFhO0lBQ2IsZUFBZTtJQUNmLHNCQUFzQjtDQUN6QjtBQUVEOztJQUVJLDRCQUE0QjtDQUMvQjtBQUVEOztJQUVJLHVCQUF1QjtJQUN2QixhQUFhO0lBQ2IsV0FBVztJQUNYLGlCQUFpQjtDQUNwQjtBQUVEOztJQUVJLDBCQUEwQjtDQUM3QjtBQUVEOztJQUVJLG9DQUFvQztJQUNwQywyQkFBMkI7Q0FDOUI7QUFFRDs7SUFFSSxxQkFBcUI7Q0FDeEI7QUFFRDs7SUFFSSwwQkFBMEI7Q0FDN0I7QUFFRDs7SUFFSSwwQkFBMEI7Q0FDN0I7QUN0RkQ7O0lBRUksbUJBQW1COztJQUVuQixxQkFBcUI7O0lBRXJCLG1CQUFtQjtJQUNuQixrQkFBa0I7Q0FDckI7QUFFRDs7SUFFSSxtQkFBbUI7O0lBRW5CLFdBQVc7SUFDWCxZQUFZOztJQUVaLHNCQUFzQjtJQUN0QixtQkFBbUI7SUFDbkIsaUJBQWlCOztJQUVqQixlQUFlO0lBQ2Ysb0JBQW9COztJQUVwQixvQkFBb0I7Q0FDdkI7QUFFRDs7SUFFSSxvQ0FBb0M7SUFDcEMsMkJBQTJCO0NBQzlCO0FBRUQ7O0lBRUksc0NBQXNDO0lBQ3RDLHlCQUF5QjtDQUM1QjtBQUVEOztJQUVJLHNCQUFzQjs7SUFFdEIsdUJBQXVCO0lBQ3ZCLGNBQWM7O0lBRWQseUNBQXlDOztJQUV6Qyx5QkFBeUI7Q0FDNUI7QUFFRDs7SUFFSSxtQkFBbUI7SUFDbkIsT0FBTztJQUNQLFFBQVE7SUFDUixTQUFTO0lBQ1QsVUFBVTs7SUFFVixZQUFZO0lBQ1osc0NBQXNDO0lBQ3RDLFdBQVc7Q0FDZDtBQUVEOztJQUVJLG9DQUFvQztDQUN2QztBQUdEOztJQUVJLGNBQWM7Q0FDakI7QUFFRDs7SUFFSSxjQUFjO0NBQ2pCO0FDN0VELG9FQUFvRTtBQUVwRTtFQUNFLDhCQUE4QjtFQUM5QixtQkFBbUI7RUFDbkIsaUJBQWlCO0VBQ2pCLDJHQUEyRztDQUM1RztBQUVEO0VBQ0UsOEJBQThCO0VBQzlCLG9CQUFvQjtFQUNwQixtQkFBbUI7RUFDbkIsZ0JBQWdCO0VBQ2hCLGVBQWU7RUFDZix1QkFBdUI7RUFDdkIscUJBQXFCO0VBQ3JCLHNCQUFzQjtFQUN0Qix1QkFBdUIsQ0FBQywrREFBK0Q7RUFDdkYsb0JBQW9CO0VBQ3BCLGtCQUFrQjtFQUNsQixlQUFlO0VBQ2YsbUNBQW1DO0VBQ25DLG1DQUFtQztDQUNwQyIsImZpbGUiOiJzcmMvc3R5bGVzLmNzcyIsInNvdXJjZXNDb250ZW50IjpbIi8qIFlvdSBjYW4gYWRkIGdsb2JhbCBzdHlsZXMgdG8gdGhpcyBmaWxlLCBhbmQgYWxzbyBpbXBvcnQgb3RoZXIgc3R5bGUgZmlsZXMgKi9cblxuQGltcG9ydCB1cmwoJ2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1Sb2JvdG8nKTtcblxuQGltcG9ydCB1cmwoJ2Nzcy90aGVtZWRlZnMuY3NzJyk7XG5AaW1wb3J0IHVybCgnY3NzL21haW4uY3NzJyk7XG5AaW1wb3J0IHVybCgnY3NzL21hdGVyaWFsLWJ1dHRvbi5jc3MnKTtcbkBpbXBvcnQgdXJsKCdjc3MvbWF0ZXJpYWwtaWNvbnMuY3NzJyk7XG4iLCI6cm9vdFxue1xuICAgIC0tdGhlbWUtbWFpbjogI2M3MjEyMTtcbiAgICAtLXRoZW1lLWJhY2s6ICNlZWVlZWU7XG4gICAgLS10aGVtZS10ZXh0OiAjODY4Njg2O1xuICAgIC0tdGhlbWUtYWNjZW50OiB3aGl0ZTtcblxuICAgIC0tdGhlbWUtZm9udDogXCJSb2JvdG9cIiwgXCJPcGVuIFNhbnNcIiwgXCJWZXJkYW5hXCIsIFwiSGVsdmV0aWNhXCIsIEFyaWFsLCBzZXJpZjtcbn0iLCJodG1sLCBib2R5XG57XG4gICAgd2lkdGg6IDEwMHZ3O1xuICAgIG1pbi1oZWlnaHQ6IDEwMHZoO1xuXG4gICAgcGFkZGluZzogMDtcbiAgICBtYXJnaW46IDA7XG5cbiAgICBmb250LWZhbWlseTogdmFyKC0tdGhlbWUtZm9udCk7XG4gICAgZm9udC1zaXplOiAxNHB4O1xuXG4gICAgYmFja2dyb3VuZC1jb2xvcjogdmFyKC0tdGhlbWUtYmFjayk7XG4gICAgY29sb3I6IHZhcigtLXRoZW1lLXRleHQpO1xufVxuXG5oZWFkZXJcbntcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZGlyZWN0aW9uOiByb3c7XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG5cbiAgICBoZWlnaHQ6IDRlbTtcbiAgICBwYWRkaW5nOiAwIDJlbTtcblxuICAgIGZvbnQtc2l6ZTogMTRweDtcblxuICAgIGJhY2tncm91bmQtY29sb3I6IHZhcigtLXRoZW1lLW1haW4pO1xuICAgIGNvbG9yOiB2YXIoLS10aGVtZS1hY2NlbnQpO1xuXG4gICAgYm94LXNoYWRvdzogMCAwIDEwcHggcmdiYSgwLCAwLCAwLCAwLjQ3OSk7XG59XG5cbmhlYWRlciBoMVxue1xuICAgIG1hcmdpbjogMDtcbiAgICBwYWRkaW5nOiAwO1xuXG4gICAgZm9udC1zaXplOiAxNHB4O1xufVxuXG5oZWFkZXIgLm1lbnUgYVxue1xuICAgIGNvbG9yOiB3aGl0ZTtcbiAgICBoZWlnaHQ6IDJlbTtcbiAgICBwYWRkaW5nOiAxZW07XG4gICAgZm9udC1zaXplOiAxZW07XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xufVxuXG5oZWFkZXIgLm1lbnUgYTpob3Zlclxue1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmMGY4ZmYzODtcbn1cblxubWFpblxue1xuICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG4gICAgaGVpZ2h0OiAxMDAlO1xuICAgIHdpZHRoOiA4MCU7XG4gICAgbWFyZ2luOiAyZW0gYXV0bztcbn1cblxudGFibGVcbntcbiAgICBib3JkZXItY29sbGFwc2U6IGNvbGxhcHNlO1xufVxuXG50YWJsZSB0aGVhZFxue1xuICAgIGJhY2tncm91bmQtY29sb3I6IHZhcigtLXRoZW1lLW1haW4pO1xuICAgIGNvbG9yOiB2YXIoLS10aGVtZS1hY2NlbnQpO1xufVxuXG50YWJsZSB0ZCwgdGFibGUgdGhcbntcbiAgICBwYWRkaW5nOiAwLjVlbSAxLjVlbTtcbn1cblxudGFibGUgdGJvZHkgdHI6bnRoLWNoaWxkKGV2ZW4pXG57XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2U2ZTZlNjtcbn1cblxudGFibGUgdGJvZHkgdHI6bnRoLWNoaWxkKG9kZClcbntcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZGJkYmRiO1xufSIsIlxuLm1hdGVyaWFsLWJ1dHRvblxue1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcblxuICAgIHBhZGRpbmc6IDAuN2VtIDEuMmVtO1xuXG4gICAgYm9yZGVyLXJhZGl1czogNHB4O1xuICAgIGZvbnQtd2VpZ2h0OiBib2xkO1xufVxuXG4ubWF0ZXJpYWwtYnV0dG9uLWZhYlxue1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICBcbiAgICB3aWR0aDogMmVtO1xuICAgIGhlaWdodDogMmVtO1xuXG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICBsaW5lLWhlaWdodDogMmVtO1xuXG4gICAgZm9udC1zaXplOiAyZW07XG4gICAgZm9udC13ZWlnaHQ6IG5vcm1hbDtcblxuICAgIGJvcmRlci1yYWRpdXM6IDEwMCU7XG59XG5cbi5tYXRlcmlhbC1idXR0b24sIC5tYXRlcmlhbC1idXR0b24tZmFiXG57XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdmFyKC0tdGhlbWUtbWFpbik7XG4gICAgY29sb3I6IHZhcigtLXRoZW1lLWFjY2VudCk7XG59XG5cbi5tYXRlcmlhbC1idXR0b24ubGlnaHQsIC5tYXRlcmlhbC1idXR0b24tZmFiLmxpZ2h0XG57XG4gICAgYmFja2dyb3VuZC1jb2xvcjogdmFyKC0tdGhlbWUtYWNjZW50KTtcbiAgICBjb2xvcjogdmFyKC0tdGhlbWUtbWFpbik7XG59XG5cbipbY2xhc3MqPVwibWF0ZXJpYWwtYnV0dG9uXCJdLCAqW2NsYXNzKj1cIm1hdGVyaWFsLWJ1dHRvblwiXTo6YmVmb3JlXG57XG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICAgIFxuICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7XG4gICAgb3V0bGluZTogbm9uZTtcblxuICAgIGJveC1zaGFkb3c6IDAgMCA1cHggcmdiYSgwLCAwLCAwLCAwLjQ5Myk7XG5cbiAgICB0cmFuc2l0aW9uOiBvcGFjaXR5IDAuMnM7XG59XG5cbipbY2xhc3MqPVwibWF0ZXJpYWwtYnV0dG9uXCJdOjpiZWZvcmVcbntcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgdG9wOiAwO1xuICAgIGxlZnQ6IDA7XG4gICAgcmlnaHQ6IDA7XG4gICAgYm90dG9tOiAwO1xuXG4gICAgY29udGVudDogXCJcIjtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB2YXIoLS10aGVtZS1hY2NlbnQpO1xuICAgIG9wYWNpdHk6IDA7XG59XG5cbipbY2xhc3MqPVwibWF0ZXJpYWwtYnV0dG9uXCJdLmxpZ2h0OjpiZWZvcmVcbntcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiB2YXIoLS10aGVtZS1tYWluKTtcbn1cblxuXG4qW2NsYXNzKj1cIm1hdGVyaWFsLWJ1dHRvblwiXTpob3Zlcjo6YmVmb3JlXG57XG4gICAgb3BhY2l0eTogMC4wNDtcbn1cblxuKltjbGFzcyo9XCJtYXRlcmlhbC1idXR0b25cIl0ubGlnaHQ6aG92ZXI6OmJlZm9yZVxue1xuICAgIG9wYWNpdHk6IDAuMTU7XG59IiwiXG5cbi8qT3JpZ2luYWwgY29kZSBiZWxvbmdzIHRvIEdvb2dsZS4gTWlub3IgdHdlYWsgYnkgRy4gTGVyb3ktRmVycmVjLiovXG5cbkBmb250LWZhY2Uge1xuICBmb250LWZhbWlseTogJ01hdGVyaWFsIEljb25zJztcbiAgZm9udC1zdHlsZTogbm9ybWFsO1xuICBmb250LXdlaWdodDogNDAwO1xuICBzcmM6IHVybChodHRwczovL2ZvbnRzLmdzdGF0aWMuY29tL3MvbWF0ZXJpYWxpY29ucy92NDEvZmxVaFJxNnR6WmNsUUVKLVZkZy1JdWlhRHNOYy53b2ZmMikgZm9ybWF0KCd3b2ZmMicpO1xufVxuXG4ubWF0ZXJpYWwtaWNvbnMge1xuICBmb250LWZhbWlseTogJ01hdGVyaWFsIEljb25zJztcbiAgZm9udC13ZWlnaHQ6IG5vcm1hbDtcbiAgZm9udC1zdHlsZTogbm9ybWFsO1xuICBmb250LXNpemU6IDI0cHg7XG4gIGxpbmUtaGVpZ2h0OiAxO1xuICBsZXR0ZXItc3BhY2luZzogbm9ybWFsO1xuICB0ZXh0LXRyYW5zZm9ybTogbm9uZTtcbiAgZGlzcGxheTogaW5saW5lLXRhYmxlO1xuICB2ZXJ0aWNhbC1hbGlnbjogYm90dG9tOyAvKiBmaXggaWNvbiBtaXNhbGlnbmluZyB3aXRoIHRleHQgYmFzZWxpbmUgaW4gaW5saW5lIGVsZW1lbnRzKi9cbiAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbiAgd29yZC13cmFwOiBub3JtYWw7XG4gIGRpcmVjdGlvbjogbHRyO1xuICAtbW96LWZvbnQtZmVhdHVyZS1zZXR0aW5nczogJ2xpZ2EnO1xuICAtbW96LW9zeC1mb250LXNtb290aGluZzogZ3JheXNjYWxlO1xufVxuIl19 */", '', '']]

/***/ }),

/***/ "./node_modules/style-loader/lib/addStyles.js":
/*!****************************************************!*\
  !*** ./node_modules/style-loader/lib/addStyles.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/

var stylesInDom = {};

var	memoize = function (fn) {
	var memo;

	return function () {
		if (typeof memo === "undefined") memo = fn.apply(this, arguments);
		return memo;
	};
};

var isOldIE = memoize(function () {
	// Test for IE <= 9 as proposed by Browserhacks
	// @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
	// Tests for existence of standard globals is to allow style-loader
	// to operate correctly into non-standard environments
	// @see https://github.com/webpack-contrib/style-loader/issues/177
	return window && document && document.all && !window.atob;
});

var getTarget = function (target, parent) {
  if (parent){
    return parent.querySelector(target);
  }
  return document.querySelector(target);
};

var getElement = (function (fn) {
	var memo = {};

	return function(target, parent) {
                // If passing function in options, then use it for resolve "head" element.
                // Useful for Shadow Root style i.e
                // {
                //   insertInto: function () { return document.querySelector("#foo").shadowRoot }
                // }
                if (typeof target === 'function') {
                        return target();
                }
                if (typeof memo[target] === "undefined") {
			var styleTarget = getTarget.call(this, target, parent);
			// Special case to return head of iframe instead of iframe itself
			if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
				try {
					// This will throw an exception if access to iframe is blocked
					// due to cross-origin restrictions
					styleTarget = styleTarget.contentDocument.head;
				} catch(e) {
					styleTarget = null;
				}
			}
			memo[target] = styleTarget;
		}
		return memo[target]
	};
})();

var singleton = null;
var	singletonCounter = 0;
var	stylesInsertedAtTop = [];

var	fixUrls = __webpack_require__(/*! ./urls */ "./node_modules/style-loader/lib/urls.js");

module.exports = function(list, options) {
	if (typeof DEBUG !== "undefined" && DEBUG) {
		if (typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
	}

	options = options || {};

	options.attrs = typeof options.attrs === "object" ? options.attrs : {};

	// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
	// tags it will allow on a page
	if (!options.singleton && typeof options.singleton !== "boolean") options.singleton = isOldIE();

	// By default, add <style> tags to the <head> element
        if (!options.insertInto) options.insertInto = "head";

	// By default, add <style> tags to the bottom of the target
	if (!options.insertAt) options.insertAt = "bottom";

	var styles = listToStyles(list, options);

	addStylesToDom(styles, options);

	return function update (newList) {
		var mayRemove = [];

		for (var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];

			domStyle.refs--;
			mayRemove.push(domStyle);
		}

		if(newList) {
			var newStyles = listToStyles(newList, options);
			addStylesToDom(newStyles, options);
		}

		for (var i = 0; i < mayRemove.length; i++) {
			var domStyle = mayRemove[i];

			if(domStyle.refs === 0) {
				for (var j = 0; j < domStyle.parts.length; j++) domStyle.parts[j]();

				delete stylesInDom[domStyle.id];
			}
		}
	};
};

function addStylesToDom (styles, options) {
	for (var i = 0; i < styles.length; i++) {
		var item = styles[i];
		var domStyle = stylesInDom[item.id];

		if(domStyle) {
			domStyle.refs++;

			for(var j = 0; j < domStyle.parts.length; j++) {
				domStyle.parts[j](item.parts[j]);
			}

			for(; j < item.parts.length; j++) {
				domStyle.parts.push(addStyle(item.parts[j], options));
			}
		} else {
			var parts = [];

			for(var j = 0; j < item.parts.length; j++) {
				parts.push(addStyle(item.parts[j], options));
			}

			stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
		}
	}
}

function listToStyles (list, options) {
	var styles = [];
	var newStyles = {};

	for (var i = 0; i < list.length; i++) {
		var item = list[i];
		var id = options.base ? item[0] + options.base : item[0];
		var css = item[1];
		var media = item[2];
		var sourceMap = item[3];
		var part = {css: css, media: media, sourceMap: sourceMap};

		if(!newStyles[id]) styles.push(newStyles[id] = {id: id, parts: [part]});
		else newStyles[id].parts.push(part);
	}

	return styles;
}

function insertStyleElement (options, style) {
	var target = getElement(options.insertInto)

	if (!target) {
		throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
	}

	var lastStyleElementInsertedAtTop = stylesInsertedAtTop[stylesInsertedAtTop.length - 1];

	if (options.insertAt === "top") {
		if (!lastStyleElementInsertedAtTop) {
			target.insertBefore(style, target.firstChild);
		} else if (lastStyleElementInsertedAtTop.nextSibling) {
			target.insertBefore(style, lastStyleElementInsertedAtTop.nextSibling);
		} else {
			target.appendChild(style);
		}
		stylesInsertedAtTop.push(style);
	} else if (options.insertAt === "bottom") {
		target.appendChild(style);
	} else if (typeof options.insertAt === "object" && options.insertAt.before) {
		var nextSibling = getElement(options.insertAt.before, target);
		target.insertBefore(style, nextSibling);
	} else {
		throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
	}
}

function removeStyleElement (style) {
	if (style.parentNode === null) return false;
	style.parentNode.removeChild(style);

	var idx = stylesInsertedAtTop.indexOf(style);
	if(idx >= 0) {
		stylesInsertedAtTop.splice(idx, 1);
	}
}

function createStyleElement (options) {
	var style = document.createElement("style");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}

	if(options.attrs.nonce === undefined) {
		var nonce = getNonce();
		if (nonce) {
			options.attrs.nonce = nonce;
		}
	}

	addAttrs(style, options.attrs);
	insertStyleElement(options, style);

	return style;
}

function createLinkElement (options) {
	var link = document.createElement("link");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}
	options.attrs.rel = "stylesheet";

	addAttrs(link, options.attrs);
	insertStyleElement(options, link);

	return link;
}

function addAttrs (el, attrs) {
	Object.keys(attrs).forEach(function (key) {
		el.setAttribute(key, attrs[key]);
	});
}

function getNonce() {
	if (false) {}

	return __webpack_require__.nc;
}

function addStyle (obj, options) {
	var style, update, remove, result;

	// If a transform function was defined, run it on the css
	if (options.transform && obj.css) {
	    result = options.transform(obj.css);

	    if (result) {
	    	// If transform returns a value, use that instead of the original css.
	    	// This allows running runtime transformations on the css.
	    	obj.css = result;
	    } else {
	    	// If the transform function returns a falsy value, don't add this css.
	    	// This allows conditional loading of css
	    	return function() {
	    		// noop
	    	};
	    }
	}

	if (options.singleton) {
		var styleIndex = singletonCounter++;

		style = singleton || (singleton = createStyleElement(options));

		update = applyToSingletonTag.bind(null, style, styleIndex, false);
		remove = applyToSingletonTag.bind(null, style, styleIndex, true);

	} else if (
		obj.sourceMap &&
		typeof URL === "function" &&
		typeof URL.createObjectURL === "function" &&
		typeof URL.revokeObjectURL === "function" &&
		typeof Blob === "function" &&
		typeof btoa === "function"
	) {
		style = createLinkElement(options);
		update = updateLink.bind(null, style, options);
		remove = function () {
			removeStyleElement(style);

			if(style.href) URL.revokeObjectURL(style.href);
		};
	} else {
		style = createStyleElement(options);
		update = applyToTag.bind(null, style);
		remove = function () {
			removeStyleElement(style);
		};
	}

	update(obj);

	return function updateStyle (newObj) {
		if (newObj) {
			if (
				newObj.css === obj.css &&
				newObj.media === obj.media &&
				newObj.sourceMap === obj.sourceMap
			) {
				return;
			}

			update(obj = newObj);
		} else {
			remove();
		}
	};
}

var replaceText = (function () {
	var textStore = [];

	return function (index, replacement) {
		textStore[index] = replacement;

		return textStore.filter(Boolean).join('\n');
	};
})();

function applyToSingletonTag (style, index, remove, obj) {
	var css = remove ? "" : obj.css;

	if (style.styleSheet) {
		style.styleSheet.cssText = replaceText(index, css);
	} else {
		var cssNode = document.createTextNode(css);
		var childNodes = style.childNodes;

		if (childNodes[index]) style.removeChild(childNodes[index]);

		if (childNodes.length) {
			style.insertBefore(cssNode, childNodes[index]);
		} else {
			style.appendChild(cssNode);
		}
	}
}

function applyToTag (style, obj) {
	var css = obj.css;
	var media = obj.media;

	if(media) {
		style.setAttribute("media", media)
	}

	if(style.styleSheet) {
		style.styleSheet.cssText = css;
	} else {
		while(style.firstChild) {
			style.removeChild(style.firstChild);
		}

		style.appendChild(document.createTextNode(css));
	}
}

function updateLink (link, options, obj) {
	var css = obj.css;
	var sourceMap = obj.sourceMap;

	/*
		If convertToAbsoluteUrls isn't defined, but sourcemaps are enabled
		and there is no publicPath defined then lets turn convertToAbsoluteUrls
		on by default.  Otherwise default to the convertToAbsoluteUrls option
		directly
	*/
	var autoFixUrls = options.convertToAbsoluteUrls === undefined && sourceMap;

	if (options.convertToAbsoluteUrls || autoFixUrls) {
		css = fixUrls(css);
	}

	if (sourceMap) {
		// http://stackoverflow.com/a/26603875
		css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
	}

	var blob = new Blob([css], { type: "text/css" });

	var oldSrc = link.href;

	link.href = URL.createObjectURL(blob);

	if(oldSrc) URL.revokeObjectURL(oldSrc);
}


/***/ }),

/***/ "./node_modules/style-loader/lib/urls.js":
/*!***********************************************!*\
  !*** ./node_modules/style-loader/lib/urls.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {


/**
 * When source maps are enabled, `style-loader` uses a link element with a data-uri to
 * embed the css on the page. This breaks all relative urls because now they are relative to a
 * bundle instead of the current page.
 *
 * One solution is to only use full urls, but that may be impossible.
 *
 * Instead, this function "fixes" the relative urls to be absolute according to the current page location.
 *
 * A rudimentary test suite is located at `test/fixUrls.js` and can be run via the `npm test` command.
 *
 */

module.exports = function (css) {
  // get current location
  var location = typeof window !== "undefined" && window.location;

  if (!location) {
    throw new Error("fixUrls requires window.location");
  }

	// blank or null?
	if (!css || typeof css !== "string") {
	  return css;
  }

  var baseUrl = location.protocol + "//" + location.host;
  var currentDir = baseUrl + location.pathname.replace(/\/[^\/]*$/, "/");

	// convert each url(...)
	/*
	This regular expression is just a way to recursively match brackets within
	a string.

	 /url\s*\(  = Match on the word "url" with any whitespace after it and then a parens
	   (  = Start a capturing group
	     (?:  = Start a non-capturing group
	         [^)(]  = Match anything that isn't a parentheses
	         |  = OR
	         \(  = Match a start parentheses
	             (?:  = Start another non-capturing groups
	                 [^)(]+  = Match anything that isn't a parentheses
	                 |  = OR
	                 \(  = Match a start parentheses
	                     [^)(]*  = Match anything that isn't a parentheses
	                 \)  = Match a end parentheses
	             )  = End Group
              *\) = Match anything and then a close parens
          )  = Close non-capturing group
          *  = Match anything
       )  = Close capturing group
	 \)  = Match a close parens

	 /gi  = Get all matches, not the first.  Be case insensitive.
	 */
	var fixedCss = css.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function(fullMatch, origUrl) {
		// strip quotes (if they exist)
		var unquotedOrigUrl = origUrl
			.trim()
			.replace(/^"(.*)"$/, function(o, $1){ return $1; })
			.replace(/^'(.*)'$/, function(o, $1){ return $1; });

		// already a full url? no change
		if (/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(unquotedOrigUrl)) {
		  return fullMatch;
		}

		// convert the url to a full url
		var newUrl;

		if (unquotedOrigUrl.indexOf("//") === 0) {
		  	//TODO: should we add protocol?
			newUrl = unquotedOrigUrl;
		} else if (unquotedOrigUrl.indexOf("/") === 0) {
			// path should be relative to the base url
			newUrl = baseUrl + unquotedOrigUrl; // already starts with '/'
		} else {
			// path should be relative to current directory
			newUrl = currentDir + unquotedOrigUrl.replace(/^\.\//, ""); // Strip leading './'
		}

		// send back the fixed url(...)
		return "url(" + JSON.stringify(newUrl) + ")";
	});

	// send back the fixed css
	return fixedCss;
};


/***/ }),

/***/ "./src/styles.css":
/*!************************!*\
  !*** ./src/styles.css ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../node_modules/@angular-devkit/build-angular/src/angular-cli-files/plugins/raw-css-loader.js!../node_modules/postcss-loader/src??embedded!./styles.css */ "./node_modules/@angular-devkit/build-angular/src/angular-cli-files/plugins/raw-css-loader.js!./node_modules/postcss-loader/src/index.js?!./src/styles.css");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ 2:
/*!******************************!*\
  !*** multi ./src/styles.css ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/herrcrazi/projets/cccp-kolkhoze-manager/angular/cccpkm-front/src/styles.css */"./src/styles.css");


/***/ })

},[[2,"runtime"]]]);
//# sourceMappingURL=styles.js.map