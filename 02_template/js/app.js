/* jshint esversion: 6 */

var app = (function app() {
    "use strict";
    console.log(persos);
    console.log(dom);
    console.log(ajax);

    window.addEventListener("DOMContentLoaded", function initApp() {

        dom.init(function(elements) {

            console.log(dom.getElements());

            if (elements.getDataPHP)
            elements.getDataPHP.onclick = function () {
                ajax.getData("data.php", "ajax=persos", function (data) {
                    persos.createList(data, elements);
                });
            };

            if (elements.getDataAPI)
            elements.getDataAPI.onclick = function () {
                ajax.getData("", "", function (data) {
                    console.log(data);
                });
            };
        });
    });
}(dom));
