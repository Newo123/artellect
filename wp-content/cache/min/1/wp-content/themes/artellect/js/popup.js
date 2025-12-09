window.addEventListener('click',e=>{const target=e.target.closest('[data-popup]');if(target&&target?.dataset?.popup!=='menuPopup'){const popup=new Popup(target);popup.loadAndShow()}});class Popup{url='';button;body;popup;observer;constructor(button){this.button=button;this.url=this.button.dataset.popup;this.body=document.body}
load(){fetch(this.url).then(async req=>{const res=await req.text();this.popup=new DOMParser().parseFromString(res,'text/html').querySelector('.popup');this.body.insertAdjacentElement('beforeend',this.popup);this.show();this.setupObserver()})}
show(){if(!this.popup)return;this.body.classList.add('scroll-hidden');setTimeout(()=>{if(this.popup){initAtropos();this.popup.classList.add('show')}},100)}
loadAndShow(){this.load()}
setupObserver(){if(!this.popup)return;this.observer=new MutationObserver(mutations=>{mutations.forEach(mutation=>{if(mutation.type==='attributes'&&mutation.attributeName==='class'&&!this.popup.classList.contains('show')){this.onHide()}})});this.observer.observe(this.popup,{attributes:!0,attributeFilter:['class'],})}
onHide(){this.body.classList.remove('scroll-hidden');if(this.observer){this.observer.disconnect();this.observer=null}
setTimeout(()=>{if(this.popup&&this.popup.parentNode){this.popup.parentNode.removeChild(this.popup);this.popup=null}},500)}
remove(){if(this.observer){this.observer.disconnect();this.observer=null}
if(this.popup&&this.popup.parentNode){this.popup.parentNode.removeChild(this.popup);this.popup=null}
this.body.classList.remove('scroll-hidden')}}