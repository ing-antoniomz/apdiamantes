$(function(){
window.{{ config('datatables-html.namespace', 'LaravelDataTables') }} =
window.{{ config('datatables-html.namespace', 'LaravelDataTables') }} || {};
window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}["%1$s"] =
$("#%1$s").DataTable(%2$s);

// Configurar AJAX con CSRF
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

// Evento para eliminar con SweetAlert2
{{ config('datatables-html.namespace', 'LaravelDataTables') }}["%1$s"].on('click', '[data-destroy]', function (e) {
e.preventDefault();
let url = $(this).data('destroy');

Swal.fire({
title: "{{ __('Are you sure?') }}",
text: "{{ __('You won\'t be able to revert this!') }}",
icon: "warning",
showCancelButton: true,
confirmButtonColor: "#d33",
cancelButtonColor: "#3085d6",
confirmButtonText: "{{ __('Delete') }}",
cancelButtonText: "{{ __('Cancel') }}",
customClass: {
confirmButton: "btn bg-white", // Clases para el botón de confirmar
cancelButton: "btn btn-secondary" // Clases para el botón de cancelar
},
buttonsStyling: false
}).then((result) => {
if (result.isConfirmed) {
axios.delete(url, {
'_method': 'DELETE',
})
.then(function (response) {
Swal.fire({
title: "{{ __('Deleted') }}",
text: "{{ __('Record Deleted') }}",
icon: "success",
confirmButtonText: "OK",
customClass: {
confirmButton: "btn btn-primary" // Clase de Bootstrap para un botón rojo oscuro
},
buttonsStyling: false // Desactiva los estilos predeterminados de SweetAlert
}).then(() => {
{{ config('datatables-html.namespace', 'LaravelDataTables') }}["%1$s"].ajax.reload();
});
})
.catch(function (error) {
console.log(error);
Swal.fire("Error!", "{{ __('Something went wrong') }}", "error");
});
}
});
});
});