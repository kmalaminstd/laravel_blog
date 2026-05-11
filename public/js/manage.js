
document.addEventListener('DOMContentLoaded', ()=> {

    let quill;
    if(document.querySelector('#quillEditor')){
        quill = new Quill ('#quillEditor', {
            theme : 'snow'
        })
    }

    // submit html content
    document.querySelector('.post_form').addEventListener('submit', function () {
        document.querySelector('#description').value = quill.root.innerHTML;
    });

})