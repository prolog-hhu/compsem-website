
class FloatNav {

    constructor() {

        this.isSingle = document.body.classList.contains('single-kapitel');
        this.domRef = document.getElementById("float-nav");


        this.openClose = this.addOpenClose();

        if (this.isSingle === true) {

            let items = document.getElementById("content").querySelectorAll("h1, h2, h3");

            for (let elem of items) {

                let linkContainer = document.createElement("li");
                linkContainer.classList.add("Box-row");
                
                let linkText = document.createTextNode(elem.innerHTML);
                let linkNode = document.createElement("a");
                linkNode.href = "#" + elem.id;
                
                linkNode.appendChild(linkText);
                linkContainer.appendChild(linkNode);
                this.domRef.appendChild(linkContainer);
            }
        }

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