export default class Tab {
    constructor() {
        /**
         * @type {HTMLElement[]}
         */
        this.tabs = [];
        /**
         * @type {HTMLElement[]}
         */
        this.pages = [];
        this.current = 0;
    }
    /**
     * 
     * @param {HTMLElement} contener 
     */
    control(contener) {
        Array.from(contener.children)
            .forEach(tab => {
                this.tabs.push(tab);
                tab.addEventListener('click', e => {
                    this.select(this.tabs.indexOf(tab) + 1)
                });
            })
    }
    /**
     * 
     * @param {HTMLElement} contener 
     */
    content(contener) {
        this.pages = Array.from(contener.children);
        this.pages.forEach((page, index) => {
            if (index == this.current) {
                page.style.display = 'block';
                return;
            }
            page.style.display = 'none';
        })
    }

    select(page) {
        if (page - 1 < 0) return;
        this.pages[this.current].style.display = 'none';
        this.current = page - 1
        this.pages[this.current].style.display = 'block';
        
    }
}