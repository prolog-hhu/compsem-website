import {
    generateID
} from './Utils';

class FloatNav {

    constructor() {

        this.isSingle = document.body.classList.contains('single-kapitel');
        this.domRef = document.getElementById("float-nav");

        this.openClose = this.addOpenClose();

        if (this.isSingle === true) {

            let major = 0;
            let minor = 0;
            let num = "";

            let items = document.getElementById("content").querySelectorAll("h1, h2, h3");

            for (let elem of items) {

               if (elem.tagName == "H2") {
                    major++;
                    minor = 1;
                    num = major.toString(10).concat(") ");
               }

               if (elem.tagName == "H3") {
                    minor++;
                    num = major.toString(10).concat(".", minor.toString(10), ") ");
                }
                
                elem.id = generateID(elem.innerHTML);
                this.addLinkElement(elem, num);
                elem.innerHTML = num + elem.innerHTML;
            }
        }

    }

    addLinkElement(el, num) {
        let linkContainer = document.createElement("li");
        linkContainer.classList.add("Box-row");

        if (el.tagName == "H2") {
            linkContainer.classList.add("text-bold");
        }

        if (el.tagName == "H3") {
            linkContainer.classList.add("pl-5");
        }
        
        let linkText = document.createTextNode(num.concat(el.innerHTML));
        let linkNode = document.createElement("a");
        linkNode.href = "#" + el.id;
        
        linkNode.appendChild(linkText);
        linkContainer.appendChild(linkNode);
        this.domRef.appendChild(linkContainer);
    }


    addOpenClose() {
        let button = document.getElementById("open-close");
        button.addEventListener("click", this.handleOpenClose.bind(this));
        return button;
    }

    handleOpenClose() {
        this.domRef.classList.toggle("d-none");
    
        if (!this.domRef.classList.contains("d-none")) {
            this.openClose.innerHTML = "close";
        } else {
            this.openClose.innerHTML = "open";
        }
    }
}

new FloatNav();