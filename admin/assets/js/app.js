
document.addEventListener('DOMContentLoaded',()=>{
  const el=document.querySelector('[data-js="hello"]');
  if(el) el.textContent='JS carregat ✔';
});
console.log('hola');
let taula = new DataTable('#taulaCursos');