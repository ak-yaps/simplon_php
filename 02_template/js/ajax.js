/* jshint esversion: 6 */

const ajax = (function ajax() {
    "use strict";

    function postData() {
        // coder ici ...
        // pour poster des données vers le serveur
    }

    function getData(url, queryParam, clbk) {
        const xhr = new XMLHttpRequest();

        xhr.open("GET", url + `?${ queryParam }`);

        xhr.onload = function(evt) {
            // console.log(evt);
            if (this.response) {
                clbk(JSON.parse(this.response));
            }
        };

        xhr.send();
    }

    return {
        postData: postData,
        getData: getData,
    };

}());
