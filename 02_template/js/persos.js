/* jshint esversion: 6 */

var persos = (function persos() {
    "use strict";

    function createList(persos, elements) {
        resetList();
        const ul = document.createElement("ul");
        ul.className = "persos";

        persos.forEach(function(p) {
            const li = document.createElement("li");
            li.className = "perso";
            li.innerHTML += `
                <span class="name"> ${ p.name } </span>
                <span class="genre"> ${ p.genre } </span>
            `;
            ul.appendChild(li);
        });

        elements.app.appendChild(ul);
    }

    function resetList() {
        const persos = document.querySelector(".persos");
        if (persos) {
            persos.remove();
        }
    }

    return {
        createList: createList
    };

}());
