import './bootstrap';
import '../css/app.css';
import 'preline';
import Swal from 'sweetalert2';

window.Swal = Swal;

document.addEventListener('livewire:navigated', () => {
    if (window.HSStaticMethod) {
        window.HSStaticMethod.autoInit();
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const elems = document.querySelectorAll('.dropdown-trigger');
    if (typeof M !== 'undefined' && M.Dropdown) {
        M.Dropdown.init(elems);
    }
});
