import './bootstrap';
import '../css/app.css';
import 'preline';
import Swal from 'sweetalert2'

document.addEventListener('livewire:navigated', () => {
window.HSStaticMethod.autoInit();
})

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(elems);
});

window.Swal = Swal
