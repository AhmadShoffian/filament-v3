import './bootstrap';

import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';

import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';

FilePond.registerPlugin(FilePondPluginImagePreview);

const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

FilePond.setOptions({
    server: {
        process: '/upload/process',
        revert: '/upload/revert',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        }
    },
    labelIdle: `Drag & Drop your files or <span class="filepond--label-action">Browse</span>`,
    stylePanelAspectRatio: 1,
    imagePreviewHeight: 150,
});

// Inisialisasi semua input dengan class filepond
FilePond.parse(document.body);
