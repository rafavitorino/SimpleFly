class burgermenu {
  constructor(burger, menu, links){
    this.burger=document.querySelector(burger);
    this.menu=document.querySelector(menu);
    this.menulinks=document.querySelectorAll(links);
    this.ativaClass="ativa";

    this.clica=this.clica.bind(this);
  }
  clica(){
    console.log(this);
    this.menu.classList.toggle(this.ativaClass);
  }
  eventodeclick(){
    this.burger.addEventListener("click", this.clica);
  }

  init(){
    if (this.burger){
      this.eventodeclick();
    }
    return this;
  }
}
const Burgermenu=new burgermenu(
  ".burger",
  ".menu",
  ".menu li",
);
Burgermenu.init();