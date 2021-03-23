import {
    generateID
} from './Utils';


class LinkIDs {

    constructor() {

        this.isSingle = document.body.classList.contains('single');

        if (this.isSingle === true) {

            let items = document.querySelectorAll("h1, h2, h3");

            for (let elem of items) {
                elem.id = generateID(elem.innerHTML);
            }
        }

    }
}

new LinkIDs();