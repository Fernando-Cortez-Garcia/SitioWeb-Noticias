var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],
    ['link'],
    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
    [{ 'script': 'sub' }, { 'script': 'super' }],
    [{ 'color': [] }, { 'background': [] }],
    [{ 'align': [] }],
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    [{ 'direction': 'rtl' }],
    [{ 'indent': '-1' }, { 'indent': '+1' }]
];
var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
        toolbar: toolbarOptions
    }
});
//obtenemos el texto del quill

function jsSave() {
    var contenido = quill.container.firstChild.innerHTML;
    var formulario = document.getElementById("formulario");
    var datos = new FormData(formulario);
    var cabezera = datos.get("cabezera");
    var titulo = datos.get("titulo");
    var categoria = dastos.get("categoria");



    header('Location: ../php/savenoticia.php?contenido=' + contenido);
    // fetch('../php/savenoticia.php?cabezera=' + cabezera);
    // fetch('../php/savenoticia.php?titulo=' + titulo);
    // fetch('../php/savenoticia.php?categoria=' + categoria);

}