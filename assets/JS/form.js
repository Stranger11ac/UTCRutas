const textareas = document.querySelectorAll("textarea");

for (let i = 0; i < textareas.length; i++) {
    let textarea = textareas[i];
    textarea.style.height = "auto";
    textarea.style.height = `${textarea.scrollHeight}px`;

    textarea.addEventListener("input", () => {
        textarea.style.height = "auto";
        textarea.style.height = `${textarea.scrollHeight}px`;
    });
}

$(document).ready(function () {

    function toggleOrder() {
        $('.table-c0').toggleClass('d-none');
        $('.btn_order').toggleClass('d-none');
    }

    $('.btn_desactive').click(toggleOrder);
    $('.btn_order').click(toggleOrder);
});